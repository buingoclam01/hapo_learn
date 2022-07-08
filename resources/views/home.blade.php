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

 <div class="banner-connect" style="background-image: url('{{ asset('images/backgroud.png')}}');">
    <div class="banner-connect-content">
       <p class="banner-connect-content-title">
          Why HapoLearn?
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  Interactive lessons, "on-the-go" practice, peer support.
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  Interactive lessons, "on-the-go" practice, peer support.
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  Interactive lessons, "on-the-go" practice, peer support.
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  Interactive lessons, "on-the-go" practice, peer support.
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  Interactive lessons, "on-the-go" practice, peer support.
       </p>
    </div>   
        <div class="banner-connect-img"> <img src="{{ asset('images/laptop.png')}}" alt="">  </div>
</div>

<div class="feed-back">
    <p class="big-tittle">
       Feedback
    </p>
    <div class="line-border"></div>
    <p class="feed-back-slogan">
       What other students turned professionals have to say about us after learning with us and reaching their goals
    </p>
    <div class="list-feedback">
       <div class="item-feed">
          <div class="content-feed">
             <div class="line-d"></div>
             “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
          </div>
          <div class="user-feed">
             <div class="face">
                <img src="{{ asset('images/face.png')}}" alt="">
             </div>
             <div class="info">
                <div class="name">
                Hoang Anh Nguyen
                </div>
                <div class="text">
                   PHP
                </div>
                <div class="star">
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                </div>
             </div>
          </div>
       </div>
       <div class="item-feed">
          <div class="content-feed">
             <div class="line-d"></div>
             “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
          </div>
          <div class="user-feed">
             <div class="face">
                <img src="{{ asset('images/face.png')}}" alt="">
             </div>
             <div class="info">
                <div class="name">
                   Hoàng Nguyễn Nguyên
                </div>
                <div class="text">
                   PHP
                </div>
                <div class="star">
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                </div>
             </div>
          </div>
       </div>
       <div class="item-feed">
          <div class="content-feed">
             <div class="line-d"></div>
             “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
          </div>
          <div class="user-feed">
             <div class="face">
                <img src="{{ asset('images/face.png')}}" alt="">
             </div>
             <div class="info">
                <div class="name">
                   Hoàng Nguyễn Nguyên
                </div>
                <div class="text">
                   PHP
                </div>
                <div class="star">
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                </div>
             </div>
          </div>
       </div>
       <div class="item-feed">
          <div class="content-feed">
             <div class="line-d"></div>
             “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
          </div>
          <div class="user-feed">
             <div class="face">
                <img src="{{ asset('images/face.png')}}" alt="">
             </div>
             <div class="info">
                <div class="name">
                   Hoàng Nguyễn Nguyên
                </div>
                <div class="text">
                   PHP
                </div>
                <div class="star">
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                </div>
             </div>
          </div>
       </div>
       <div class="item-feed">
          <div class="content-feed">
             <div class="line-d"></div>
             “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
          </div>
          <div class="user-feed">
             <div class="face">
                <img src="{{ asset('images/face.png')}}" alt="">
             </div>
             <div class="info">
                <div class="name">
                   Hoàng Nguyễn Nguyên
                </div>
                <div class="text">
                   PHP
                </div>
                <div class="star">
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                </div>
             </div>
          </div>
       </div>
       <div class="item-feed">
          <div class="content-feed">
             <div class="line-d"></div>
             “A wonderful course on how to start. Eddie beautifully conveys all essentials of a becoming a good Angular developer. Very glad to have taken this course. Thank you Eddie Bryan.”
          </div>
          <div class="user-feed">
             <div class="face">
                <img src="{{ asset('images/face.png')}}" alt="">
             </div>
             <div class="info">
                <div class="name">
                   Hoàng Nguyễn Nguyên
                </div>
                <div class="text">
                   PHP
                </div>
                <div class="star">
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                   <span class="fa fa-star checked"></span>
                </div>
             </div>
          </div>
       </div> 
       </div>
    </div>
 </div>
<div class="banner-startlearn" style="background-image: url('{{ asset('images/banner3.png')}}');">
    <div class="banner-startlearn-content">
       <p class="banner-startlearn-title">
          Become a member of our growing community!
       </p>
       <p class="banner-startlearn-link">
          <a href="">Start Learning Now!</a>
       </p>
    </div>
 </div>
 <div class="stactistic">
    <p class="big-tittle">
       Stactistic
    </p>
    <div class="line-border"></div>
    <div class="list-statistic">
       <div class="list-item">
          <div class="list-items-title">
             Courses
          </div>
          <div class="list-item-number">
             1,5894
          </div>
       </div>
       <div class="list-item">
          <div class="list-items-title">
          Lessons
          </div>
          <div class="list-item-number">
          2,689
          </div>
       </div>
       <div class="list-item">
          <div class="list-items-title">
          Learners
          </div>
          <div class="list-item-number">
          16,882
          </div>
       </div>
    </div>
 </div>
@endsection
