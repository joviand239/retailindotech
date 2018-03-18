<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Blog;
use App\Entity\Category;

use App\Entity\CMS\About;
use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class HomeController extends FrontendController {

    public function index() {
        $page = Home::getPage();
        $about = About::getPage();

        $product = Product::all();

        $blog = Blog::orderBy('publishDate', 'desc')->limit(3)->get();

        return view('frontend.home', [
            'page' => $page->json,
            'about' => $about->json,
            'product' => $product,
            'blog' => $blog
        ]);
    }

    public function getMaintenance() {

        return view('frontend.maintenance');
    }
}
