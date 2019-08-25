<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'property_type_id', 'name', 'description', 'location', 'price',
        'status', 'length', 'width', 'area',
    ];

    /**
     * Relationship
     */
    public function propertyType()
    {
        return $this->belongsTo('App\PropertyType');
    }

    public function photos()
    {
        return $this->hasOne('App\PropertyPhoto');
    }

    public function sponsoredProperty()
    {
        return $this->hasOne('App\SponsoredProperty');
    }
    
}
