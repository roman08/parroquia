@extends('layouts.app')
@section('title','Listado de Bautizos')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
<div class="container">
    <div class="section ">
        <h2 class="title text-center">Nuevo Registro</h2>

               <form action="{{ route('comunion.store') }}" method="post">
                {{csrf_field()}}
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group label-floating has-success">
                                <label class="control-label">Folio</label>
                                <input type="text" value="" class="form-control" name="folio" />
                                <span class="form-control-feedback">
                                    <i class="material-icons">done</i>
                                </span>
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group has-success">
                                <label class="control-label">Fecha de Comunión</label>
                                <input class="datepicker form-control" name="fecha_bautizo" id="fecha" type="text" value=""/>
                            </div>
                        </div>
                        
                   </div>
                   <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group label-floating has-success">
                                <label class="control-label">Apellido Paterno</label>
                                <input type="text" value="" class="form-control" name="Apaterno" />
                                <span class="form-control-feedback">
                                    <i class="material-icons">done</i>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group label-floating has-success">
                                <label class="control-label">Apellido Materno</label>
                                <input type="text" value="" class="form-control" name="Amaterno" />
                                <span class="form-control-feedback">
                                    <i class="material-icons">done</i>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group label-floating has-success">
                                <label class="control-label">Nombre(s)</label>
                                <input type="text" value="" class="form-control" name="nombres" />
                                <span class="form-control-feedback">
                                    <i class="material-icons">done</i>
                                </span>
                            </div>
                        </div>
                   </div>
                   <div class="row">
                       <div class="col-sm-6">
                            <div class="form-group label-floating has-success">
                                <label class="control-label">Padre</label>
                                <input type="text" value="" class="form-control" name="padre" />
                                <span class="form-control-feedback">
                                    <i class="material-icons">done</i>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group label-floating has-success">
                                <label class="control-label">Madre</label>
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

                        <div class="col-sm-4">
                            <div class="form-group label-floating has-success">
                                <label class="control-label">Parroco</label>
                                <input type="text" value="" class="form-control" name="parroco" />
                                <span class="form-control-feedback">
                                    <i class="material-icons">done</i>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group label-floating has-success">
                                <label class="control-label">Lugar de Bautizo</label>
                                <input type="text" value="" class="form-control" name="madrina" />
                                <span class="form-control-feedback">
                                    <i class="material-icons">done</i>
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group has-success">
                                <label class="control-label">Fecha de Bautizo</label>
                                <input class="datepicker form-control" name="fecha_bautizo" id="fecha_bautizo_comunion" type="text" value=""/>
                            </div>
                        </div>
                   </div>
                    <a href="javascript:window.history.back();" class="btn btn-danger" type="submit">Regresar</a>
                    <button class="btn btn-default" type="submit">Guardar Registro</button>
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