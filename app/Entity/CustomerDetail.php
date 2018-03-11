<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\Customer;


class CustomerDetail extends BaseEntity {
    protected $table = 'customerDetail';

    public function user(){
        return $this->belongsTo(Customer::class, 'userId');
    }

    const FORM_DISABLED = ['url'];

    const FORM_TYPE = [
        'type' => 'Select',
        'pic' => 'Text',
        'company' => 'Text',
        'phone' => 'Text',
        'email' => 'Text',
        'address' => 'TextArea',
        'city' => 'Text',
        'status' => 'Select',
    ];

    const INDEX_FIELD = [
        'type',
        'pic',
        'company',
    ];

    const FORM_LABEL = [
        'pic' => 'Person In Charge'
    ];

    const FORM_LABEL_HELP = [

    ];

    const FORM_SELECT_LIST = [
        'type' => 'GetCustomerType',
        'status' => 'GetStatusType',
        'city' => 'Select',
    ];


    function getFeaturedImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }
}