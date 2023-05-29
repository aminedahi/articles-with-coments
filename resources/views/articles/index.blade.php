@extends('articles.layout')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md">
                <div class="card p-4">
                    <div class="card-header">
                        <h2>Articles</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/article/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                            <div class="row ">
                                
                            @foreach($articles as $item)
                                <div class="col-md-4  ">
                                    <div class="card  cart2 d-flex position-relative w-100"  >
                                    
                                        <div class="card-body">
                                            <h3>{{$item->title}}</h3>
                                            <p>{{$item->content}}</p>
                                            <p><strong>{{$item->date_pub}}</strong> </p> 
                                            <!-- <button class='btn btn-outline-warning'>Add to cart</button> -->
                                            <br>
                                            <div class="group-btn">
                                                <a href="{{ url('/article/' . $item->id) }}" title="View article"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                <a href="{{ url('/article/' . $item->id . '/edit') }}" title="Edit article"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                                <form method="POST" action="{{ url('/article' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Student"  >Delete</button>
                                                </form>
                                            </div>
                                            <form action="{{ route('comments.store') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="article_id" value="{{ $item->id }}">
                                                <input   class="form-control" name="content"type="text" placeholder="Enter your comment"> <br>  
                                                <button class="btn btn-success btn-sm" type="submit" class="">Submit</button>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                @endforeach 
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection