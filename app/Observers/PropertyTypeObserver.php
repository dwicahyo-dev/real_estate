<?php

namespace App\Observers;

use App\PropertyType;

class PropertyTypeObserver
{
    /**
     * Handle the property type "created" event.
     *
     * @param  \App\PropertyType  $propertyType
     * @return void
     */
    public function created(PropertyType $propertyType)
    {
        $propertyType->name;
    }

    /**
     * Handle the property type "updated" event.
     *
     * @param  \App\PropertyType  $propertyType
     * @return void
     */
    public function updated(PropertyType $propertyType)
    {
        $propertyType->name;
    }

    /**
     * Handle the property type "deleted" event.
     *
     * @param  \App\PropertyType  $propertyType
     * @return void
     */
    public function deleted(PropertyType $propertyType)
    {
        //
    }

    /**
     * Handle the property type "restored" event.
     *
     * @param  \App\PropertyType  $propertyType
     * @return void
     */
    public function restored(PropertyType $propertyType)
    {
        //
    }

    /**
     * Handle the property type "force deleted" event.
     *
     * @param  \App\PropertyType  $propertyType
     * @return void
     */
    public function forceDeleted(PropertyType $propertyType)
    {
        //
    }
}
