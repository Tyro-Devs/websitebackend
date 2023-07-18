<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Wildside\Userstamps\Userstamps;

class BaseModel extends Model
{


    protected $guarded = ['id'];
    protected $hidden = [
        'created_at',
        'updated_at',

    ];

}
