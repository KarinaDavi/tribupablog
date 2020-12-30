@extends('layouts.layout')
    
@section('content')
    <!-- Contenido -->
    <section class="container-fluid content">
        <!-- Categorías 
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                @foreach ($categories as $category)
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline selected-category" >
                    <a href="#" class="mx-3 pb-3 link-category d-block d-md-inline" >{{$category->name}}</a>
                @endforeach
                </nav>
            </div>
        </div>
-->
        <!-- Posts -->
        <div class="row justify-content-center py-5" >
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                   @foreach ($posts as $post)
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                             <img alt=""  src="{{asset('images/posts/'.$post->featured)}}" class="img-fluid" alt="{{$post->title}}">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría:{{$post->category_id}} </small>
                                <h5 class="card-title my-2">{{$post->title}}</h5>
                                <div class="d-card-text" style="width: 230px; text-overflow: ellipsis; white-space: nowrap;
overflow: hidden;">
                                   {{$post->content}}
                                </div>
                                <a href="{{Route('show', $post->id)}}" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">{{$post->author}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
     <!-- Post 1 -->
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>

 @endsection