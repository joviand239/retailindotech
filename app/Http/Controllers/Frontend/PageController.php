<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Blog;
use App\Entity\CMS\About;
use App\Entity\CMS\Contact;
use App\Entity\CMS\Home;
use App\Entity\Product;
use Illuminate\Support\Facades\Input;


class PageController extends FrontendController {

    public function getHome() {
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

    public function getAbout() {
        $page = About::getPage();

        return view('frontend.about', [
            'page' => $page->json,
        ]);
    }

    public function getContact() {
        $page = Contact::getPage();

        return view('frontend.contact', [
            'page' => $page->json,
        ]);
    }

    public function getMaintenance() {

        return view('frontend.maintenance');
    }
}
