<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;

class CategoriesController extends Controller
{
    //
    public function index(){
        $cates=Categories::get()->toJson(JSON_PRETTY_PRINT);
        return response($cates,200);
    }

    public function show($id=null){
        $cate=Categories::where('id',$id)->first();

        
        /*    another way
            $cate=Categories::find($id);*/
        
        if ($cate){
            $cate=$cate->toJson(JSON_PRETTY_PRINT);
            return response($cate,200);
        }
        else{
            return response()->json([
                "message" => "Category "+$id+" not found",
              ], 404);
        }


    }
}
