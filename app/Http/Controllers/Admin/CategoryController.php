<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Blog;
use App\Entity\Category;
use App\Entity\Product;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use Illuminate\Support\Facades\Input;

class CategoryController extends Controller {
    public function details($productId, $categoryId) {
        return view('admin.category.details', [
            'model'=>Category::get($categoryId),
            'id' => $categoryId,
            'productId' => $productId
        ]);
    }
    public function save($productId, $categoryId) {
        $model = CRUDService::SaveWithData($categoryId, Category::class);

        $model->productId = $productId;

        $model->save();

        return redirect(route('admin.product', ['id' => $productId]));
    }
    public function delete($productId, $categoryId) {
        $item = Category::find($categoryId);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.product', ['id' => $productId]));
    }
}
