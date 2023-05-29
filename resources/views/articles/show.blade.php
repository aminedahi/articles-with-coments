@extends('articles.layout')
@section('content')
<div class="card">
    <div class="card-header">Articles Page</div>
    <div class="card-body">
        <div class="card-body">
        @if(isset($articles))
            <h5 class="card-title">Title : {{ $articles->title }}</h5>
            <p class="card-text">Content : {{ $articles->content }}</p>
            <p class="card-text">Date_pub : {{ $articles->date_pub }}</p>
            @else
        <p>articles not found.</p>
    @endif
            <button class="btn btn-outline-secondary"><a class="text-decoration-none text-dark" href="/">Go Back </a></button>
        </div>
        <div>
            <h4>Comments:</h4>
            <ul>
                @foreach ($comments as $comment)
                    <li>{{ $comment->content }}</li>
                @endforeach
            </ul>
        </div>
        </hr>
    </div>
</div>