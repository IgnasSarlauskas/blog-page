@extends('layouts.app')
    @section('content')
    
    

        <!-- Page Header -->
        <header class="masthead" style="background-image: url('img/home-bg.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                <h2>Edit Post</h1>
                
                </div>
            </div>
            </div>
        </div>
        </header>
        @section('content')
        <!-- Main Content -->
        <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                <div class="form-group">
                    {{Form::label('title','Title')}}
                    {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                </div>
        
                <div class="form-group">
                        {{Form::label('body','Body')}}
                        {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                </div>

                <div class="form-group">
                    {{Form::file('cover_image')}}
                </div> 

                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Submit', ['class' => 'btn btn-default'])}}
                
                {!! Form::close() !!}
            </div>
        </div>
        </div>
            
    @endsection