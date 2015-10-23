@extends('layouts.master')
@section('title',$post->title)
@section('content')

        <!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg	-offset-2 col-md-10 col-md-offset-1">
            <div class="post-preview">
                <a href="">
                    <h2 class="post-title">
                        {{ $post->title }}
                    </h2>

                    <h3 class="post-subtitle">
                        {{ $post->content }}
                    </h3>
                </a>

                <p class="post-meta">Escrito por {{ $post->users->name }}
                    em {{ $post->created_at->format('d/m/Y H:m:s') }}</p>
            </div>
            <hr>
        </div>
    </div>
    {{--Comments--}}
    <div class="row">
        <div class="col-md-12">
            <div class="titleBox">
                <label>Comentarios:</label>
            </div>
            <div class="commentBox">

                <p class="taskDescription">Gostou do post? Comente abaixo</p>
            </div>
            <div class="actionBox">
                <ul class="commentList">
                    @foreach($comments as $comment)
                        <li>
                            <div class="commenterImage">
                                <img src="http://lorempixel.com/50/50/people/{{ rand(1,10) }}" />
                            </div>
                            <p>{{ $comment->users->name }}</p>
                            <div class="commentText">
                                <p class="">{{ $comment->comment }}</p> <span class="date sub-text">em {{ $comment->created_at->format('d/m/Y H:m:s') }}</span>

                            </div>
                        </li>
                    @endforeach
                </ul>
                <form class="form-inline" role="form">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="" />
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<hr>

@stop