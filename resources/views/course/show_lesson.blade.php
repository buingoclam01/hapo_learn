<div id="Lessons" class="tab-pane fade show active">
    <div class="function-course">
        <div class="search">
            <form action="{{ route('courses.show', [$course->id]) }}" method="GET">
                <div class="form-search row">
                    <div class="col-8 box-search">

                        <input type="text" class="input-search" id="search" name="keyword" placeholder="Search...">
                        <button type="submit" name="submit" value="Search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="btn-search" type="submit" name="submit" value="Search">{{
                            __('course.search')
                            }}</button>
                    </div>
                </div>
            </form>
        </div>
        <div>
            <form class="form-join" action="{{ route('user-course.store') }}" method="POST">
                @csrf
                @if($course->isJoined->count() && !$course->isFinished->count() )
                    <div class="studying">{{ __('course_detail.studying') }}</div>
                @endif
                @if(!$course->isJoined->count())
                    <input type="hidden" name="course_id" value="{{ $course->id }}"
                           class="@error('course_id') is-invalid @enderror">
                    <button type="submit" class="btn btn-hapo">{{ __('course_detail.join_course') }}</button>
                    @error('course_id')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                @endif
            </form>
            @if ($course->isJoined->count() && !$course->isFinished->count())
            <button class="btn btn-hapo btn-leave-course" data-toggle="modal" data-target="#exampleModalCenter">
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
            @elseif ($course->isFinished->count())

                <form action=" {{ route('user-course.update', [$course->id]) }} " method="POST">
                    @csrf
                    @method('put')
                    <button class="btn btn-hapo">{{ __('course_detail.join_again') }}</button>
                </form>
            @endif
        </div>
    </div>
    <div class="lessons-list">
        @foreach ($lessons as $index => $lesson )
            <div class="lessons-list-detail">
                <div class="name"><span>{{ (isset($data['page'])) ? ((($data['page'] - 1) * 5) + ($index + 1)) : ($index + 1) }}.</span> {{ $lesson->title }} </div>
                @if ($course->isJoined->count() && !$course->isFinished->count())


                    <div class="learn">
                    <form action="{{route('lessons.show', $lesson->id) }}" method="get">
                         <button class="btn btn-hapo btn-learn">{{ __('course_detail.learn') }}</button>
                    </form>
                    </div>
                @else

                <div class="learn">

                            <button class="btn btn-hapo btn-not-learn" type="submit"> {{ __('course_detail.learn') }}</button>
                    </div>

                @endif
            </div>
        @endforeach
    </div>
    {{ $lessons->appends(request()->input())->links() }}
</div>
