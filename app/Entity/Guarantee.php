<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\Customer;


class Guarantee extends BaseEntity {
    protected $table = 'guarantee';

    public function user(){
        return $this->belongsTo(CustomerDetail::class, 'customerId');
    }

    const FORM_TYPE = [
        'buyDate' => 'Date',
        'guaranteeNumber' => 'Text',
        'customerDetailId' => 'Select',
        'phone' => 'Text',
        'email' => 'Text',
        'address' => 'TextArea',
        'city' => 'Text',
    ];

    const INDEX_FIELD = [
        'buyDate',
        'guaranteeNumber',
        'customerDetailId',
    ];

    const FORM_LABEL = [
        'pic' => 'Person In Charge'
    ];

    const FORM_LABEL_HELP = [

    ];

    const FORM_SELECT_LIST = [
        'customerDetailId' => 'GetAllCustomer',
    ];


    function getFeaturedImageAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }
}