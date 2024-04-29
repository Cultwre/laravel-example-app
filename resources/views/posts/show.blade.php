@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <div class="row">
        <div class="col-md-12">
            <img style="width:15%"  src="/storage/cover_images/{{$post->cover_image}}" alt="">
        </div>
    </div>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on {{$post->created_at}}</small>

    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {{ html()->form('POST', '/posts/' . $post->id)->class(['pull-right'])->open() }}
            {{ html()->hidden('_method', 'DELETE')}}
            {{ html()->submit('Delete')->class(['btn', 'btn-danger'])}}
            {{ html()->form()->close() }}
        @endif
    @endif
@endsection