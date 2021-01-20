@extends('layouts.app')

@section('content')
<h1>{{ $details['title'] }}</h1>
<h1>Mr.{{Auth::user()->name}}</h1>


<div class="container tour-information">

    <h1>You Did Confirmed Your Request For Tour</h1>

</div>






<p>Thank you</p>
@endsection
