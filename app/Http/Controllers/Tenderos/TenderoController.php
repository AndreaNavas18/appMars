<?php

namespace App\Http\Controllers\Tenderos;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TenderoController extends BaseController
{
    public function ingreso(Request $request){
        Log::info("Si funciono");
       
    }
    
}
