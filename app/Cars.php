<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $table = 'cars';
    protected $primaryKey = 'ads_id';
    public $timestamps = false;

    protected $fillable = [
        'ads_id',
        'title',
        'price',
        'main_photo',
        'photos',
        'location',
        'make',
        'model',
        'body_type',
        'year',
        'mileage',
        'engine_type',
        'engine_size',
        'transmission',
        'steering_wheel',
        'cleared_customs',
        'drive_type',
        'color',
        'body_desc',
        'lang',
        'created_at',
        'updated_at',
        'phone',
        'phone_content',
    ];

}
