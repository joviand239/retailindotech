<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\Customer;


class Booking extends BaseEntity {
    protected $table = 'booking';

    public function guarantee(){
        return $this->hasOne(Guarantee::class, 'guaranteeNumber');
    }

    const FORM_TYPE = [
        'name' => 'Text',
        'company' => 'Text',
        'email' => 'Text',
        'phone' => 'Text',
        'address' => 'TextArea',
        'city' => 'Text',
        'date' => 'Date',
        'time' => 'Time',
        'guaranteeNumber' => 'Text',
        'descripiton' => 'TextArea',
    ];

    const INDEX_FIELD = [
        'name',
        'company',
        'date',
        'time',
        'status',
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
}