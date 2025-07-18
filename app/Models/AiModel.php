<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AiModel extends Model
{

    
    /** @use HasFactory<\Database\Factories\AiModelFactory> */
    use HasFactory;

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }   
}
