<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Contact extends Page {
    const TITLE = 'Contact';

    const CMS_NAME = 'Contact';
    const CMS_INFO = 'Halaman Contact';
    const CMS_SITEMAP = 'Contact';

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
