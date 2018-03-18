<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\Customer;


class ItemSerial extends BaseEntity {
    protected $table = 'itemSerial';

    public function guaranteeItem(){
        return $this->belongsTo(GuaranteeItem::class);
    }

    public function item(){
        return $this->belongsTo(Item::class);
    }

    const FORM_TYPE = [
        'serialNumber' => 'Text',
    ];

    const INDEX_FIELD = [
        'serialNumber',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];

    const FORM_SELECT_LIST = [

    ];


}