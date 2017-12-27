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

               <form action="{{ route('store') }}">
                {{csrf_field()}}
                   <div class="col-sm-4">
                        <div class="form-group label-floating">
                            <label class="control-label">Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group label-floating has-success">
                            <label class="control-label">Fecha actual</label>
                            <input class="datepicker form-control" type="text" value="03/12/2016"/>
                            <span class="form-control-feedback">
                                <i class="material-icons">done</i>
                            </span>
                        </div>
                    </div>
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