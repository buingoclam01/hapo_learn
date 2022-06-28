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

<div class="main">
    <div class="main-content">
       <div class="list-items">
          <div class="items">
             <div class="img-items img-items1">
                <img src="{{ asset('images/js.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">HTML/CSS/js turtorial</p>
                <p class="content-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
          <div class="items">
             <div class="img-items img-items2">
                <img src="{{ asset('images/laravel.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">Laravel tutorial</p>
                <p class="content-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
          <div class="items">
             <div class="img-items img-items1">
                <img src="{{ asset('images/php.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">PHP turtorial</p>
                <p class="content-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
       </div>
    </div>
    <div class="main-content">
       <p class="big-tittle"> Other courses</p>
       <div class="line-border"></div>
       <div class="list-items no-tranfer mt-45">
          <div class="items">
             <div class="img-items img-items3">
                <img src="{{ asset('images/CSS.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">HTML/CSS/js turtorial</p>
                <p class="content-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
          <div class="items">
             <div class="img-items img-items2">
                <img src="{{ asset('images/Group.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">Laravel tutorial</p>
                <p class="content-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
          <div class="items">
             <div class="img-items img-items4">
                <img src="{{ asset('images/java 1.png')}}" alt="">
             </div>
             <div class="content-items">
                <p class="title">PHP turtorial</p>
                <p class="content-text">I knew hardly anything about HTML, JS, and CSS before entering New Media. I had coded quite a bit, but never touched anything in regards to web development.</p>
                <p class="btn-link">
                   <a href="#" >Take This Course</a>
                </p>
             </div>
          </div>
       </div>
       <div class="view-more-title">
          <a href="">View All Our Courses <i class="fa-solid fa-arrow-right"></i></a>
       </div>
    </div>
 </div>
 
@endsection
