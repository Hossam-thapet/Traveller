@extends('tours.layout')
@extends('layouts.navbar')
@section('content')

    <div class="container-fluid main-show">
        <div class="image-show">
            <img src="{{asset('images/'.$tour->photo)}}"  alt="..."  class="tour-image">
        </div>
    </div>
    <div class="container tour-information">
    <div class="row tour-information">
        <div class="col-sm-3">
            <strong>Name</strong>
        </div>
        <div class="col-sm-9">
            <span>{{$tour->name}}</span>

        </div>
    </div>


        <div class="row tour-information">
            <div class="col-sm-3">
                <strong>Price</strong>
            </div>
            <div class="col-sm-9">
                <span>{{$tour->price}}</span>
            </div>
        </div>


        <div class="row tour-information">
            <div class="col-sm-3">
                <strong>Duration</strong>
            </div>
            <div class="col-sm-9">
                <span>{{$tour->duration}}</span>
            </div>
        </div>


        <div class="row tour-information">
            <div class="col-sm-3">
                <strong>Start Date</strong>
            </div>
            <div class="col-sm-9">
                <span>{{$tour->startDate}}</span>
            </div>
        </div>


        <div class="row tour-information">
            <div class="col-sm-3">
                <strong>End Date</strong>
            </div>
            <div class="col-sm-9">
                <span>{{$tour->endDate}}</span>
            </div>
        </div>

            <div class="row tour-information">
                <div class="col-sm-3">
                    <strong>Location</strong>
                </div>
                <div class="col-sm-9">
                    <span>{{$tour->location}}</span>
                </div>
            </div>

                <div class="row tour-information">
                    <div class="col-sm-3">
                        <strong>Class</strong>
                    </div>
                    <div class="col-sm-9">
                        <span>{{$tour->class}}</span>
                    </div>
           </div>

                    <div class="row tour-information">
                        <div class="col-sm-3">
                            <strong>Details</strong>
                        </div>
                        <div class="col-sm-9">
                            <span>{{$tour->detail}}</span>
                        </div>
                    </div>

    </div>
    <br>
    <br>
    <div class="container explnation">
        <div class="container mainparagraph">
            <h6>Pressing this Button Will Submit A <b>Ticket</b> And will Send a Massage To your Mail With the Details<br>
                Have Fun...</h6>
        </div>
    </div>
    <br>
    <br>
<div class="container tiketbutton">
    <div class="container gettiket">
        <form class="form prevent-multi-submit" action="{{url('submit_tour',$tour->id)}}" method="get">
            @csrf
            <button type="submit" class="btn btn-dark m-auto w-100 prevent-multi-submit-button">Submit A Ticket</button>
        </form>
    </div>
</div>
    <br>
    <br>

    <br>
    <br>
    <br>
@endsection


