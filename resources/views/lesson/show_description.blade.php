<div id="Descriptions" class="tab-pane fade show active">
    <div class="information des">
        <div class="title">Descriptions lesson</div>
        <div class="content">
            <p>{{ $lesson->description }}</p>
        </div>
    </div>

    <div class="information req">
        <div class="title">Requirements</div>
        <div class="content">
            <p>{{ $lesson->description }}</p>
        </div>

        <div class="tags">
            <div class="title">Tag:</div>
            @foreach ($tags as $tag )
            <div class="item">
                <p>#{{ $tag->name }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
