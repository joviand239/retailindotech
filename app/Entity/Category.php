<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;


class Category extends BaseEntity {
    protected $table = 'category';

    public function product(){
        return $this->belongsTo(Product::class);
    }

    const FORM_TYPE = [
        'name' => 'Text',
    ];

    const INDEX_FIELD = [
        'name',
    ];
}