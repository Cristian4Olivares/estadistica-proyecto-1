<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medico;

class EspecialidadGetController extends Controller
{
    public function doctors(Request $request)
    {
        return $request->Medico;
    }
}
