<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiryform extends Model
{
    protected $fillable = [
        "fullname",
        "phone",
        "education",
        "address",
        "course",
        "duration"
    ];
}
