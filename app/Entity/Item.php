<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;


class Item extends BaseEntity {
    use SingleImageTrait;

    protected $table = 'item';

    protected $appends = [
        'permalink',
    ];

    protected $fillable = [
        'name',
        'featuredImage',
        'gallery',
        'surfaceFinishing',
        'typeOfScanner',
        'microprocessor',
        'memory',
        'algorithm',
        'dimension',
        'linkDetail'
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'productId');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'categoryId');
    }

    const FORM_DISABLED = ['url'];

    const USE_META_SET = true;

    const FORM_TYPE = [
        'name' => 'Text',
        'featuredImage' => 'Image_1',
        'gallery' => 'Image_0',
        'surfaceFinishing' => 'Text',
        'typeOfScanner' => 'Text',
        'microprocessor' => 'Text',
        'memory' => 'Text',
        'algorithm' => 'Text',
        'dimension' => 'Text',
        'linkDetail' => 'Text',
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

    const FORM_REQUIRED = [
        'name',
    ];

    const INDEX_FIELD = [
        'name',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];

    public function getPermalinkAttribute() {
        return getPermalink($this->name, $this->id);
    }

}