<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;


class Attribute extends BaseEntity {
    protected $table = 'attribute';

    const FORM_TYPE = [
        'name' => 'Text',
    ];

    const INDEX_FIELD = [
        'name',
    ];
}