@extends('layouts.app')

@section('content')

<section class="banner">

    <div class="banner-container">
        <p class="banner-img">
    <img src="{{ asset('images/bannerhome.png') }}" alt="">
    </p>
        <div class="banner-title">
            <p class="banner-title-content">Learn Anytime, Anywhere</p>
            <p class="banner-title-content banner-title-content-b">
                at HapoLearn<img src="{{ asset('images/banner.png') }}" alt="">!  
            </p>
        </div>
        <div class="banner-conlit">
            <p>
                Interactive lessons, "on-the-go" <br>
                practice, peer support.
            </p>
        </div>
        <a href="#" class="button-1">Start Learning Now!</a>
    </div>
    <div class="banner-bottom">
        
    </div>
    <div class="overlay">
           
    </div>
</section>

 
@endsection
