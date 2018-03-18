<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\Customer;


class Blog extends BaseEntity {
    protected $table = 'blog';

    const FORM_TYPE = [
        'publishDate' => 'date',
        'title' => 'Text',
        'summary' => 'TextArea',
        'featuredImage' => 'Image_1',
        'gallery' => 'Image_0',
        'content' => 'Wysiwyg',
        'source' => 'Text',
    ];

    const INDEX_FIELD = [
        'publishDate',
        'title',
        'summary',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];

    const FORM_SELECT_LIST = [

    ];


    function getFeaturedImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    function getGalleryAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }
}