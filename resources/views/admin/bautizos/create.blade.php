@extends('layouts.app')
@section('title','Listado de Bautizos')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('/img/fondo.jpg');">
</div>

<div class="main main-raised">
<div class="container">
    <div class="section ">
        <h2 class="title text-center">Nuevo Registro</h2>

               <form action="{{ route('bautizo.store') }}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Folio</label>
                            <input type="text" value="" class="form-control" name="folio" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">No. de Libro</label>
                            <input type="text" value="" class="form-control" name="no_libro" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Decanato</label>
                            <input type="text" value="" class="form-control" name="decanato" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">No. de Acta</label>
                            <input type="text" value="" class="form-control" name="acta" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group has-success">
                            <label class="control-label">Fecha de bautizo</label>
                            <input class="datepicker form-control" name="fecha_bautizo" id="fecha_bautizo" type="text" value=""/>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Nombre del Bautizado</label>
                            <input type="text" value="" class="form-control" name="nombre" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group has-success">
                            <label class="control-label">Fecha de Nacimiento</label>
                            <input class="datepicker form-control" name="fecha_nacimiento" id="fecha_nacimiento" type="text" value=""/>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Papa</label>
                            <input type="text" value="" class="form-control" name="padre" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Mama</label>
                            <input type="text" value="" class="form-control" name="madre" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Padrino</label>
                            <input type="text" value="" class="form-control" name="padrino" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Madrina</label>
                            <input type="text" value="" class="form-control" name="madrina" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Lugar de nacimiento</label>
                        <input type="text" value="" class="form-control" name="lugar_nacimiento" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group label-floating has-success">
                        <label class="control-label">Parroco</label>
                        <input type="text" value="" class="form-control" name="parroco" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
            </div>
            <a class="btn btn-default" href="{{ route('bautizo.index')}}">Cancelar</a>
            <button class="btn btn-primary" type="submit">Guardar Registro</button>
               </form>



    </div>
</div>

</div>

<footer class="footer">
<div class="container">
<nav class="pull-left">
    <ul>
        <li>
            <a href="http://www.creative-tim.com">
                Creative Tim
            </a>
        </li>
        <li>
            <a href="http://presentation.creative-tim.com">
               About Us
            </a>
        </li>
        <li>
            <a href="http://blog.creative-tim.com">
               Blog
            </a>
        </li>
        <li>
            <a href="http://www.creative-tim.com/license">
                Licenses
            </a>
        </li>
    </ul>
</nav>
<div class="copyright pull-right">
    &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
</div>
</div>
</footer>
@endsection