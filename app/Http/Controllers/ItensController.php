<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItensController extends Controller
{
    public function index()
    {
        $itens = Item::all();
        
        
        return response()->json(Item::all(),200);
    }

    
    public function store(Request $request)
    {
       
       return response()->json(Item::create($request->all()),201);
    }

    

    public function update(Request $request ,$id)
    {
       $data=[
        'name' =>$request->name
       ];
       Item::where('id',$id)->update($data);
       return response('',204);
      
     
    }
    public function destroy($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return response('',204);

    }

}
