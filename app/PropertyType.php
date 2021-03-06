<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function properties()
    {
        return $this->hasMany('App\Property');
    }

}
