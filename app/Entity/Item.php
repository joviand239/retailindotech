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
        /*'storageFingerprint' => 'Text',
        'storageCard' => 'Text',
        'storageTransaction' => 'Text',
        'verificationMethods' => 'Text',
        'verificationRecommendedUser' => 'Text',
        'verificationFingerprintPlacement' => 'Text',
        'verificationTime' => 'Text',
        'verificationFar' => 'Text',
        'verificationFrr' => 'Text',
        'technologyRfid' => 'Text',
        'technologyMifare' => 'Text',
        'technologyHid' => 'Text',
        'communicationMethods' => 'Text',
        'communicationBaudRates' => 'Text',
        'communicationWiegand' => 'Text',
        'operatingTemperature' => 'Text',
        'operatingHumidity' => 'Text',
        'operatingPowerInput' => 'Text',
        'attendanceSiren' => 'Text',
        'attendanceWorkCodes' => 'Text',
        'multimediaVoice' => 'Text',
        'multimediaDisplay' => 'Text',
        'multimediaShortMessaging' => 'Text',
        'multimediaMusicPlayback' => 'Text',
        'multimediaMoviePlayback' => 'Text',
        'multimediaInternalBackupBattery' => 'Text',
        'controlEmLock' => 'Text',
        'controlAlarmOutput' => 'Text',
        'controlAntipassback' => 'Text',
        'language' => 'TextArea',
        'software' => 'Text',*/
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