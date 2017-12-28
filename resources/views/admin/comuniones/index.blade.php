@extends('layouts.app')
@section('title','Listado de Comuniones')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('/img/fondo.jpg');">
</div>

<div class="main main-raised">
<div class="container">
    <div class="section text-center">
        <h2 class="title ">Listado de Comuniones</h2>

        <div class="team">
            <div class="row">
                <a href="{{ route('comunion.create') }}" class="btn btn-primary">Nuevo Registro</a>
                <table class="table" id="comuniones">
                    <thead>
                        <tr>
                            <th >#</th>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Fecha de Comunión</th>
                            
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comuniones as $comunion )
                            <tr>
                                <td >1</td>
                                <td>{{$comunion->folio}}</td>
                                <td>{{$comunion->nombres}}</td>
                                <td>{{$comunion->fecha_bautizo}}</td>
                                
                                <td class="td-actions text-right">
                                    <button type="button" rel="tooltip" title="Ver Datos" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-user"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Editar Datos" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>

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