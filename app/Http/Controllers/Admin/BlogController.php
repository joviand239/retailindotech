<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Base\Role;
use App\Entity\Base\User;
use App\Entity\Blog;
use App\Entity\CustomerDetail;
use App\Entity\Guarantee;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Util\CMSCore\CodingConstant;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class BlogController extends Controller {
    public function index() {
        return view('admin.blog.index', ['list'=>Blog::all(), 'model'=>Blog::class]);
    }
    public function details($id) {
        return view('admin.blog.details', ['model'=>Blog::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Blog::class);

        $data = Input::all();

        $publishDate = date("Y-m-d", strtotime($data['publishDate']));

        $model->publishDate = $publishDate;

        $model->save();

        return redirect(route('admin.blogs'));
    }
    public function delete($id) {
        $item = Blog::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.blogs'));
    }
}
