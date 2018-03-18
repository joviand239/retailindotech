<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Base\Role;
use App\Entity\Base\User;
use App\Entity\CustomerDetail;
use App\Entity\Guarantee;
use App\Entity\GuaranteeItem;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Util\CMSCore\CodingConstant;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class GuaranteeController extends Controller {
    public function index() {
        return view('admin.guarantee.index', ['list'=>Guarantee::all(), 'model'=>Guarantee::class]);
    }
    public function details($id) {
        $list = GuaranteeItem::where('guaranteeId', $id)->get();

        return view('admin.guarantee.details', [
            'model'=>Guarantee::get($id),
            'id' => $id,
            'list' => $list,
            'modelList' => GuaranteeItem::class
        ]);
    }
    public function save($id) {
        $model = CRUDService::SaveWithData($id, Guarantee::class);



        if ($id == 0){
            $currDate = date("Y-m-d H:i:s");
            $expiredMachineDate = date('Y-m-d H:i:s', strtotime('+2 years', strtotime($currDate)));
            $expiredServiceDate = date('Y-m-d H:i:s', strtotime('+1 years', strtotime($currDate)));


            $model->expiredMachineDate = $expiredMachineDate;
            $model->expiredServiceDate = $expiredServiceDate;
        }


        $model->save();

        return redirect(route('admin.guarantees'));
    }
    public function delete($id) {
        $item = Guarantee::find($id);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.guarantees'));
    }
}
