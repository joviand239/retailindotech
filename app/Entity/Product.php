<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;


class Product extends BaseEntity {
    protected $table = 'product';

    public function categories(){
        return $this->hasMany(Category::class);
    }

    const FORM_DISABLED = ['url'];

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',
        'name' => 'Text',
        'url' => 'Text',
        'bannerImage' => 'Image_1',
        'cardImage' => 'Image_1',
        'summary' => 'TextArea'
    ];

    const INDEX_FIELD = [
        'name',
        'url',
    ];

    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
    ];


    function getBannerImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }

    function getCardImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }
}