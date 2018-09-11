<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Service extends Page {
    const TITLE = 'Service';

    const CMS_NAME = 'Service';
    const CMS_INFO = 'Halaman Service';
    const CMS_SITEMAP = 'Service';

    const USE_META_SET = true;

    const FORM_TYPE = [
        'bannerImage' => 'Image_1',
        'bannerText' => 'Text',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];


}
