@extends('layouts.app')
@section('title','Listado de Bautizos')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('/img/fondo.jpg');">
</div>

<div class="main main-raised">
<div class="container">
    <div class="section ">
        <h2 class="title text-center">Editar Registro de Bautizo</h2>

               <form action="{{ route('bautizo.update',['id' => $bautizo->id]) }}" method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Folio</label>
                            <input type="text" value="{{$bautizo->folio}}" class="form-control"  disabled name="folio" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">No. de Libro</label>
                            <input type="text" value="{{$bautizo->no_libro}}" class="form-control"  disabled name="no_libro" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Decanato</label>
                            <input type="text" value="{{$bautizo->decanato}}" class="form-control"  disabled name="decanato" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">No. de Acta</label>
                            <input type="text" value="{{$bautizo->acta}}" class="form-control"  disabled name="acta"  />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Fecha de bautizo</label>
                            <input class="datepicker form-control"  disabled name="fecha_bautizo" id="fecha_bautizo" type="text" value="{{$bautizo->fecha_bautizo}}"/>
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Nombre del Bautizado</label>
                            <input type="text" value="{{$bautizo->nombre}}" class="form-control"  disabled name="nombre" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Fecha de Nacimiento</label>
                            <input class="datepicker form-control"  disabled name="fecha_nacimiento" id="fecha_nacimiento" type="text" value="{{$bautizo->fecha_nacimiento}}"/>
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Papa</label>
                            <input type="text" value="{{$bautizo->padre}}" class="form-control"  disabled name="padre" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Mama</label>
                            <input type="text" value="{{$bautizo->madre}}" class="form-control"  disabled name="madre" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Padrino</label>
                            <input type="text" value="{{$bautizo->padrino}}" class="form-control"  disabled name="padrino" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group label-floating has-error">
                            <label class="control-label">Madrina</label>
                            <input type="text" value="{{$bautizo->madrina}}" class="form-control"  disabled name="madrina" />
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group label-floating has-error">
                        <label class="control-label">Lugar de nacimiento</label>
                        <input type="text" value="{{$bautizo->lugar_nacimiento}}" class="form-control"  disabled name="lugar_nacimiento" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group label-floating has-error">
                        <label class="control-label">Parroco</label>
                        <input type="text" value="{{$bautizo->parroco}}" class="form-control"  disabled name="parroco" />
                        <span class="form-control-feedback">
                            <i class="material-icons">done</i>
                        </span>
                    </div>
                </div>
            </div>
            <a href="javascript:window.history.back();" class="btn btn-danger" type="submit">Regresar</a>
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