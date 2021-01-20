<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use auth ;
use Image;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::latest()->paginate(12);
        if(Auth::user()->role ==="admin")
        {
            return view('tours.index', compact('tours'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
        elseif(Auth::user()->role ==="user"){
            return view('tours.index-user', compact('tours'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        }
    }
    public function index_home()
    {
        $tours = Tour::latest()->paginate(6);
            return view('welcome', compact('tours'));
    }
public function create()
{
    if(Auth::user()->role ==="admin") {
        return view('tours.create');
    }
    else{return view('tours.home_user');}
}
    public function store(Request $request)
    {
        if(Auth::user()->role ==="admin") {
            $request->validate([
                'name' => 'required',
                'detail' => 'required',
                'price' => 'required',
                'duration' => 'required',
                'class' => 'required',
                'photo' => 'required|image|max:2048',
                'startDate' => 'required',
                'endDate' => 'required',
                'location' => 'required',
            ]);

            $image_file = $request->photo;
            $image = rand() . '.' . $image_file->getClientOriginalExtension();
            $image_file->move(public_path('images'), $image);
            $form_data = array(

                'name' => $request->name,
                'detail' => $request->detail,
                'price' => $request->price,
                'duration' => $request->duration,
                'class' => $request->class,
                'photo' => $image,
                'startDate' => $request->startDate,
                'endDate' => $request->endDate,
                'location' => $request->location,
            );

            Tour::create($form_data);

            return redirect()->route('tours.index')
                ->with('success', 'Tour created successfully.');
        }
        else{return redirect()->route('home')
            ->with('fail', 'you Do not have premissoin .');}
}


public function show(Tour $tour)
{
return view('tours.show', compact('tour'));
}
public function edit(Tour $tour)
{
    if(Auth::user()->role ==="admin") {
        return view('tours.edit', compact('tour'));
    }
    else{ return view('tours.home_user'); }
}


public function update(Request $request, Tour $tour)
{
    if(Auth::user()->role ==="admin") {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
            'price' => 'required',
            'duration' => 'required',
            'class' => 'required',
            'photo' => 'required|image|max:2048',
            'startDate' => 'required',
            'endDate' => 'required',
            'location' => 'required',
        ]);

        $image_file = $request->photo;
        $image = rand() . '.' . $image_file->getClientOriginalExtension();
        $image_file->move(public_path('images'), $image);
        $form_data = array(

            'name' => $request->name,
            'detail' => $request->detail,
            'price' => $request->price,
            'duration' => $request->duration,
            'class' => $request->class,
            'photo' => $image,
            'startDate' => $request->startDate,
            'endDate' => $request->endDate,
            'location' => $request->location,
        );

        $tour->update($form_data);

        return redirect()->route('tours.index')
            ->with('success', 'Tour updated successfully');
    }
    else{return view ('tours.home_user');}
}


public function destroy(Tour $tour)
{
$tour->delete();
    if(Auth::user()->role ==="admin") {
        return redirect()->route('tours.index')
            ->with('success', 'Tour deleted successfully');
    }
    else{return redirect()->route('tours.home_user');}
}


}
