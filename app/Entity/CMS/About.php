<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class About extends Page {
    const TITLE = 'About';

    const CMS_NAME = 'About';
    const CMS_INFO = 'Halaman About';
    const CMS_SITEMAP = 'About';

    const USE_META_SET = true;

    const FORM_TYPE = [
        'bannerImage' => 'Image_1',
        'bannerText' => 'Text',
        'summary' => 'TextArea',
        'description' => 'Wysiwyg',
        'vision' => 'Wysiwyg',
        'mission' => 'Wysiwyg',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];


}
