<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Booking;
use App\Entity\Category;

use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;
use App\Util\CMSCore\ResponseUtil;
use Illuminate\Support\Facades\Input;


class ServiceController extends FrontendController {

    public function index() {

        return view('frontend.service');
    }

    public function getReservation() {

        return view('frontend.reservation');
    }


    public function saveReservation() {
        $input = Input::all();

        $model = new Booking();

        $model->fill((array)$input);

        $model->save();



        return ResponseUtil::Success();
    }
}
