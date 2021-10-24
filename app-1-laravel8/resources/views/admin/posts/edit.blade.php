@extends('admin.layouts.app')

@section('title', 'Editar Post')

@section('content')
<h1>Editar o Post <strong>{{$post->title}}</strong></h1>
<div>
    <form action="{{route('post.update', $post->id)}}" method="post">
        {{--<input type="text" name="_token" value="{{ csrf_token() }}">--}}

        @method('put')

        @include('admin.posts._partiais.form')

    </form>
    <a href="{{route('posts.index')}}">Voltar a Litagem</a>
</div>
@endsection
