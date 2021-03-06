<?php

namespace App\Model;

use UserFrosting\Sprinkle\Core\Database\Models\Model as EloquentModel ;

class Model extends EloquentModel
{
    public function scopeRecent($query)
    {
        return $query->orderBy('id', 'desc');
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order', 'desc');
    }

}
