<?php

namespace App\Http\Controllers;

use App\Exports\ExportProducts;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Media;
use App\Models\Offer;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index', 'show', 'list']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('backend.products.index');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::withoutTrashed()->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('category_id', function ($row) {
                    return $row->category_id->title;
                })
                ->addColumn('imageview', function ($row) {
                    $galleryIds = json_decode($row->galleryimg_id, true);

                    if (is_array($galleryIds) && !empty($galleryIds)) {
                        $images = Media::whereIn('id', $galleryIds)->get();
                        if (!empty($images[0])) {
                            $imageUrl = asset($images[0]->file_directory . '/' . $images[0]->filename);
                        } else {
                            $imageUrl = asset('/demo_img.jpg');
                        }
                    } else {
                        $imageUrl = asset('/demo_img.jpg');
                    }
                    return '<a href="' . $imageUrl . '" data-lightbox="product-gallery" data-title="">
                        <img src="' . $imageUrl . '" alt="Product Image" class="img-thumbnail" width="50" height="50">
                    </a>';
                })
                ->addColumn('details', function ($row) {
                    return '<span>' . $row->detail . '</span>';
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('products.edit', $row->id);
                    $deleteUrl = route('products.destroy', $row->id);

                    $actionBtn = '';

                    if (Auth::user()->can('product-edit')) {
                        $actionBtn .= '<a href="' . $editUrl . '" class="edit btn btn-success btn-xs" data-toggle="tooltip"
                        data-original-title="edit">Edit</a> ';
                    }

                    if (Auth::user()->can('product-delete')) {
                        $actionBtn .= '<form action="' . $deleteUrl . '" method="POST" style="display:inline;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                        <button type="submit" class="delete btn btn-danger btn-xs">Delete</button>
                                   </form>';
                    }

                    return $actionBtn;
                })
                ->rawColumns(['imageview', 'details', 'action'])
                ->make(true);
        }
    }



    public function create()
    {
        $categories = Category::withoutTrashed()->with('subCategories')->whereNull('parent_id')->get();
        $brands = Brand::withoutTrashed()->latest()->get();
        $offers = Offer::withoutTrashed()->latest()->get();
        return view('backend.products.create', compact('categories', 'brands', 'offers'));
    }




    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products',
            'detail' => 'required|string',
            'regular_price' => 'required|numeric|min:0',
            'offer_price' => 'nullable|numeric|min:0',
            'buying_price' => 'nullable|numeric|min:0',
            'brand' => 'nullable',
            'type' => 'nullable',
            'galleryimg_id' => 'required|array',
            'category' => 'required|exists:categories,id',
            'meta_keyword' => 'nullable',
            'unit' => 'nullable',
            'quantity' => 'nullable',
            'stock_alert' => 'nullable',
        ]);

        $validatedData['type'] ??= [];
        $validatedData['type'] = json_encode($validatedData['type']);
        $validatedData['galleryimg_id'] = json_encode($validatedData['galleryimg_id']);
        $validatedData['meta_keyword'] ??= [];
        $validatedData['meta_keyword'] = json_encode($validatedData['meta_keyword']);
        $validatedData['created_by'] = Auth::user()->id;

        // Get the selected category and its ancestors
        $category = Category::findOrFail($validatedData['category']);
        $categoryHierarchy = $this->getCategoryHierarchy($category);
        $validatedData['category_hierarchy'] = json_encode($categoryHierarchy);


        $validatedData['offer_price'] = $validatedData['offer_price'] ?? $validatedData['regular_price'];
        $validatedData['buying_price'] = $validatedData['buying_price'] ?? $validatedData['offer_price'];


        $product = new Product($validatedData);
        $product->save();


        // Process variant data
        $variants = $request->input('variants');

        if ($variants && is_array($variants)) {
            foreach ($variants['size'] as $key => $size) {
                $variantData = [
                    'size' => $size,
                    'color' => $variants['color'][$key],
                    'price' => $variants['price'][$key],
                    'quantity' => $variants['quantity'][$key],
                    // Add other variant fields as needed
                ];

                // Create and save the variant
                $variant = new ProductVariant($variantData);
                $product->variants()->save($variant);
            }
        }

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Product has been added'
        );

        return redirect()->route('products.index')
            ->with($notification);
    }


    private function getCategoryHierarchy(Category $category)
    {
        $hierarchy = [$category->id];

        while ($category->parent_id) {
            $category = Category::findOrFail($category->parent_id);
            array_unshift($hierarchy, $category->id);
        }

        return $hierarchy;
    }


    public function show(Product $product)
    {
        return view('backend.products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        $post = Product::findOrFail($product->id);
        $categories = Category::with('subCategories')->whereNull('parent_id')->get();

        $brands = Brand::withoutTrashed()->latest()->get();
        $offers = Offer::withoutTrashed()->latest()->get();

        $types = json_decode($product->type);

        return view('backend.products.edit', compact('post', 'categories', 'types', 'brands', 'offers'));
    }




    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug,' . $id,
            'detail' => 'required|string',
            'regular_price' => 'required|numeric|min:0',
            'offer_price' => 'nullable|numeric|min:0',
            'buying_price' => 'nullable|numeric|min:0',
            'brand' => 'nullable',
            'type' => 'nullable',
            'galleryimg_id' => 'required|array',
            'category' => 'required|exists:categories,id',
            'meta_keyword' => 'nullable',
            'unit' => 'nullable',
            'quantity' => 'nullable',
            'stock_alert' => 'nullable',
        ]);

        // Update product details
        $validatedData['type'] = json_encode($request->input('type', []));
        $validatedData['galleryimg_id'] = json_encode($request->input('galleryimg_id', []));
        $validatedData['meta_keyword'] = json_encode($request->input('meta_keyword', []));
        $validatedData['edited_by'] = Auth::user()->id;

        // Get the selected category and its ancestors
        $category = Category::findOrFail($validatedData['category']);
        $categoryHierarchy = $this->getCategoryHierarchy($category);
        $validatedData['category_hierarchy'] = json_encode($categoryHierarchy);

        // Calculate offer price and buying price
        $validatedData['offer_price'] = $validatedData['offer_price'] ?? $validatedData['regular_price'];
        $validatedData['buying_price'] = $validatedData['buying_price'] ?? $validatedData['offer_price'];

        // Find the product and update its details
        $product = Product::findOrFail($id);
        $product->update($validatedData);


        // Process variant data
        $variants = $request->input('variants');

        // return $variants;

        if ($variants && is_array($variants)) {
            foreach ($variants['size'] as $key => $size) {
                // Check if the index exists for all variant arrays
                if (isset($variants['size'][$key])) {
                    // Find or create the variant
                    $variant = ProductVariant::updateOrCreate(
                        ['id' => $variants['id'][$key] ?? null], // Use the variant ID to update existing variants, if available
                        [
                            'product_id' => $product->id,
                            'size' => $size,
                            'color' => $variants['color'][$key],
                            'price' => $variants['price'][$key],
                            'quantity' => $variants['quantity'][$key],
                            // Add other variant fields as needed
                        ]
                    );

                    // Associate the variant with the product
                    $product->variants()->save($variant);
                }
            }
        }


        // Convert variant sizes from the request to strings
        $requestVariantSizes = $request->input('variants.size', []);

        // Delete removed variants based on size
        $removedVariantSizes = array_diff($product->variants()->pluck('size')->toArray(), $requestVariantSizes);
        $removedVariantIds = $product->variants()->whereIn('size', $removedVariantSizes)->pluck('id')->toArray();
        ProductVariant::destroy($removedVariantIds);


        $notification = [
            'alert-type' => 'success',
            'message' => 'Product has been updated'
        ];

        return back()->with($notification);
    }




    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        $notification = array(
            'alert-type' => 'success',
            'message' => 'Product deleted successfully'
        );

        return redirect()->back()->with($notification);
    }


    public function exportCSVFile()
    {
        // return (new ExportProducts)->download('users.csv', Maatwebsite\Excel\Excel::CSV);

        return Excel::download(new ExportProducts, 'products.xls');
    }


    public function stock_alert()
    {
        return view('backend.products.stock_alert');
    }

    public function stock_alert_list(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::withoutTrashed()
                ->whereColumn('quantity', '<=', 'stock_alert')
                ->latest()
                ->get();

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('category_id', function ($row) {
                    return $row->category_id->title;
                })
                ->addColumn('imageview', function ($row) {
                    $galleryIds = json_decode($row->galleryimg_id, true);

                    if (is_array($galleryIds) && !empty($galleryIds)) {
                        $images = Media::whereIn('id', $galleryIds)->get();
                        if (!empty($images[0])) {
                            $imageUrl = asset($images[0]->file_directory . '/' . $images[0]->filename);
                        } else {
                            $imageUrl = asset('/demo_img.jpg');
                        }
                    } else {
                        $imageUrl = asset('/demo_img.jpg');
                    }
                    return '<a href="' . $imageUrl . '" data-lightbox="product-gallery" data-title="">
                        <img src="' . $imageUrl . '" alt="Product Image" class="img-thumbnail" width="50" height="50">
                    </a>';
                })
                ->addColumn('details', function ($row) {
                    return '<span>' . $row->detail . '</span>';
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('products.edit', $row->id);
                    $deleteUrl = route('products.destroy', $row->id);

                    $actionBtn = '';

                    // Check if the user has permission to edit
                    if (Auth::user()->can('product-edit')) {
                        $actionBtn .= '<a href="' . $editUrl . '" class="edit btn btn-success btn-xs" data-toggle="tooltip"
                        data-original-title="edit">Edit</a> ';
                    }

                    // Check if the user has permission to delete
                    if (Auth::user()->can('product-delete')) {
                        $actionBtn .= '<form action="' . $deleteUrl . '" method="POST" style="display:inline;">
                                        ' . csrf_field() . '
                                        ' . method_field('DELETE') . '
                                        <button type="submit" class="delete btn btn-danger btn-xs">Delete</button>
                                   </form>';
                    }

                    return $actionBtn;
                })
                ->rawColumns(['imageview', 'details', 'action'])
                ->make(true);
        }
    }
}
