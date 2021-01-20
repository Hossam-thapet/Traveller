@extends('layouts.navbar')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Traveller</title>


        <!-- Fonts -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                height: 100%;
                width: 100%;
                background-image: url("img/1431600.jpg");
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
                font-family: "Exo", sans-serif;
                scroll-behavior: smooth;
                font-weight: 200;
                /*text-transform: capitalize;*/

            }
            .first-part {
                display:flex;
                justify-content: center;
                height: 60%;
            }
            .jumbotron.jumbotron {

                width: 80%;
               margin-top: 200px;
                background: rgba(250, 250, 250, 0.5);
                filter: brightness(120%);
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            a {
                color: black;
                font-size: 50px;
                font-family: "Exo", sans-serif;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: capitalize;

            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}
                <div class="container-fluid first-part">
                    <div class="jumbotron jumbotron">
                        <div class="container">
                            <h1 class="display-4">Travel Agency </h1>
                            <p class="lead font-weight-normal">Arrangment Of Tour All around The World <br> Give A Try ... </p>

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>

        </div>
        {{--second--}}
        <form action="/class_spc" method="get">
        <div class="container-fluid row category">

            <div class="col-sm-4 ">
                    <button class="chose_class"  name="class_spc" value="relaxing"><div class="the-card relax" >
                    <i class="fas fa-cocktail"></i>
                    <div class="title-card relax"><span class="title-card">Relaxing</span></div>
                    </div></button>
            </div>
            <div class="col-sm-4">
                <button class="chose_class"  name="class_spc" value="hiking"> <div class="the-card hike" >
                    <i class="fas fa-hiking"></i></i>
                    <div class="title-card hike"><span class="title-card">Hiking</span></div>
                    </div></button>
            </div>

            <div class="col-sm-4 ">
               <button class="chose_class"  name="class_spc" value="swimming"> <div class="the-card swim" >
                    <i class="fas fa-swimmer"></i>
                    <div class="title-card swim"><span class="title-card">Swimming</span></div>
                </div></button>
            </div>
        </div>
        </form>
        <br>
        <br>
        <!-- BROWSE -->
        <div class="row card-deck ex" id="browe">
            @foreach($tours as $tour)
               <div class="col-md-4 mt-3">
            <div class="card">
                <img src="{{asset('images/'.$tour->photo)}}" class="card-img-top" alt="...">
                <div class="card-body">


                            <h5 class="card-title"><a href="{{ route('tours.show',$tour->id) }}" class="text-primary text-center">{{$tour-> name}}</a></h5>


                </div>
            </div>
               </div>
            @endforeach
        </div>
        <!-- guids-part -->



        <!-- guids-part -->
        <hr>
        <div class="container-fluid guides">
            <h1 >Our Guides</h1>
            <div class="row guides">
                <div class="col-sm-4 guides">
                    <div class="contain-guide A">
                        <img src="img/guide1.jpg" >
                    </div>
                </div>
                <div class="col-sm-4 guides">
                    <div class="contain-guide B">
                        <img src="img/guide4.jpg" >

                    </div>
                </div>
                <div class="col-sm-4 guides">
                    <div class="contain-guide C">
                        <img src="img/guide5.jpg" >
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <!-- why traveller -->
        <div class="container-fluid traveller">
            <h2>Why Traveller...?</h2>
            <div class="row traveller">
                <div class="col-sm-3">
                    <div class="traveller-why">
                        <i class="fas fa-wallet"></i>
                        <h4>Save Money</h4>
                        <span>
           quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="traveller-why">
                        <i class="fas fa-user-alt"></i>
                        <h4>Qualified Guides</h4>
                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit
        </span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="traveller-why">
                        <i class="fas fa-award"></i>
                        <h4>Highly Rated Agency </h4>
                        <span>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</span>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="traveller-why">
                        <i class="fas fa-bus"></i>
                        <h4>Safe Travel </h4>
                        <span>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- about-part -->
        <hr id="about">
        <div class="container-fluid about" >
            <h2>About Us</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <!-- thired-part -->
        <div class="container-fluid thired-part" id="media">
            <div class="media title">
                <h1 class="contactus">Media Corner</h1>
            </div>
            <div class="row media">
                <div class="col-lg-3 fb">
                    <div class="media fb">
                        <a class="fab fa-facebook-f"></a>
                    </div>
                </div>
                <div class="col-lg-3 insta">
                    <div class="media fb">
                        <a class="fab fa-instagram"></a>
                    </div>
                </div>
                <div class="col-lg-3 you">
                    <div class="media fb">
                        <a class="fab fa-youtube"></a>
                    </div>
                </div>
                <div class="col-lg-3 google">
                    <div class="media fb">
                        <a class="fab fa-google"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="container-fluid footer">
            <div class="row footer">
                <div class="col-sm-6 footer">
                    <div class="ul-footer">
                        <h4>Menu</h4>
                        <ul>
                            <li><a href="#"></a>Relaxing Tours</li>
                            <li><a href="#"></a>Diving Tours</li>
                            <li><a href="#"></a>Safary Tours</li>
                            <li><a href="#"></a>Hestorical Tours</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 footer">
                    <div class="ul-footer">
                        <h4>Contact</h4>
                        <ul>
                            <li><a href="#"></a>About</li>
                            <li><a href="#"></a>Put a Review</li>
                            <li><a href="#"></a>Contact Us</li>
                            <li><a href="#"></a>Rate Us</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row copy-rights">
                <footer>
                    <span>CopyRights <i class="far fa-copyright"> 2020 all Rights Reserved</i></span>
                </footer>
            </div>
        </div>

    </body>
</html>
