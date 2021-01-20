<?php

namespace App\Http\Controllers;
use App\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function search(Request $request)
    {
        $search=$request->get('search');
        $tours=DB::table('tours')->where('name','like' ,'%'.$search.'%')->paginate(12);
        return view('tours.class',compact('tours'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function class_spc(Request $request)
    {
        $search = $request->get('class_spc');
        $tours = DB::table('tours')
            ->where('class', 'like', '%' . $search . '%')->paginate(5);
        return view('tours.class', compact('tours'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
