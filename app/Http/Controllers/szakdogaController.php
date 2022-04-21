<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\szakdogaModel;

class szakdogaController extends Controller
{
    public function getSzakdogak(){
        $result = szakdogaModel::all();
        return response()->json($result);
    }
    public function postSzakdogak(Request $request){
        $insert = szakdogaModel::create($request->all());
        return response()->json($insert);
    }
    public function updateSzakdogak($id){
        $update = szakdogaModel::find($id)->update($request->all());
        return response()->json($update);
    }
    public function deleteSzakdogak($id){
        $result = szakdogaModel::all();
        return response()->json($result);
    }
}
