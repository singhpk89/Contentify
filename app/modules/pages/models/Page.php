<?php namespace App\Modules\Pages\Models;

use BaseModel;

class Page extends BaseModel {

    protected $table = 'pages';

    protected $softDelete = true;

    protected $fillable = [
        'title', 
        'text', 
        'published_at', 
        'published',
        'internal',
        'enable_comments',
        'pagecat_id'];

    public static $rules = [
        'title'     => 'required',
    ];

    public static $relationsData = [
        'pagecat' => [self::BELONGS_TO, 'App\Modules\Pages\Models\Pagecat'],
        'creator' => [self::BELONGS_TO, 'User', 'title' => 'username'],
    ];

}