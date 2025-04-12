<?php

namespace Modules\Skills\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Resume\Models\Resume;
// use Modules\Skills\Database\Factories\SkillFactory;

class Skill extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'resume_id',
        'skill_name',
        'proficiency',
    ];

    /**
     * A Skill belongs to a Resume.
     */
    public function resume()
    {
        return $this->belongsTo(\Modules\Resume\Models\Resume::class, 'resume_id');
    }

}
