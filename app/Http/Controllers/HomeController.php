<?php

namespace App\Http\Controllers;
use auth ;
use App\Tour;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Tour $tour)
    {
        if(auth::user()->role === "admin")
        {
          $tours = Tour::latest()->paginate(12);
           return view('home', compact('tours'));

        }
        else if(auth::user()->role === "user")
        {
            $tours = DB::table('users')
                ->join('teckets', 'users.id', '=', 'user_id')
                ->join('tours', 'tours.id', '=', 'tour_id')

                ->where('user_id', '=', auth::user()->id)
                ->get();
            return view('tours.home_user',compact('tours'));
        }
    }
}
