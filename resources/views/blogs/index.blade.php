@extends('layouts.app')
@section('title','Blog')
@section('content')
<h2>Blog</h2>
@foreach($blogs as $b)
    <article>
        <h3><a href="{ route('shop.blog.show', $b->slug) }">{ $b->title }</a></h3>
        <p>{ Str::limit($b->content,150) }</p>
    </article>
@endforeach
{ $blogs->links() }
@endsection
