<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = ['name'];

    /** @use HasFactory<\Database\Factories\AgentFactory> */
    use HasFactory;

    public function aiModels()
    {
        return $this->hasMany(AiModel::class);
    }
}
