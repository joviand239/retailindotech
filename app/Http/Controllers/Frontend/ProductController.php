<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Item;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class ProductController extends FrontendController {

    public function getProductCategory($permalink) {
        $id = parsePermalinkToId($permalink);

        $product = Product::get($id);

        $categories = $product->categories;

        $model = [];

        foreach ($categories as $item) {
            $tempListModel = Item::where('productId', $product->id)
                ->where('categoryId', $item->id)->get();

            $model[$item->id] = $tempListModel;
        }

        return view('frontend.product-category', [
            'product' => $product,
            'categories' => $categories,
            'model' => $model
        ]);
    }
}
