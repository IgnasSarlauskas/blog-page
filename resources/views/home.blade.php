@extends('layouts.app')
    @section('content')
        <!-- Page Header -->
        <header class="masthead" style="background-image: url('img/home-bg.jpg')">
            <div class="overlay"></div>
            <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h2>Hello, {{ Auth::user()->name }} !</h1>
                        
                        <div class="panel-body">
                            <a href="/posts/create" class="btn btn-primary">Create New Post</a>
                        </div>
                </div>
                </div>
            </div>
            </div>
        </header>

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h1>Your blog posts:</h1></div>
                    @if(count($posts) > 0)
                        <div class="container">
                            {{-- <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr> --}}
                            @foreach($posts as $post)
                                {{-- <tr>
                                    <td>{{$post->title}}</td>
                                </tr>
                                <tr>    
                                    <td>
                                        <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                     <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td> 
                                </tr> --}}
                                <div class="card">
                                        
                                        
                                        <h2>{{$post->title}}</h2>
                                        <hr>
                                        <div class="card-body">
                                          {{-- <h5 class="card-title">{{$post->title}}</h5> --}}
                                          <p class="card-text"></p>
                                          <a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>
                                            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </div>
                                </div>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
    @endsection
