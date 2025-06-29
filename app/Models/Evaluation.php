<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Evaluation extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'enrollment_id',
        'score',
        'feedback',
        'evaluated_at',
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}
