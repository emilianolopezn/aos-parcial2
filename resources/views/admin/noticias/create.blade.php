@extends("layouts.admin")
@section("titulo", "Nueva noticia")
@section("contenido_principal")
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Noticias</h1>
              <a href="{{ route("admin.noticias.index") }}">Volver a lista de noticias</a>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Noticias</a></li>
                <li class="breadcrumb-item active">Crear noticia</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
  
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Crear noticia</h3>
  
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route("admin.noticias.store") }}">
                @csrf
                <div class="form-group">
                    <label>Título:</label>
                    <input class="form-control" name="titulo" type="text" required>
                </div>
                <div class="form-group">
                    <label>Fecha:</label>
                    <input class="form-control" name="fecha" type="date">
                </div>
                <div class="form-group">
                    <label>Autor:</label>
                    <input class="form-control" name="autor" type="text">
                </div>
                <div class="form-group">
                    <label>Cuerpo:</label>
                    <textarea class="form-control" rows="5" name="cuerpo"></textarea>
                </div>
                <div class="form-group">
                    <label>Foto:</label>
                    <input class="form-control" name="foto" type="text">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Agregar nueva noticia</button>
                </div>
            </form>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Pie de creación de noticia
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->
  
      </section>
      <!-- /.content -->
@endsection