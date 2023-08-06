@extends('layout')

@section('body')
<h1 class="text-2xl font-bold my-6">Welcome to my Blog Space!</h1>
{!! $page->content !!}
@php
$blogs = Statamic::tag('collection:blog')->paginate(5)->as('blogs')->fetch();
@endphp
<section class="border border-green-400 mt-12">
    <h2 class="p-5">Recent Blog Posts</h2>
    @foreach($blogs['blogs'] as $blog)
    <a href="{{ $blog->url }}" class="flex items-center justify-between p-5 border-t border-green-400 text-green-400 hover:text-green-900 hover:bg-green-400">
        <span>{{ $blog->title }}</span>
        <span class="text-green-900 text-sm">{{ $blog->date }}</span>
    </a>
    @endforeach
    <div class="border-t border-green-400">
        {{ $blogs['paginate']['auto_links'] }}
    </div>
</section>
@endsection