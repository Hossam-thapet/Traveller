
@extends('tours.layout')
@extends('layouts.navbar')
@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<div class="container-fluid Browes">
    <div class="pull-right">
        <a  href="{{ route('tours.create') }}"> <i class="fas fa-plus-circle"></i></a>
    </div>
    <div class="row browse-row">
        @foreach ($tours as $tour)
        <div class="col-sm-4 browse-content">
                <div class="card" key="{{ ++$i }}">
                        <img src="{{asset('images/'.$tour->photo)}}" class="card-img-top" alt="...">
                        <div class="row cardbody">

                                <h5 class="card-title"><a href="{{ route('tours.show',$tour->id) }}">{{$tour->name}}</a></h5>


                        </div>

                        <form action="{{ route('tours.destroy',$tour->id) }}" method="POST" class="method_form">

                            <a class="btn btn-info" href="{{ route('tours.show',$tour->id) }}"><i class="far fa-eye"></i></a>

                            <a class="btn btn-primary" href="{{ route('tours.edit',$tour->id) }}"><i class="fas fa-tools"></i></a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger"><i class="fas fa-minus-circle"></i></button>
                        </form>
                    </div>

        </div>
        @endforeach
    </div>
{{--    <div class="pull-right">--}}
{{--              <a class="btn btn-success" href="{{ route('tours.create') }}"> Create New Tour</a>--}}
{{--         </div>--}}
</div>


    {!! $tours->links() !!}

@endsection

