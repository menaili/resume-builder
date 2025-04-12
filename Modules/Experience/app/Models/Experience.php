<?php

namespace Modules\Experience\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Resume\Models\Resume;
// use Modules\Experience\Database\Factories\ExperienceFactory;

class Experience extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'resume_id',
        'company',
        'job_title',
        'start_date',
        'end_date',
        'description',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
    ];

    /**
     * Education belongs to a Resume.
     */
    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
