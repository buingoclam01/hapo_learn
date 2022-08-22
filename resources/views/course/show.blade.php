@extends('layouts.app')
@section('content')
    <div class="detail-course-overview">
        <div class="url-main">
            <div class="url-title">
                <nav aria-label="breadcrumb row">
                    <ol class="breadcrumb url-menu">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{__('home.home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('courses.index') }}"> {{__('home.all_courses') }} </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('home.course_detail') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="detail-course-content">
            @if(session('message'))
                <section class='alert alert-success'>{{session('message')}}</section>@endif
            @if(session('error'))
                <section class='alert alert-danger '>{{session('error')}}</section>@endif
            <div class="row">
                <div class="col-8 content-main">
                    <div class="image-course"><img src='https://source.unsplash.com/random' alt=""></div>
                    <div class="course-infor">
                        <ul class="nav menu-course" id="myTab">
                            <li class="nav-item">
                            <a class="nav-link @if(!session('status')) active @endif" id="pills-home-tab" data-toggle="pill" data-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="@if(!session('status')) true @else false @endif">{{ __('course_detail.lessons') }}</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" data-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">{{ __('course_detail.teachers') }}</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link @if(session('status')) {{ session('status') }} @endif" id="pills-contact-tab" data-toggle="pill" data-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="@if(session('status')) true @else false @endif">{{ __('course_detail.reviews') }}</a>
                            </li>
                        </ul>

                        <div class="border-bonus"></div>
                        <div class="tab-content">
                            @include('course.show_lesson')
                            @include('course.show_teacher')
                            @include('course.show_review')
                        </div>
                    </div>
                </div>
                <div class="col-4 content-bonus">
                    <div class="description">
                        <div class="description-title">{{
                        __('course_detail.description_course')
                        }}</div>
                        <div class="description-content">
                            {{ $course->description }}
                        </div>
                    </div>
                    <div class="col-12 course-infor-title">
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-solid fa-users"></i></span>{{
                            __('course_detail.learners')
                            }}</div>
                            <span class="colon">:</span>
                            <div class="content">{{ $course->learners}}</div>
                        </div>
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-regular fa-calendar"></i></span>{{
                            __('course_detail.lessons')
                            }}</div>
                            <span class="colon">:</span>
                            <div class="content">{{ $course->lessons }} {{
                            __('course_detail.lesson')
                            }}</div>
                        </div>
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-regular fa-clock"></i></span>{{
                            __('course_detail.times')
                            }}</div>
                            <span class="colon">:</span>
                            <div class="content"> {{ $course->times}} {{
                            __('course_detail.hours')
                            }}</div>
                        </div>
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-regular fa-hashtag"></i></span>Tags</div>
                            <span
                                class="colon">:</span>
                            <div class="content">
                                @foreach ($tags as $index => $tag )
                                    @if ($index == (count($tags)-1))
                                        <a href=""> #{{ $tag->name }}</a>

                                    @else
                                        <a href="">#{{ $tag->name }},</a>

                                    @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="course-infor-title-item">
                            <div class="name"><span class="icon"><i class="fa-regular fa-money-bill-1"></i></span>{{
                            __('course_detail.price')
                            }}
                            </div>
                            <span class="colon">:</span>
                            <div class="content">{{ number_format($course->price) }} VNĐ</div>
                        </div>
                    </div>
                    <div class="col-12 course-related">
                        <div class="course-related-title">{{
                        __('course_detail.other_course')
                        }}</div>
                    </div>
                    <div class="col-12 course-related-list">
                        @foreach ( $otherCourses as $index => $course )
                            <div class="course-related-detail">
                                <div class="name"><a href="{{ route('courses.show', [$course->id]) }}"><span>{{ $index+=1
                                    }}.</span> {{ $course->name }}</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="btn-view-all">
                            <a href="{{ route('courses.index') }}" class="btn btn-hapo">{{ __('course_detail.view_all_course') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
