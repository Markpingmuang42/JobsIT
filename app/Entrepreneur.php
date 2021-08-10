<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrepreneur extends Model
{
    protected $fillable = [
        'CompanyName',
        'Sto_group',
        'numberJObs',
        'CompanyDetail',
        'Textpost',
        'property',
        'welfare',
        'address',
        'contact',
        'logoCompany'
    ];
}
