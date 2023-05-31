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
        <div class="j">
            <h4>Comments:</h4>
            <ul class="pp">
                @foreach ($comments as $comment)
                <div class="parateny">
                <div class="div">
                        
                    <li>{{ $comment->content }}</li>
                </div>
                <div>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this comment?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-primary">Delete</button>
                    </form>
                </div>
                </div>
                @endforeach
            </ul>
        </div>
        </hr>
    </div>
</div>