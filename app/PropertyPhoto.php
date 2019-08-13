<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_id', 'name',
    ];

    /**
     * Relationship
     */
    public function property()
    {
        return $this->belongsTo('App\Property');
    }
}
