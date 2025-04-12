<?php

namespace Modules\Resume\Models;

use App\Models\User;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Modules\Resume\Database\Factories\ResumeFactory;

class Resume extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = ['user_id', 'title', 'summary'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
