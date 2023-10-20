<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    use HasFactory;
    protected $fillable = [
        'p',
        'pmax',
        'phyperc',
        'c',
        'cmax',
        'chemperc',
        'b',
        'bmax',
        'bioperc',
        'e',
        'emax',
        'engperc',
        'total',
        'maxtotal',
        'totalperc',
        'grand',
        'grandmax',
        'grandperc',
        'applicant_id',
    ];
}
