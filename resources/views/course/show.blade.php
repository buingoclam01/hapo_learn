@extends('layouts.app')

@section('content')
<div class="detail-course-overview">
    <div class="url-main">
        <div class="url-title">
            <ul class="url-menu">
                <li><a href="{{ route('home') }}">Home</a> <span>></span></li>
                <li><a href="{{ route('courses.index') }}">All courses</a> <span>></span></li>
                <li><a href="">Course detail</a></li>
            </ul>
        </div>
    </div>
    <div class="detail-course-content">

        <div class="row">
            <div class="col-8 content-main">
                <div class="image-course"><img src="{{ 'https://source.unsplash.com/random' }}" alt=""></div>
                <div class="course-infor">
                    <ul class="nav nav-pills mb-3 menu-course" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="pills-home-tab pills-a-tab" data-toggle="pill" href="#pills-home"
                                role="tab" aria-controls="pills-home pills-a" aria-selected="true">Lessons</a>
                        </li>
                        <li class="nav-item">
                            <a id="pills-profile-tab pills-b-tab" data-toggle="pill" href="#pills-profile" role="tab"
                                aria-controls="pills-profile pills-b" aria-selected="false">Teacher</a>
                        </li>
                        <li class="nav-item">
                            <a id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Reviews</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="function-course">
                                <div class="search">
                                    <form action="#" method="GET">
                                        <div class="form-search row">
                                            <div class="mr-15 box-search">
                                                <input type="text"  name="key_search" placeholder="Search...">
                                                <label for="keyword"><i class="fa-solid fa-magnifying-glass"></i></label>

                                            </div>

                                            <div class="col-1">
                                                <button class="btn-search" type="submit" name="submit" value="Search">{{__('course.search')  }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <button class="btn btn-hapo btn-join">Tham gia khóa học</button>
                            </div>
                            <div class="lessons-list">
                                <div class="lessons-list-detail">
                                    <div class="name"><a href="">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></div>
                                    <div class="learn"><button class="btn btn-hapo btn-learn">Learn</button></div>
                                </div>
                                <div class="lessons-list-detail">
                                    <div class="name"><a href="">2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></div>
                                    <div class="learn"><button class="btn btn-hapo btn-learn">Learn</button></div>
                                </div>
                                <div class="lessons-list-detail">
                                    <div class="name"><a href="">3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></div>
                                    <div class="learn"><button class="btn btn-hapo btn-learn">Learn</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="teacher">
                                <div class="main-teacher">Main Teachers</div>

                                <div class="teacher-detail">
                                    <div class="information">
                                            <div class="image"><img src="{{ 'https://source.unsplash.com/random' }}" alt=""></div>
                                        <div class="infor-contact">
                                                <div class="name">Lua Trung Nghia</div>
                                                <div class="phone">Second Year Teacher</div>
                                                <div class="teacher-icon">
                                                    <div class="icon google"><i class="fa-brands fa-google-plus-g"></i></div>
                                                    <div class="icon facebook"><i class="fa-brands fa-facebook-f"></i></div>
                                                    <div class="icon slack"><i class="fa-brands fa-slack"></i></div>
                                                </div>
                                        </div>
                                    </div>
                                        <div class="descriptions">Descriptions
                                                <span>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique </span>
                                        </div>
                                </div>
                                <div class="teacher-detail">
                                    <div class="information">
                                            <div class="image"><img src="{{ 'https://source.unsplash.com/random' }}" alt=""></div>
                                        <div class="infor-contact">
                                                <div class="name">Lua Trung Nghia</div>
                                                <div class="phone">Second Year Teacher</div>
                                                <div class="teacher-icon">
                                                    <div class="icon google"><i class="fa-brands fa-google-plus-g"></i></div>
                                                    <div class="icon facebook"><i class="fa-brands fa-facebook-f"></i></div>
                                                    <div class="icon slack"><i class="fa-brands fa-slack"></i></div>
                                                </div>
                                        </div>
                                    </div>
                                        <div class="descriptions">Descriptions
                                                <span>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique </span>
                                        </div>
                                </div>


                            </div>

                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="review">
                                <div class="review-sum"> Reviews</div>
                                <div class="star">
                                    <div class="star-content">
                                        <p class="number">number</p>
                                        <div class="lose-star">
                                            <div id="rateYoUser"></div>
                                            <input type="hidden" id="number_star" value="">
                                        </div>
                                        <p class="rating"> Ratings</p>
                                    </div>

                                    <div class="star-review">

                                        <div class="star-review-item">
                                            <div class="name">5 stars</div>
                                            <div class="bar">

                                            </div>
                                            <div class="number">5</div>
                                        </div>
                                        <div class="star-review-item">
                                            <div class="name">4 stars</div>
                                            <div class="bar">

                                            </div>
                                            <div class="number">4</div>
                                        </div>
                                        <div class="star-review-item">
                                            <div class="name">3 stars</div>
                                            <div class="bar">

                                            </div>
                                            <div class="number">3</div>
                                        </div>
                                        <div class="star-review-item">
                                            <div class="name">2 stars</div>
                                            <div class="bar">

                                            </div>
                                            <div class="number">2</div>
                                        </div>
                                        <div class="star-review-item">
                                            <div class="name">1 stars</div>
                                            <div class="bar">

                                            </div>
                                            <div class="number">1</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment">
                                    <div class="all-review">Show all reviews
                                    <i class=" fa-filter fa-solid fa-sort-down"></i>
                                    </div>

                                    <div class="user-comment">
                                        <div class="user-comment-infor">
                                            <div class="image"><img src="{{ 'https://source.unsplash.com/random' }}" alt=""></div>
                                            <div class="name">Nam hoàng <i class="fa fa-star checked"></i></div>
                                            <div class="vote-star"> </div>
                                            <div class="time">August 4, 2020 at 1:30 pm</div>
                                        </div>
                                        <div class="content">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum </div>
                                    </div>

                                </div>
                                <div class="leave-review">Leave a Review</div>
                                <form class="form-review" action="" method="POST">
                                    @csrf
                                    <label for="">Message</label>
                                    <br />
                                    <textarea class="review-text @error('content') is-invalid @enderror" name="content"
                                        id="content"></textarea>
                                    @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <input type="hidden" name="course_id" value="">
                                    <input type="hidden" class="@error('star') is-invalid @enderror" name="star"
                                        id="voteStar">

                                    <div class="review-vote">
                                        <div class="vote">Vote</div>
                                        <div class="click-star">
                                            <div id="rateYo"> </div>
                                        </div>
                                        <div class="name-star">(star)</div>
                                    </div>
                                    @error('star')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="send">
                                        <button class="btn btn-hapo btn-send" type="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-4 content-bonus">
                <div class="description">
                    <div class="description-title">Descriptions course</div>
                    <div class="description-content">
                        <span>Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in impee.</span>

                    </div>
                </div>
                <div class="col-12 course-infor-title">

                    <div class="course-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-regular fa-calendar"></i></span>Course</div>
                        <span class="colon">: HTML/JS</span>
                        <div class="content"> </div>
                    </div>
                     <div class="course-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-solid fa-users"></i></span>Learners</div><span
                            class="colon">: 200</span>
                        <div class="content"> </div>
                    </div>
                    <div class="course-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-regular fa-clock"></i></span>Times</div><span
                            class="colon">: 80 hours</span>
                        <div class="content"></div>
                    </div>
                    <div class="course-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-regular fa-hashtag"></i></span>Tags</div>
                        <span class="colon"><a href="#">#learn, </a> <a href="#">#code </a></span>


                        <div class="content"></div>

                    </div>
                    <div class="course-infor-title-item">
                        <div class="name"><span class="icon"><i class="fa-regular fa-money-bill-1"></i></span>Price
                        </div><span class="colon">: 200,000 VNĐ</span>
                        <div class="content"></div>
                    </div>
                </div>
                <div class="col-12 course-related">
                    <div class="course-related-title">Other Courses</div>

                </div>
                <div class="col-12 course-related-list">

                    <div class="course-related-detail">

                                <div class="lessons-list-detail">
                                    <div class="name"><a href="">1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></div>
                                </div>
                                <div class="lessons-list-detail">
                                    <div class="name"><a href="">2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></div>
                                </div>
                                <div class="lessons-list-detail">
                                    <div class="name"><a href="">3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </a></div>
                                </div>
                    </div>

                    <div class="btn-view-all">
                        <a href="" class="btn btn-hapo">View all ours courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
