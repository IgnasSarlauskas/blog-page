@extends('layouts.app')
    @section('content')

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('/storage/cover_images/{{$post->cover_image}}')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>{{$post->title}}</h1>
              <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
              <span class="meta">Written on
                <a href="#"></a>
                {{$post->created_at}} by {{$post->user['name']}}</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            
            <a href="/posts" class="btn btn-light"> << Go Back</a>
            
            @if(!Auth::guest())
              @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-light">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                    
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-light'])}}
                {!!Form::close()!!}
              @endif
            @endif

            <p>{!!$post->body!!}</p>

            
          </div>
        </div>
      </div>
      
    </article>


  @endsection

</html>
