<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;


class Item extends BaseEntity {
    protected $table = 'item';

    public function product(){
        return $this->belongsTo(Product::class, 'productId');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categoryId');
    }

    const FORM_DISABLED = ['url'];

    const FORM_TYPE = [
        'name' => 'Text',
        'url' => 'Text',
        'featuredImage' => 'Image_1',
        'gallery' => 'Image_0',
        'surfaceFinishing' => 'Text',
        'typeOfScanner' => 'Text',
        'microprocessor' => 'Text',
        'memory' => 'Text',
        'algorithm' => 'Text',
        'dimension' => 'Text',
    ];

    const INDEX_FIELD = [
        'name',
        'url',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];


    function getFeaturedImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }
}