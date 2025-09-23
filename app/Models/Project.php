<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
     protected $fillable = ['name','pdf_path','user_id'];

    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
}
