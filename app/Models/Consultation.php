<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [

        'user_id',
        'message',
        'status',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi chat konsultasi
    public function messages()
    {
        return $this->hasMany(
            ConsultationMessage::class
        );
    }
}