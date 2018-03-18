<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Home extends Page {
    const TITLE = 'Home';

    const CMS_NAME = 'Home';
    const CMS_INFO = 'Halaman utama';
    const CMS_SITEMAP = 'Home';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',
        'bannerSlider' => 'ListSortable',
    ];

    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
    ];

    const FORM_LIST = [
        'bannerSlider' => [
            'image' => 'Image_1',
            'mobileImage' => 'Image_1',
            'title'  => 'Text',
            'subtitle'  => 'Text',
            'buttonText' => 'Text',
            'buttonLink' => 'Text',
        ]
    ];

    const FORM_SELECT_LIST = [

    ];


}
