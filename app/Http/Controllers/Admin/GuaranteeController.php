<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Base\Role;
use App\Entity\Base\User;
use App\Entity\CustomerDetail;
use App\Entity\Guarantee;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Util\CMSCore\CodingConstant;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class GuaranteeController extends Controller {
    public function index() {
        return view('admin.guarantee.index', ['list'=>Guarantee::all(), 'model'=>Guarantee::class]);
    }
    public function details($id) {
        return view('admin.guarantee.details', ['model'=>Guarantee::get($id), 'id' => $id]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Guarantee::class);

        $model->save();

        return redirect(route('admin.guarantees'));
    }
    public function delete($id) {
        $item = Guarantee::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.guarantees'));
    }
}
