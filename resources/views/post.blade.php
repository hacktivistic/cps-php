@extends('theme')

@push('scripts')
@endpush


@section('content')

<div class="row">

<div class="col-md-8">
    <div class="itembox">
        <div class="titlebar">
            {{ $post->title }}
        </div>
        <div class="content">
            <pre class="tetx">{!! $post->getContent() !!}</pre>
        </div>
    </div>
</div>

@include('layouts.recent')

@endsection
