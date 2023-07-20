<?php

namespace App\Models;


class Portfolio extends BaseModel
{
    public function type()
    {
        return $this->belongsTo(Type::class,'type_id');
    }
}
