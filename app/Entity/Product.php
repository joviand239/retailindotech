<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;


class Product extends BaseEntity {
    use SingleImageTrait;

    protected $table = 'product';

    protected $appends = [
        'permalink',
    ];

    protected $fillable = [
        'name',
        'bannerImage',
        'cardImage',
        'summary',
    ];

    public function categories(){
        return $this->hasMany(Category::class);
    }

    const FORM_DISABLED = ['url'];

    const USE_META_SET = true;

    const FORM_TYPE = [
        'name' => 'Text',
        'bannerImage' => 'Image_1',
        'cardImage' => 'Image_1',
        'summary' => 'TextArea'
    ];

    const INDEX_FIELD = [
        'name',
        'summary',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];

    public function getPermalinkAttribute() {
        return getPermalink($this->name, $this->id);
    }
}