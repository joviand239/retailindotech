<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Category;

use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class NewsController extends FrontendController {

    public function index() {

        return view('frontend.news');
    }

    public function getDetails($url = '') {

        return view('frontend.news-details');
    }
}
