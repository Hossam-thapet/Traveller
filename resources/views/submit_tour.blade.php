@extends('layouts.app')
@extends('layouts.navbar')
@section('content')

<div class="container submit_tour body">
    <div class="container submit_tour mt-5">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="container m-5 submit-text" style="margin-top: 100px">
            <h4>Submit Your Action <br>
            Will recieve a Message on Your mail in minutes...</h4>
            <form action="/submit" method="get" >
                @csrf
                <button type="submit" class="btn btn-outline-primary">Submit Tour</button>
            </form>
        </div>

    </div>
</div>

@endsection
