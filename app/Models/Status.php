<?php

namespace App\Models;

use App\Models\StatusTranslation;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function translations()
    {
        return $this->hasMany(StatusTranslation::class);
    }
}
