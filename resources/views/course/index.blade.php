@extends('layouts.app')
@section('content')
<section class="course">
     <div class="container course-content">
     <form action="" method="get">
                <div class="search-form">
                    <div class="filter-btn mr-15">
                        <i class="fa-solid fa-filter"></i>
                        Filter
                    </div>
                    <div class="search-box mr-15">
                        <input type="text" name="search" placeholder="Search..." name="keyword" id="keyword"
                        @if(isset($data['keyword'])) value="{{ $data['keyword'] }}" @endif />

                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <button class="search-btn mr-15" type="submit">Tìm kiếm</button>
                </div>
            </form>
            <div class="container filter-content">
                <span>Lọc theo</span>
                <div>
                    <a class="filter-new" href="#">Mới nhất</a>
                    <a class="filter-old" href="#">Cũ nhất</a>
                    <span class="filter-option-container">
                        <span>Teacher</span>
                        <ul class="filter-option">
                            <li><a href="#">Giáo viên A</a></li>
                            <li><a href="#">giáo viên B</a></li>
                            <li><a href="#">Giáo viên C</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                    <span class="filter-option-container">
                        <span>Số người học</span>
                        <ul class="filter-option">
                            <li><a href="#">Sinh viên A</a></li>
                            <li><a href="#">Sinh viên B</a></li>
                            <li><a href="#">Sinh viên C</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                    <span class="filter-option-container">
                        <span>Thời gian học</span>
                        <ul class="filter-option">
                            <li><a href="#">Thời gian a</a></li>
                            <li><a href="#">Thời gian B</a></li>
                            <li><a href="#">Thời gian C</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                    <span class="filter-option-container">
                        <span>Số bài học</span>
                        <ul class="filter-option">
                            <li><a href="#">Tăng dần</a></li>
                            <li><a href="#">Giảm dần</a></li>

                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                    <span class="filter-option-container">

                        <span>Tags</span>
                        <ul class="filter-option">
                            <li><a href="#">1 2 3</a></li>
                            <li><a href="#"> 3 4 5</a></li>
                            <li><a href="#">6 5 4</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>

                    </span>
                    <span class="filter-option-container">
                        <span>Reviews</span>
                        <ul class="filter-option">
                            <li><a href="#">Giáo viên A</a></li>
                            <li><a href="#">giáo viên B</a></li>
                            <li><a href="#">Giáo viên C</a></li>
                        </ul>
                        <i class="fa-solid fa-angle-down"></i>
                    </span>
                </div>
            </div>
            <div class="row list-item ">
                @foreach($courses as $course)
                    <div class="col-6 mb-4">
                        <div class="row">
                            <div class="col-11 box-item">
                                <div class="row course-item">
                                    <div class="col-3">
                                        <img class="img-item" src="{{ 'https://source.unsplash.com/random'}}" alt="HTML Fundammentals">
                                    </div>
                                    <div class="col-8 item-content">
                                        <div class="item-title">
                                            {{ $course->name }}
                                        </div>
                                        <div class="item-description">
                                            {{ $course->description }}
                                        </div>
                                        <div>
                                            <button class="btn-more">
                                                More
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row justify-content-between">
                                    <div class="col-3">
                                        <div class="course-learners">
                                            Learners
                                        </div>
                                        <div class="course-number">
                                            {{ $course->Learners }}
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="course-learners">
                                            Lessons
                                        </div>
                                        <div class="course-number">
                                            {{ $course->Lessons }}
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="course-learners">
                                            Times
                                        </div>
                                        <div class="course-number">

                                                {{ $course->Times }}(h)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $courses->onEachSide(1)->links('layouts.pagination') }}
        </div>
     </div>
 </section>
@endsection
