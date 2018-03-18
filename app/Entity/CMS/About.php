<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class About extends Page {
    const TITLE = 'About';

    const CMS_NAME = 'About';
    const CMS_INFO = 'Halaman About';
    const CMS_SITEMAP = 'About';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',
        'bannerImage' => 'Image_1',
        'bannerText' => 'Text',
        'summary' => 'TextArea',
        'footerSummary' => 'TextArea',
        'description' => 'Wysiwyg',
        'vision' => 'Wysiwyg',
        'mission' => 'Wysiwyg',
        'phone' => 'Text',
        'fax' => 'Text',
        'email' => 'Text',
        'website' => 'Text',
        'address' => 'TextArea'
    ];

    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
    ];


}
