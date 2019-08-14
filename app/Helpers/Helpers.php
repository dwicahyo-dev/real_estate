<?php

namespace App\Helpers;

class Helpers
{
    public static function setSelectedSegmentOne($uriSegment)
    {
        return request()->segment(1) == $uriSegment ? 'active' : '';
    }

    public static function setSelectedSegmentTwo($uriSegment)
    {
        return request()->segment(2) == $uriSegment ? 'active' : '';
    }

    
}
