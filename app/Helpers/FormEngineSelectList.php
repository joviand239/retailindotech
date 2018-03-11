<?php


use App\Entity\CustomerDetail;
use App\Util\Constant;

function GetCustomerType(){
	$map = [
	    'REGULAR' => 'Regular',
        'SELLER' => 'Seller',
    ];

	return $map;
}

function GetStatusType(){
    $map = [
        'ACTIVE' => 'Active',
        'INACTIVE' => 'Inactive',
    ];

    return $map;
}


function GetAllCustomer(){
    $list = CustomerDetail::all();

    $map = [];

    $map[0] = '- Select Customer -';

    foreach ($list as $item) {
        $map[$item->id] = $item->company.' ('.$item->pic.')';
    }

    return $map;
}