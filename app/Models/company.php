<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    public $fillable=[ 'category',
            'companyName',
            'companyImage',
            'email',
            'contact',
            'price',
            'location',
            'duration',
            'availability',
            'description'
        ];
}
