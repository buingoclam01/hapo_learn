@extends('layouts.app')
@section('content')
<section class="banner">
    <div class="banner-container">
        <p class="banner-img">
    <img src="{{ asset('images/bannerhome.png') }}" alt="">
    </p>
        <div class="banner-title">
            <p class="banner-title-content">{{ __('home.learn_anytime_anywhere') }} {{ __('home.at') }}</p>
            <p class="banner-title-content banner-title-content-b">
                 HapoLearn<img src="{{ asset('images/banner.png') }}" alt="">!
            </p>
        </div>
        <div class="banner-conlit">
            <p>
            {{ __('home.interactive_lessons') }}, "on-the-go" <br> {{ __('home.practice')
                }}, {{ __('home.peer_support') }}.
            </p>
        </div>
        <a href="{{ route('courses.index') }} " class="button-1">{{__('home.start_learning_now')}} </a>
    </div>
    <div class="banner-bottom">
    </div>
    <div class="overlay">
    </div>
</section>
<div class="main">

    <div class="main-content">
        <div class="list-items">
           @foreach($courses as $course)
          <div class="items">
             <div class="img-items img-items1"> <img src="{{ $course['image'] }}" alt="">
             </div>
             <div class="content-items">
                <p class="title">{{ $course->name }}</p>
                <p class="content-text">{{ Str::limit($course->description, 60) }}</p>
                <p class="btn-link">
                   <a href="{{ route('courses.index') }}" >{{__('home.take_this_course')}}</a>
                </p>
             </div>
          </div>
          @endforeach
       </div>
    </div>
    <div class="main-content">
       <p class="big-tittle"> {{__('home.other_courses')}}</p>
       <div class="line-border"></div>
       <div class="list-items">
       @foreach($otherCourses as $otherCourse)
          <div class="items">
             <div class="img-items img-items1">
                <img src="{{ $otherCourse->image }}" alt="">
             </div>
             <div class="content-items">
                <p class="title">{{ $otherCourse->name }}</p>
                <p class="content-text">{{ Str::limit($otherCourse->description, 60) }}</p>
                <p class="btn-link">
                   <a href="{{ route('courses.show', [$otherCourse->id]) }}" >{{__('home.take_this_course')}}</a>
                </p>
             </div>
          </div>
          @endforeach
        </div>
       <div class="view-more-title">
          <a href="{{ route('courses.index') }}">{{__('home.view_all_our_course')}} <i class="fa-solid fa-arrow-right"></i></a>
       </div>
    </div>
 </div>
 <div class="banner-connect" style="background-image: url('{{ asset('images/backgroud.png')}}');">
    <div class="banner-connect-content">
       <p class="banner-connect-content-title">
       {{ __('home.why') }} HapoLearn?
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  {{ __('home.interactive_lessons')
                            }}, "on-the-go" {{ __('home.practice')
                            }}, {{ __('home.peer_support') }}
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  {{ __('home.interactive_lessons')
                            }}, "on-the-go" {{ __('home.practice')
                            }}, {{ __('home.peer_support') }}
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i> {{ __('home.interactive_lessons')
                            }}, "on-the-go" {{ __('home.practice')
                            }}, {{ __('home.peer_support') }}
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  {{ __('home.interactive_lessons')
                            }}, "on-the-go" {{ __('home.practice')
                            }}, {{ __('home.peer_support') }}
       </p>
       <p class="text-banner-connect">
          <i class="fa-solid fa-circle-check"></i>  {{ __('home.interactive_lessons')
                            }}, "on-the-go" {{ __('home.practice')
                            }}, {{ __('home.peer_support') }}
       </p>
    </div>
        <div class="banner-connect-img"> <img src="{{ asset('images/laptop.png')}}" alt="">  </div>
</div>
<div class="feed-back">
    <p class="big-tittle">
    {{__('home.feedback')}}
    </p>
    <div class="line-border"></div>
    <p class="feed-back-slogan">
    {{__('home.feedback_title')}}
    </p>
    <div class="list-feedback">
    @foreach($reviews as $review)
       <div class="item-feed">
          <div class="content-feed">
             <div class="line-d"></div>
             {{ $review->message }}
          </div>
          <div class="user-feed">
             <div class="face">
                <img src="{{ $review->user->avatar }}" alt="">
             </div>
             <div class="info">
                <div class="name">{{ $review->user->name }}</div>
                <div class="text">{{ $review->course->name }}</div>
                <div class="star">
                @php
                    $stars = $review['rate'];
                    @endphp
                    @for($i = 0; $i < $stars ; $i++) <i class="fa fa-star checked"></i>
                @endfor
                </div>
             </div>
          </div>
       </div>
    @endforeach
    </div>
 </div>
<div class="banner-startlearn" style="background-image: url('{{ asset('images/banner3.png')}}');">
    <div class="banner-startlearn-content">
       <p class="banner-startlearn-title">
       {{__('home.become_a_member')}}
       </p>
       <p class="banner-startlearn-link">
          <a href="{{ route('courses.index') }} ">{{__('home.start_learning_now')}}</a>
       </p>
    </div>
 </div>
 <div class="stactistic">
    <p class="big-tittle"> {{__('home.statistic')}} </p>
    <div class="line-border"></div>
    <div class="list-statistic">
       <div class="list-item">
          <div class="list-items-title">{{__('home.courses')}} </div>
          <div class="list-item-number"> {{ $countCourses }} </div>
       </div>
       <div class="list-item">
          <div class="list-items-title">{{__('home.lessons')}}
          </div>
          <div class="list-item-number">
          {{ $countLessons }}
          </div>
       </div>
       <div class="list-item">
          <div class="list-items-title">
          {{__('home.learners')}}
          </div>
          <div class="list-item-number">
          {{ $learners }}
          </div>
       </div>
    </div>
 </div>
@endsection
