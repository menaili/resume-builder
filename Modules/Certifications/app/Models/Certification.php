<?php

namespace Modules\Certifications\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Certifications\Database\Factories\CertificationFactory;

class Certification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'resume_id',
        'name',
        'issuing_organization',
        'start_date',
        'end_date',
        'description',
    ];

    // protected static function newFactory(): CertificationFactory
    // {
    //     // return CertificationFactory::new();
    // }
}
