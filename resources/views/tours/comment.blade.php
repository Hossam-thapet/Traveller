@extends('tours.layout')
@extends('layouts.navbar')
@section('content')
    <div class="container-fluid contactbody">

            <div class="the-top" >
                 <h1 > Happy To Receive Your Suggestions ....</h1>

                <span>You must be logged In to put your suggestions</span>
                <br>
                <i class="far fa-envelope"></i>
            </div>
    </div>


            <form method="POST"  action="{{route('comment.store')}}" class="formofcontact">
                <div class="row comment-form">
                    <div class="col-sm-2"></div>
                <div class="col-sm-6 contact-form">
                @csrf
                    <input type="textarea" name="useremail" class="contactinput" value="{{Auth::user()->email}}" readonly>
                    <textarea class="form-control " style="height:150px" name="comment" placeholder="Put your comment here"></textarea>
                </div>
                <div class="col-sm-4 contact-form">
                <input type="submit" class="btn btn-primary mt-5 comment" >
                </div>
                </div>
            </form>

    </div>
            <div class="container comment">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="container commentoutput">
                    <div class="container-fluid outcontainer">
                    @foreach($comments as $comment)

                        <div class="row commentsheader">
                            <div class="row emaianddate">
                            <div class="col-sm-6 commentdetail"><strong>{{$comment->useremail}} </strong></div>
                            <div class="col-sm-5 commentdetail"><span>{{$comment->created_at}}</span></div>
                                <div class="col-sm-1 commentdestroy">
                                    <form action="{{ route('comment.destroy',$comment->id) }}" method="POST" class="method_form">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">x</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row comment-text">
                            <div class="col-sm-6 commentdetail"><span>{{$comment->comment}}</span></div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>

            </div>
    <br>
    <br>





    {!! $comments->links() !!}
@endsection




