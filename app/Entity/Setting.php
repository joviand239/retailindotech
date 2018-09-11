<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;
use App\Entity\User\CustomerDetails;
use App\Util\Constant;


class Setting extends BaseEntity {
    use SingleImageTrait;

    protected $table = 'setting';

    protected $fillable = [

    ];

    const FORM_TYPE = [
        'companyName' => 'Text',
        'companyDetail' => 'TextArea',
        'logo' => 'Image_1',
        'address' => 'TextArea',
        'phone' => 'Text',
        'fax' => 'Text',
        'email' => 'Text',
        'website' => 'Text',
        'facebook' => 'Text',
        'instagram' => 'Text',
        'contactEmail' => 'Text',
        'googleMap' => 'TextArea',
    ];

    const FORM_LABEL_HELP = [
        'contactEmail' => 'digunakan untuk email contact form',
    ];

    const INDEX_FIELD = [

    ];
    const FORM_SELECT_LIST = [

    ];

    const FORM_LABEL = [

    ];

    public function getValue($key, $listItem, $language){


        return parent::getValue($key, $listItem, $language);
    }
}
