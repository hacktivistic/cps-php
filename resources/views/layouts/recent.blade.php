@section('content')
@parent
<div class="col-md-4">
    <div class="itembox">
        <div class="titlebar">
            Recent Pastes
        </div>
        <div class="content">
            <ul>
            @foreach($posts as $post)
                <li>
                    <div class="boxitem">
                            <div class="info">
                                <h1 class="post-name"><a href="/post/{{ $post->ref }}">{{ $post->title }}</a></h1>
                                <div class="row">
                                    <div class="col-md-9">
                                        <span class="timep">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
</div>
@endsection
