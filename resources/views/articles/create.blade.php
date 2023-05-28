@extends('articles.layout')
@section('content')

<div class="card">
    <div class="card-header">articles Page</div>
    <div class="card-body">
        <form action="{{ url('article') }}" method="post">
            {!! csrf_field() !!}
            <label>title</label></br>
            <input type="text" name="title" id="title" class="form-control"></br>
            <label>content</label></br>
            <input type="text" name="content" id="content" class="form-control"></br>
            <label>date_pub</label></br>
            <input type="date" name="date_pub" id="date_pub" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>
    </div>
</div>
@stop
