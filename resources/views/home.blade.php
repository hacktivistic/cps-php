@extends('theme')

@push('scripts')
@endpush


@section('content')

<div class="row">

<div class="col-md-8">
    <div class="itembox">
        <div class="titlebar">
            New Paste
        </div>
        <div class="content">
            <form method="POST" action="post">
                @csrf()
                <input type="text" class="titlea" name="title" placeholder="Title" required value="Untitled">
                <textarea class="txtarea" name="txtpost" placeholder="Your Text Here!" required ></textarea>
                <input type="submit" class="postBtn" name="post" value="Post">
            </form>
        </div>
    </div>
</div>

@include('layouts.recent')
@endsection
