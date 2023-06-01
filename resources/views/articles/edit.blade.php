@extends('articles.layout')
@section('content')
<div class="card">
    <div class="card-header">Contactus Page</div>
    <div class="card-body">
        <form action="{{ url('article/' .$articles->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PUT")
            
            <label>title</label></br>
            <input type="text" name="title" id="title" value="{{$articles->title}}" class="form-control"></br>
            <label>content</label></br>
            <input type="text" name="content" id="content" value="{{$articles->content}}" class="form-control"></br>
            <label>date_pub</label></br>
            <input type="text" name="date_pub" id="date_pub" value="{{$articles->date_pub}}" class="form-control"></br>
            <input type="submit" value="Update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop