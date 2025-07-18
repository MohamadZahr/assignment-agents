<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function getAllAgents()
    {
        return json_encode(Agent::all());
    }
}
