@extends('layouts.app')
@section('title','Listado de Bautizos')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('/img/fondo.jpg');">
</div>

<div class="main main-raised">
<div class="container">
    <div class="section text-center">
        <h2 class="title ">Listado de Personas Bautizadas</h2>

        <div class="team">
            <div class="row">
                <a href="{{ route('bautizo.create') }}" class="btn btn-primary">Nuevo Registro</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Folio</th>
                            <th class="text-center">Acta</th>
                            <th class="text-center">Libro</th>
                            <th class="text-center">Nombre</th>
                            
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bautizos as $bautizo)
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">{{$bautizo->folio}}</td>
                                <td class="text-center">{{$bautizo->acta}}</td>
                                <td class="text-center">{{$bautizo->no_libro}}</td>
                                <td class="text-right">{{$bautizo->nombre}}</td>
                                
                                <td class="td-actions text-right">
                                    <a href="{{route('bautizo.show',['id' => $bautizo->id])}}" rel="tooltip" title="Ver Datos" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="{{route('bautizo.edit',['id' => $bautizo->id])}}" rel="tooltip" title="Editar Datos" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('bautizo.destroy',['id' => $bautizo->id])}}" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$bautizos->links()}}
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