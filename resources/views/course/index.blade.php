@extends('layouts.app')

@section('content')
<section class="container-fluid course-container">
    <div class="container course-content">
        <form action="{{ route('courses.index') }}" method="GET">
                <div class="search-form">
                    <div class="filter-btn mr-15">
                        <i class="fa-solid fa-filter"></i>
                        {{ __('course.filter') }}
                    </div>
                    <div class="search-box mr-15">
                        <input type="text" name="keyword" id="keyword" placeholder="{{ __('course.enter_keywords') }}" @if(isset($data['keyword'])) value="{{ $data['keyword'] }}" @endif>

                        <label for="keyword"><i class="fa-solid fa-magnifying-glass"></i></label>
                    </div>
                    <button class="search-btn mr-15" type="submit">{{ __('course.search') }}</button>
                </div>

                <div class="container filter-content">
                    <span>{{ __('course.filter_by') }}</span>
                <div>
                    <input type="radio" name="created_time" id="filterNew" value="newest" @if(isset($data['created_time']) && $data['created_time'] == 'newest') checked @endif><label for="filterNew">{{ __('course.newest') }}</label>
                    <input type="radio" name="created_time" id="filterOld" value="oldest" @if(isset($data['created_time']) && $data['created_time'] == 'oldest') checked @endif><label for="filterOld">{{ __('course.oldest') }}</label>
                    <span class="filter-border filter-option-container">
                        <span class="filter-teacher-title">{{ __('course.teacher') }}</span><br>
                            <select class="w-100 js-basic-multiple" name="teachers[]" multiple="multiple">
                                @foreach($teachers as $teacher)
                                    <option value="{{$teacher->id}}"
                                    @if(isset($data['teachers']) && in_array($teacher->id, $data['teachers'])) selected @endif>
                                    {{ $teacher->name }}</option>
                                @endforeach
                            </select>
                            <i class="filter-teacher-icon fa-solid fa-angle-down"></i>
                        </span>

                        <span class="filter-border filter-option-container">
                            <select class="js-basic-single" name="learner">
                                <option @if(!isset($data['learner'])) selected @endif disabled hidden value="" >{{ __('course.number_of_learners') }}</option>
                                <option @if(isset($data['learner']) && $data['learner'] == config('course.sort_low_to_hight')) selected @endif value="{{ config('course.sort_low_to_hight') }}">{{ __('course.ascending') }}</option>
                                <option @if(isset($data['learner']) && $data['learner'] == config('course.sort_hight_to_low')) selected @endif value="{{ config('course.sort_hight_to_low') }}">{{ __('course.descending') }}</option>
                                </select>
                        </span>

                    <span class="filter-option-container">
                        <select class="js-basic-single" name="time">
                            <option @if(!isset($data['time'])) selected @endif disabled hidden value="" >{{ __('course.study_time') }}</option>
                            <option @if(isset($data['time']) && $data['time'] == config('course.sort_low_to_hight')) selected @endif value="{{ config('course.sort_low_to_hight') }}">{{ __('course.ascending') }}</option>
                            <option @if(isset($data['time']) && $data['time'] == config('course.sort_hight_to_low')) selected @endif value="{{ config('course.sort_hight_to_low') }}">{{ __('course.descending') }}</option>
                            </select>
                    </span>

                    <span class="filter-option-container">
                        <select class="js-basic-single" name="lesson">
                                <option @if(!isset($data['lesson'])) selected @endif disabled hidden value="" >{{ __('course.number_of_lessons') }}</option>
                                <option @if(isset($data['lesson']) && $data['lesson'] == config('course.sort_low_to_hight')) selected @endif value="{{ config('course.sort_low_to_hight') }}">{{ __('course.ascending') }}</option>
                                <option @if(isset($data['lesson']) && $data['lesson'] == config('course.sort_hight_to_low')) selected @endif value="{{ config('course.sort_hight_to_low') }}">{{ __('course.descending') }}</option>
                            </select>
                    </span>

                    <span class="filter-border filter-option-container">
                        <span class="filter-teacher-title">{{ __('course.tags') }}</span><br>
                            <select class="w-100 js-basic-multiple" name="tags[]" multiple="multiple">
                                @foreach($tags as $tag)
                                <option value="{{$tag->id}}"
                                    @if(isset($data['tags']) && in_array($tag->id, $data['tags'])) selected @endif>
                                    {{ $tag->name }}</option>
                                @endforeach
                            </select>
                             <i class="filter-teacher-icon fa-solid fa-angle-down"></i>
                    </span>

                        <span class="filter-option-container">
                            <select class="js-basic-single" name="review">
                                <option @if(!isset($data['review'])) selected @endif disabled hidden value="" >{{ __('course.review') }}</option>
                                <option @if(isset($data['review']) && $data['review'] == config('course.sort_low_to_hight')) selected @endif value="{{ config('course.sort_low_to_hight') }}">{{ __('course.ascending') }}</option>
                                <option @if(isset($data['review']) && $data['review'] == config('course.sort_hight_to_low')) selected @endif value="{{ config('course.sort_hight_to_low') }}">{{ __('course.descending') }}</option>
                            </select>
                        </span>
                </div>
            </div>
        </form>

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
                                        <form method="GET" action="{{ route('courses.show', $course->id) }}">
                                            <button class="btn-more">
                                           {{ __('course.more') }}
                                            </button>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <div class=" row justify-content-between">
                                    <div class="col-4">
                                        <div class="course-learners">
                                        {{ __('course.learners') }}
                                        </div>
                                        <div class="course-number">
                                            {{ $course->learners }}
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="course-learners">
                                        {{ __('course.lessons') }}
                                        </div>
                                        <div class="course-number">
                                            {{ $course->lessons }}
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="course-learners">
                                        {{ __('course.times') }}
                                        </div>
                                        <div class="course-number">

                                                {{ $course->times }}(h)
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                @if(count($courses) == 0)
                <h3>{{ __('course.erorr') }}</h3>
                @endif
            </div>
            {{ $courses->appends(request()->query())->links() }}
    </div>
 </section>
@endsection
