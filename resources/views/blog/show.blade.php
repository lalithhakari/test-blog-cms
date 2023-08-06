@extends('layout')

@section('body')
<h1 class="text-3xl bg-green-400 text-center text-green-900 font-bold mt-6 p-6">{{ $page->title }}</h1>
<div class="border text-center text-green-600 border-green-400 mt-8 p-3 text-xs uppercase">
    Published on {{ $page->date }} by {{ $page->author->name }}
</div>
<article class="space-y-4 mt-8 text-sm text-green-400 leading-loose">
    <img src="{{ $page->featured_image }}" class="border-2 border-green-400 p-1" alt="{{ $page->featured_image->alt }}" />
    {!! $page->content !!}
</article>
@endsection