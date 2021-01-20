<?php

namespace App\Http\Controllers;

use App\Traits\TourplusTraits;
use Illuminate\Http\Request;
use App\Tour;
use App\tecket;
use auth ;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Image;


class TestController extends Controller
{

    public function addTour(Request $request, $id)
    {
        $tourCheck = DB::table('teckets')
            ->where('user_id', Auth::user()->id)
            ->where('tour_id', $id)
            ->exists();

        if (! $tourCheck) {
            tecket::create([
                'user_id' => Auth::user()->id,
                'tour_id' => $id,
            ]);

            DB::table('tours')->where('id', $id)->increment('counter');

            return view('submit_tour');
        }
        if(auth::user()->role ==='user')
        {
            $tours = DB::table('users')
                ->join('teckets', 'users.id', '=', 'user_id')
                ->join('tours', 'tours.id', '=', 'tour_id')

                ->where('user_id', '=', auth::user()->id)
                ->get();
            return view('tours.home_user',compact('tours'))
                ->with('error', 'you already have a tecket for this tour.');
        }
        else if(auth::user()->role ==='admin') {
            $tours = Tour::latest()->paginate(12);

            return view('home', compact('tours'))
                ->with('success', 'you already have a tecket for this tour.');
        }
        }
}
