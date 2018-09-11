<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Home extends Page {
    const TITLE = 'Home';

    const CMS_NAME = 'Home';
    const CMS_INFO = 'Halaman utama';
    const CMS_SITEMAP = 'Home';

    const USE_META_SET = true;

    const FORM_TYPE = [
        'bannerSlider' => 'ListSortable',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

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
