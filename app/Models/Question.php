<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Reponse;

class Question extends Model
{
    use HasFactory;

    protected $table = 'question';

    public function reponse()
    {
        return $this->hasOne('App\Models\Reponse');
    }
}
