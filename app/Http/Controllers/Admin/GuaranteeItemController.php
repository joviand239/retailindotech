<?php

namespace App\Http\Controllers\Admin;

use App\Entity\Base\Role;
use App\Entity\Base\User;
use App\Entity\CustomerDetail;
use App\Entity\Guarantee;
use App\Entity\GuaranteeItem;
use App\Entity\ItemSerial;
use App\Http\Controllers\CMSCore\Controller;
use App\Service\CMSCore\CRUDService;
use App\Util\CMSCore\CodingConstant;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

class GuaranteeItemController extends Controller {
    public function details($guaranteeId, $guaranteeItemId) {
        return view('admin.guaranteeitem.details', [
            'model'=>GuaranteeItem::get($guaranteeItemId),
            'id' => $guaranteeItemId,
            'guaranteeId' => $guaranteeId
        ]);
    }
    public function save($guaranteeId, $guaranteeItemId) {
        $model = CRUDService::SaveWithData($guaranteeItemId, GuaranteeItem::class);

        $model->guaranteeId = $guaranteeId;

        $input = Input::all();
        $serialNumberArray = (explode(',',$input['listSerialNumber']));

        if ($guaranteeItemId == 0) {

            foreach ($serialNumberArray as $item) {
                $serialModel = new ItemSerial();

                $serialModel->itemId = $input['itemId'];
                $serialModel->serialNumber = $item;

                $model->itemSerial()->save($serialModel);
            }
        }else {
            foreach ($model->itemSerial as $item) {
                if (in_array($item->serialNumber, $serialNumberArray)) {
                    $item->itemId = $input['itemId'];
                    $item->save();
                }elseif (!in_array($item->serialNumber, $serialNumberArray)){
                    $item->delete();
                }
            }

            foreach ($serialNumberArray as $item) {
                $serialModel = ItemSerial::where('guaranteeItemId', $guaranteeItemId)
                    ->where('serialNumber', $item)->get()->first();

                if (empty($serialModel)) {
                    $serialModel = new ItemSerial();

                    $serialModel->itemId = $input['itemId'];
                    $serialModel->serialNumber = $item;

                    $model->itemSerial()->save($serialModel);
                }


            }
        }


        $model->save();

        return redirect(route('admin.guarantee', ['id' => $guaranteeId]));
    }
    public function delete($guaranteeId, $guaranteeItemId) {
        $item = GuaranteeItem::find($guaranteeItemId);
        if (!empty($item)) $item->delete();
        return redirect(route('admin.guarantee', ['id' => $guaranteeId]));
    }
}
