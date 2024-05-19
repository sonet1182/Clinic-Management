<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Media;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function product_list()
    {
        $products = Product::latest()->get();

        $processedProducts = $products->map(function ($product) {
            $galleryIds = json_decode($product->galleryimg_id, true);
            $galleryImages = [];

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

            return [
                'id' => $product->id,
                'name' => $product->name,
                'category' => $product->category_id->title,
                'brand' => $product->brandData->name ?? '',
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

        return response()->json([
            'status' => 200,
            'data' => $processedProducts,
            'message' => 'Product List',
        ]);
    }
}
