@extends('layouts.app')
@extends('layouts.navbar')
@section('content')


    <div class="container pt-5">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
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
    <div class="panel-body pt-5">
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tr>
                    <th width="30%">Image</th>
                    <th width="50%">Name</th>
                    <th width="20%">Number</th>
                </tr>
                @foreach($tours as $tour)
                    <tr>
                        <td>
                            <img src="{{asset('images/'.$tour->photo)}}" class="card-img-top" alt="..." Style="width:200px;">
                        </td>
                        <td><h3 class="text-center">{{ $tour->name }}</h3></td>
                        <td><h3 class="text-center">{{ $tour->counter }}</h3></td>
                    </tr>
                @endforeach
            </table>
            {!! $tours->links() !!}
        </div>
    </div>
    <div>

@endsection
