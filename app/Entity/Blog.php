<?php

namespace App\Entity;

use App\CMSTrait\SingleImageTrait;
use App\Entity\Base\BaseEntity;
use App\Entity\User\Customer;


class Blog extends BaseEntity {
    use SingleImageTrait;

    protected $table = 'blog';

    protected $appends = [
        'permalink',
    ];

    protected $fillable = [
        'publishDate',
        'title',
        'summary',
        'featuredImage',
        'gallery',
        'content',
        'source',
    ];

    const USE_META_SET = true;

    const FORM_TYPE = [
        'publishDate' => 'date',
        'title' => 'Text',
        'summary' => 'TextArea',
        'featuredImage' => 'Image_1',
        'gallery' => 'Image_0',
        'content' => 'Wysiwyg',
        'source' => 'Text',
    ];

    const INDEX_FIELD = [
        'publishDate',
        'title',
        'summary',
    ];

    const FORM_LABEL = [

    ];

    const FORM_LABEL_HELP = [

    ];

    const FORM_SELECT_LIST = [

    ];

    public function getPermalinkAttribute() {
        return getPermalink($this->title, $this->id);
    }

    function getGalleryAttribute($value) {
        if (empty($value)) return [];

        return json_decode($value);
    }
}