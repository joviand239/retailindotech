<?php

namespace App\Entity;

use App\Entity\Base\BaseEntity;
use App\Entity\User\Customer;


class GuaranteeItem extends BaseEntity {
    protected $table = 'guaranteeItem';

    public function guarantee(){
        return $this->belongsTo(Guarantee::class);
    }

    public function item(){
        return $this->hasOne(Item::class, 'id', 'itemId');
    }

    public function itemSerial(){
        return $this->hasMany(ItemSerial::class,'guaranteeItemId');
    }

    const FORM_TYPE = [
        'itemId' => 'Select',
    ];

    const INDEX_FIELD = [
        'item',
        'quantity',
        'listSerial'
    ];

    const FORM_LABEL = [
        'itemId' => 'Item'
    ];

    const FORM_LABEL_HELP = [

    ];

    const FORM_SELECT_LIST = [
        'itemId' => 'GetAllItem',
    ];


    public function getValue($key, $listItem, $language){
        if ($key == 'item') {
            if (empty($this->item)) return '';
            return $this->item->name;
        }
        if ($key == 'quantity') {
            if (empty($this->itemSerial)) return '0';
            return count($this->itemSerial);
        }
        if ($key == 'listSerial') {
            if (empty($this->itemSerial)) return '';

            $list = '';

            foreach ($this->itemSerial as $key => $item){
                $list = $list.$item->serialNumber.( ($key+1 != count($this->itemSerial)) ? ',' : '' );
            }

            return $list;
        }
        return parent::getValue($key, $listItem, $language);
    }
}