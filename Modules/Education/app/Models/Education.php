<?php

namespace Modules\Education\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Modules\Resume\Models\Resume;
use App\Models\User;
// use Modules\Education\Database\Factories\EducationFactory;

class Education extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'resume_id',
        'institution',
        'degree',
        'field_of_study',
        'start_date',
        'end_date',
        'grade',
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

    /**
     * Education belongs to a User.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
