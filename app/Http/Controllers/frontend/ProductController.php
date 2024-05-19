<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showBySlug($slug)
    {
        $category = Category::where('slug', $slug)->first();

        $page_category = $category;

        if ($category) {
            $categories = [$category];

            while ($category->parent_id !== null) {
                $category = Category::findOrFail($category->parent_id);
                if ($category) {
                    $categories[] = $category;
                } else {
                    break;
                }
            }

            $categories = array_reverse($categories);
            $product_list = Product::whereJsonContains('category_hierarchy', end($categories)->id)->get();
             $products = $this->product_list($product_list);

            return view('frontend.pages.category_page', compact('page_category', 'category', 'categories', 'products'));
        }

        return null;
    }

    public function product_list($products)
    {
        $processedProducts = $products->map(function ($product) {
            $galleryImages = [];

            $galleryIds = json_decode($product->galleryimg_id, true);
            if (is_array($galleryIds) && !empty($galleryIds)) {
                $images = Media::whereIn('id', $galleryIds)->get();

                foreach ($images as $image) {
                    $imageUrl = config('app.url') . $image->file_directory . $image->filename;
                    $galleryImages[] = [
                        'url' => $imageUrl,
                        'alt' => $product->name,
                    ];
                }
            }

            $categoryTitle = $product->category_id ? $product->category_id->title : '';
            $brandName = $product->brandData ? $product->brandData->name : '';

            return [
                'id' => $product->id,
                'name' => $product->name,
                'category' => $categoryTitle,
                'brand' => $brandName,
                'detail' => $product->detail,
                'offer_price' => $product->offer_price,
                'regular_price' => $product->regular_price,
                'image' => $galleryImages,
                'starRating' => 4,
                'isOffer' => true,
                'discount' => 0,
                'slug' => [
                    'current' => $product->slug,
                    '_type' => 'slug',
                ],
                'price' => $product->offer_price,
            ];
        });

        return $processedProducts;
    }
}
