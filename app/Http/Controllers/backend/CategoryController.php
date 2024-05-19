<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('subCategories')->whereNull('parent_id')->get();
        $category_list = Category::pluck('title', 'id')->all();

        return view('categories.index', compact('category_list', 'categories'));
    }

    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        return view('categories.create', compact('categories'));
    }

    public function edit($id)
    {
        $post = Category::findOrFail($id);

        if ($post)
            return view('categories.edit', compact('post'));
        else
            return 'Data Not Found!';
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Get the selected category and its ancestors
        $category = Category::findOrFail($request->parent_id);
        $categoryHierarchy = $this->getCategoryHierarchy($category);

        // Build the slug based on category hierarchy
        $slug = '';
        foreach ($categoryHierarchy as $parent) {
            $slug .= $parent->slug . '/';
        }
        $slug .= $this->cleanURL($request->title);

        if ($request->hasFile('image')) {
            $image = $this->uploadImage($request, 'image', 'images/categories/', '200', '200');
        }

        $category = Category::create([
            'title' => $request->title,
            'slug'   => $slug,
            'parent_id' => $request->parent_id,
            'image' => $image ?? null,
            'status' => $request->status ? 1 : 0,
        ]);

        if ($request->ajax()) {
            $categories = Category::with('subCategories')->whereNull('parent_id')->get();
            if ($categories) {
                return view('categories.listbox', compact('categories'));
            } else {
                return 'Data Not Found!';
            }
        } else {
            return redirect()->back()->with('success', 'Category added successfully.');
        }
    }

    function cleanURL($string, $delimiter = '-')
    {
        $string = preg_replace("/[~`{}.'\"\!\@\#\$\%\^\&\*\(\)\_\=\+\/\?\>\<\,\[\]\:\;\|\\\]/", "", $string);
        $string = preg_replace("/[\/_|+ -]+/", $delimiter, $string);
        return $string;
    }

    function getCategoryHierarchy($category)
    {
        $hierarchy = [];
        while ($category) {
            $hierarchy[] = $category;
            $category = $category->parent;
        }
        return array_reverse($hierarchy);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'parent_id' => 'nullable|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = Category::findOrFail($id);

        if ($request->hasFile('image')) {
            $validatedData['image'] = $this->uploadImage($request, 'image', 'images/categories/', '200', '200', $category->image);
        }

        $validatedData['status'] = $request->status ? 1 : 0;

        // Get the selected category and its ancestors
        $parentCategory = Category::find($category->parent_id);
        $categoryHierarchy = $this->getCategoryHierarchy($parentCategory);

        // Build the slug based on category hierarchy
        $slug = '';
        foreach ($categoryHierarchy as $parent) {
            $slug .= $parent->slug . '/';
        }
        $slug .= $this->cleanURL($request->title);

        $validatedData['slug'] = $slug;


        $category->update($validatedData);

        $notification = [
            'alert-type' => 'success',
            'message' => 'Category has been updated',
        ];

        if ($request->ajax()) {
            $categories = Category::with('subCategories')->whereNull('parent_id')->get();
            if ($categories) {
                return view('categories.listbox', compact('categories'));
            } else {
                return 'Data Not Found!';
            }
        } else {
            return back()->with($notification);
        }
    }


    public function destroy($id)
    {
        $data = Category::findOrFail($id);

        if (!$data) {
            return response()->json(['success' => false, 'message' => 'Record not found'], 404);
        }

        $data->delete();

        $categories = Category::with('subCategories')->whereNull('parent_id')->get();
        if ($categories)
            return view('categories.listbox', compact('categories'));
        else
            return 'Data Not Found!';
    }
}
