<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $fillable = [
        'name',
        'image_filepath',
        'location',
        'description',
        'package_type',
        'capacity',
        'days',
        'nights',
        'food',
        'adult_per_person_price',
        'child_per_person_price',
        'family_discount_rate',
        'corporate_discount_rate',
        'offer_type'
    ];
}
