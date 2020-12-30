 <!-- modal update -->
                            <div class="modal fade" id="modal-update-post-{{$post->id}}">
                                <div class="modal-dialog">
                                    <div class="modal-content bg-default">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Modificar Post</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                        </div>
                                       
                                       <form action="{{route('admin.posts.update', $post->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="title">Titulo</label>
                                                <input type="text" name="title" id="post" class="form-control" value="{{$post->title}}">
                                            </div>

                                            <div class="form-group">
                                            <label for="category_id">Categoria</label>
                                            <select class="form-control" id="category_id" name="category_id" value="{{$post->category_id}}">
                                            <option value="">--Elegir Categoria--</option>
                          @foreach ($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="content" class="col-form-label">Contenido:</label>
                                    <textarea class="form-control" name="content" id="content">{{$post->content}}</textarea>
                                         </div>
                                           <div class="form-group">
                                            <label for="featured" class="col-form-label">Imagen:</label> <br>
                                            <img src="{{asset('images/posts/'. $post->featured)}}" class="img-fluid img-rounded mb-3" width="120px">
                                            <input type="file" class="form-control" name="featured" id="featured">
                                        </div>
                                          <div class="form-group">
                                            <label for="author" class="col-form-label">Autor:</label>
                                            <input type="author" class="form-control" name="author" id="author" value="{{$post->author}}">
                                        </div>


                                        </div>
                                        
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-outline-primary">Guardar</button>
                                        </div>
                                        </form>
                                    </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->
                       
        