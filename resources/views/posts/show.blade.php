@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go back</a>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    <hr>
    <small>Written on {{$post->created_at}}</small>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {{ html()->form('POST', '/posts/' . $post->id)->class(['pull-right'])->open() }}
    {{ html()->hidden('_method', 'DELETE')}}
    {{ html()->submit('Delete')->class(['btn', 'btn-danger'])}}
    {{ html()->form()->close() }}
@endsection