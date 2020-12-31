@extends('adminlte::page')

@section('title', 'Admin - Posts')


@section('content_header')
<h1>
    Posts
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create-post">
        Crear
    </button>
</h1>
@stop

@section('content')
                <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Listado de posts</h3>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="posts" class="table table-bordered table-striped" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cat.</th>
                            <th>Título</th>
                            <th>Imagen</th>
                            <th>Contenido</th>
                            <th>Autor</th>
                            <th>Acciones</th>
                            
                        </tr>
                    </thead>
                    <tbody >
                        @foreach ($posts as $post)
                        <tr >
                            <td>{{$post->id}}</td>
                            <td>{{$post->category_id}}</td>
                            <td>{{$post->title}}</td>
                           <td><img src="{{asset('https://karinadavidovich.s3-sa-east-1.amazonaws.com/images/posts/'.$post->featured)}}" class="img-fluid img-rounded" width="120px" alt="">
                            </td>
                            <td >{{$post->content}}</td>
                             <td>{{$post->author}}</td>
                            <td>
                                <button type="button" class="btn btn-warning"  data-toggle="modal" data-target="#modal-update-post-{{$post->id}}">Editar</button>
                                <form action="{{route('admin.posts.delete', $post->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    @method('DELETE')
                                <button class="btn btn-danger">Eliminar</button>
                                </form>
                                
                            </td>
                        </tr>

                        @include('admin.posts.modal-update-post')
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                             <th>ID</th>
                            <th>Cat.</th>
                            <th>Título</th>
                            <th>Imagen</th>       
                            <th>Contenido</th>
                            <th>Autor</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>

<!-- modal create-->
<div class="modal fade" id="modal-create-post">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Crear Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
           
         <form action="{{route('admin.posts.store')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="modal-body">
                    <div class="form-group">
                        <label for="title" class="col-form-label">Título:</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="category_id">Categoria</label>
                        <select class="form-control" id="category_id" name="category_id">
                          <option value="">--Elegir Categoria--</option>
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                        </select>
                      </div>


                    <div class="form-group">
                        <label for="content" class="col-form-label">Contenido:</label>
                        <textarea class="form-control" name="content" id="content"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured" class="col-form-label">Imagen:</label>
                        <input type="file" class="form-control" name="featured" id="featured">
                    </div>
                      <div class="form-group">
                        <label for="author" class="col-form-label">Autor:</label>
                        <input type="author" class="form-control" name="author" id="author">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


 @stop

@section('js')
<script>
$(document).ready(function() {
    $('#posts').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} );
</script>
@stop