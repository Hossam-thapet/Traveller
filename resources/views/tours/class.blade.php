@extends('tours.layout')
@extends('layouts.navbar')
@section('content')

    <div class="container class">
        <form method="get" action="/search">
            @csrf
    <label for="inputclass" class="form-label">Search By Name</label>
    <input type="search" id="inputclass" class="form-control w-25"  name="search">

        </form>
    </div>
    <div class="container-fluid classout">
        <div class="row browse-row">
            @foreach ($tours as $tour)

                <div class="col-sm-4 browse-conent">

                    <div class="card" key="{{ ++$i }}">
                        <img src="{{asset('images/'.$tour->photo)}}" class="card-img-top" alt="...">
                        <div class="container-fluid detailforuser">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Price:</h6>
                                </div>
                                <div class="col-md-6">
                                    <span>{{$tour->price}}<i class="fas fa-dollar-sign"></i></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Starts:</h6>
                                </div>
                                <div class="col-md-6">
                                    <span>{{$tour->startDate}}</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Ends:</h6>
                                </div>
                                <div class="col-md-6">
                                    <span>{{$tour->endDate}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">

                            <div class="row cardbody">

                                    <h5 class="card-title"><a href="{{ route('tours.show',$tour->id) }}">{{$tour->name}}</a></h5>

                            </div>
                        </div>
                    </div>

                </div>

            @endforeach
        </div>
    </div>
@endsection
