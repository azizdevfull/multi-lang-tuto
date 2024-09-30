<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['status_id', 'language_id', 'name'];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
