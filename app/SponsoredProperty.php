<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SponsoredProperty extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'property_photo_id',
    ];
}
