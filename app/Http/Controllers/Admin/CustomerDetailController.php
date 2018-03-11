<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Base\Role;
use App\Entity\Base\User;
use App\Entity\CustomerDetail;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Util\CMSCore\CodingConstant;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class CustomerDetailController extends Controller {
    public function index() {
        return view('admin.customerdetail.index', ['list'=>CustomerDetail::all(), 'model'=>CustomerDetail::class]);
    }
    public function details($id) {
        return view('admin.customerdetail.details', ['model'=>CustomerDetail::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, CustomerDetail::class);

        $model->save();

        return redirect(route('admin.customerdetails'));
    }
    public function delete($id) {
        $item = CustomerDetail::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.customerdetails'));
    }
}
