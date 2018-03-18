<?php

namespace App\Http\Controllers\Frontend;

use App\Entity\Blog;
use App\Entity\Category;

use App\Entity\CMS\WhyGerayPrint;
use App\Entity\Product;

use App\Service\Image\ImageService;

use App\Entity\CMS\Home;


class NewsController extends FrontendController {

    public function index() {
        $list = Blog::orderBy('publishDate', 'desc')->get();

        return view('frontend.news', [
            'list' => $list
        ]);
    }

    public function getDetails($id) {
        $detail = Blog::get($id);

        // get previous user id
        $previous = Blog::where('id', '<', $detail->id)->first();

        // get next user id
        $next = Blog::where('id', '>', $detail->id)->first();

        return view('frontend.news-details', [
            'detail' => $detail,
            'next' => $next,
            'previous' => $previous
        ]);
    }
}
