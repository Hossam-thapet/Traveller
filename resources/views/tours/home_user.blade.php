@extends('layouts.app')
@extends('layouts.navbar')
@section('content')


    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard')  }}
                        <b> {{ Auth::user()->name }}</b>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in as' ) }} {{ Auth::user()->role }}
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container pt-5">
    <table class="table table-bordered table-striped w-75 m-auto">
        <tr>


            <th class="text-center" width="20%"> </th>
            <th class="text-center" width="40%"> </th>
            <th class="text-center" width="20%"> </th>
            <th class="text-center" width="20%"> </th>
        </tr>
        @foreach($tours as $tour)
            <tr>

                <td><h5 >Name</h5></td>
                <td><h3 >{{ $tour->name }}</h3></td>
                <td><h3 >Starts</h3></td>
                <td><h5 >{{ $tour->startDate }}</h5></td>
            </tr>
        @endforeach
    </table>
</div>
@endsection
