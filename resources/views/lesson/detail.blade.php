@extends('layouts.app')

@section('content')
<div class="detail-lesson-overview">
    <div class="url-main">
        <div class="url-title">
            <nav aria-label="breadcrumb url-menu">
                <ol class="breadcrumb url-menu">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">All courses</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('courses.show', $lesson->course_id) }}">Course detail</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Lesson detail</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="detail-lesson-content">
        {{-- @if(session('message'))    <section class='alert alert-success'>{{session('message')}}</section>@endif
        @if(session('error'))    <section class='alert alert-danger '>{{session('error')}}</section>@endif --}}
        <div class="row">
            <div class="col-8 content-main">
                <div class="image-course"><img
                        src='https://source.unsplash.com/random'
                        alt=""></div>
                <div class="lesson-infor">
                    <ul class="nav menu-lesson" id="myTab">
                        <li class="nav-item">
                            <a class="active" data-toggle="tab" href="#Descriptions">{{__('course.description')}}</a>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="tab" href="#Documents">{{__('course.document') }}</a>

                        </li>
                    </ul>

                    <div class="border-bonus"></div>
                    <div class="tab-content">
                        @include('lesson.show_description')
                        @include('lesson.show_document')
                    </div>
                </div>
            </div>
            <div class="col-4 content-bonus">
                <div class="col-12 lesson-infor-title">
                    <div class="lesson-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-solid fa-desktop"></i></span>Course</div><span
                            class="colon">:</span>
                        <div class="content">{{ $course->name }}</div>
                    </div>
                    <div class="lesson-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-solid fa-users-line"></i></span>Learners</div>
                        <span class="colon">:</span>
                        <div class="content">{{ $course->learners }}</div>
                    </div>
                    <div class="lesson-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-regular fa-clock"></i></span>Times</div><span
                            class="colon">:</span>
                        <div class="content"> {{ $course->times }} hours</div>
                    </div>
                    <div class="lesson-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-regular fa-hashtag"></i></span>Tags</div><span
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
                    <div class="lesson-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-regular fa-money-bill-1"></i></span>Price
                        </div><span class="colon">:</span>
                        <div class="content"> {{ number_format($course->price) }} VNĐ</div>
                    </div>
                    <button class="btn btn-hapo btn-end btn-leave-course" data-toggle="modal" data-target="#exampleModalCenter">
                {{ __('course_detail.end_course') }}
            </button>
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Thông Báo</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bạn có chắc chắn muốn kết thúc khóa học ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                            <form action=" {{ route('user-course.destroy', [$course->id]) }} " method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-primary">Có</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                </div>
                <div class="col-12 course-related">
                    <div class="course-related-title">{{ __('course_detail.other_course') }}</div>
                </div>
                <div class="col-12 course-related-list">
                    @foreach ( $otherCourses as $index => $course )
                    <div class="course-related-detail">
                        <div class="name"> <a href=""><span>{{ $index+=1
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
