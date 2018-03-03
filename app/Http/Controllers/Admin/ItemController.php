<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Category;
use App\Entity\Item;
use App\Entity\Product;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use Illuminate\Support\Facades\Input;

class ItemController extends Controller {
    public function index() {
        return view('admin.item.index', ['list'=>Item::all(), 'model'=>Item::class]);
    }
    public function details($id) {
        $categoryList = Category::all();

        $model = Item::with('category')->find($id);

        if (!$model) {
            $model = new Item();
        }

        return view('admin.item.details', [
            'model'=>$model,
            'id' => $id,
            'categoryList' => $categoryList
        ]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Item::class);

        $data = Input::all();

        if (isset($data['productId'])) $model->productId = $data['productId'];
        if (isset($data['categoryId'])) $model->categoryId = $data['categoryId'];


        $model->save();

        return redirect(route('admin.items'));
    }
    public function delete($id) {
        $item = Item::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.items'));
    }
}
