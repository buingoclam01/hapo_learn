<div id="Documents" class="tab-pane fade">
    <div class="program">
        <div class="title">{{__('course.program')}}</div>
        <div class="learn-process">
            <label for="file" class="title">{{__('course.learning_progress')}}:</label>
            <progress id="file" value="{{ $lesson->progress }}" max="100"></progress> {{ $lesson->progress }}%
        </div>
        <div class="document-list">
            @foreach ($programs as $program)
            <div class="document-list-detail">
                <div class="name">
                    <div class="icon-file"><i class="fa-solid fa-file-{{ $program->type_file }}"></i></div>
                    <div class="name-file">{{ $program->type_file }}</div>
                    <div class="title-file">{{ $program->name }}</div>
                </div>
                <form action="{{ route('program-user.store') }}" method="POST">
                    @csrf
                    @if ($program->isLearned->count())
                    <a href="{{ $program->link }}" class="btn btn-hapo btn-preview previewed">Xem</a>
                    @else
                    <input type="hidden" name="program_id" value="{{ $program->id }}">
                    <input type="hidden" name="program_link" value="{{ $program->link }}">
                    <button type="submit" class="btn btn-hapo btn-preview">Preview</button>
                    @endif
                </form>

            </div>
            @endforeach
             <div class="document-list-detail">
                <div class="name">
                    <div class="icon-file"><i class="fa-solid fa-file-pdf"></i></div>
                    <div class="name-file">PDF</div>
                    <div class="title-file">Program learn HTML/CSS</div>

                </div>
                <div class="learn"><button class="btn btn-hapo btn-preview">Preview</button></div>
            </div>
            <div class="document-list-detail">
                <div class="name">
                    <div class="icon-file"><i class="fa-solid fa-file-video"></i></div>
                    <div class="name-file">Video</div>
                    <div class="title-file">Program learn  HTML/CSS</div>

                </div>
                <div class="learn"><button class="btn btn-hapo btn-preview">Preview</button></div>
            </div>
            <div class="document-list-detail">
                <div class="name">
                    <div class="icon-file"><i class="fa-solid fa-file-word"></i></div>
                    <div class="name-file">Lesson</div>
                    <div class="title-file">Program learn  HTML/CSS</div>

                </div>
                <div class="learn"><button class="btn btn-hapo btn-preview">Preview</button></div>
            </div>
            <div class="document-list-detail">
                <div class="name">
                    <div class="icon-file"><i class="fa-solid fa-file-word"></i></div>
                    <div class="name-file">Lesson</div>
                    <div class="title-file">Program learn HTML/CSS</div>

                </div>
                <div class="learn"><button class="btn btn-hapo btn-preview">Preview</button></div>
            </div>
            <div class="document-list-detail">
                <div class="name">
                    <div class="icon-file"><i class="fa-solid fa-file-word"></i></div>
                    <div class="name-file">Lesson</div>
                    <div class="title-file">Program learn HTML/CSS</div>

                </div>
                <div class="learn"><button class="btn btn-hapo btn-preview">Preview</button></div>
            </div>
        </div>
    </div>
</div>
