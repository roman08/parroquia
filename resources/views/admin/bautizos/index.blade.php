@extends('layouts.app')
@section('title','Listado de Bautizos')
@section('body-class','product-page')
@section('styles')
    <style>
                .tt-query {
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
             -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
          color: #999
        }

        .tt-menu {    /* used to be tt-dropdown-menu in older versions */
          width: 222px;
          margin-top: 4px;
          padding: 4px 0;
          background-color: #fff;
          border: 1px solid #ccc;
          border: 1px solid rgba(0, 0, 0, 0.2);
          -webkit-border-radius: 4px;
             -moz-border-radius: 4px;
                  border-radius: 4px;
          -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
             -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                  box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .tt-suggestion {
          padding: 3px 20px;
          line-height: 24px;
        }

        .tt-suggestion.tt-cursor,.tt-suggestion:hover {
          color: #fff;
          background-color: #0097cf;

        }

        .tt-suggestion p {
          margin: 0;
        }

    </style>
@endsection
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
                <h4 class="title">Buscar persona</h4>
                <form action="{{ route('bautizo.search') }}" method="get" class="form-inline">
                    <input type="text" placeholder="¿Que persona buscas?" class="form-control" name="query" id="search">
                    <button class="btn btn-primary btn-just-icon" type="submit">
                        <i class="material-icons">search</i>
                    </button>
                </form>
                <table class="table" id="bautizo">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Folio</th>
                            <th class="text-center">Acta</th>
                            <th class="text-center">Libro</th>
                            <th class="text-center">Nombre</th>
                            
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($bautizos as $bautizo)
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">{{$bautizo->folio}}</td>
                                <td class="text-center">{{$bautizo->acta}}</td>
                                <td class="text-center">{{$bautizo->no_libro}}</td>
                                <td class="text-center">{{$bautizo->nombre}}</td>
                                
                                <td class="td-actions text-center">
                                    <a href="{{route('bautizo.show',['id' => $bautizo->id])}}" rel="tooltip" title="Ver Datos" class="btn btn-info btn-simple btn-xs">
                                        <i class="fa fa-user"></i>
                                    </a>
                                    <a href="{{route('bautizo.edit',['id' => $bautizo->id])}}" rel="tooltip" title="Editar Datos" class="btn btn-success btn-simple btn-xs">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{route('bautizo.destroy',['id' => $bautizo->id])}}" rel="tooltip" title="Eliminar" class="btn btn-danger btn-simple btn-xs">
                                        <i class="fa fa-times"></i>
                                    </a>
                                    <a href="{{route('bautizo.pdf',['id' => $bautizo->id])}}" rel="tooltip" title="Imprimir acta" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-print"></i>
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
@section('scripts')
        <script src="{{asset('/js/typeahead.bundle.min.js')}}"></script>

        <script>
        // constructs the suggestion engine
        var personas = new Bloodhound({
          datumTokenizer: Bloodhound.tokenizers.whitespace,
          queryTokenizer: Bloodhound.tokenizers.whitespace,
          // `states` is an array of state names defined in "The Basics"
          prefetch: '{{route("personas.json")}}'
        });

        $(function(){
            $('#search').typeahead({
                hint:true,
                highlight:true,
                minLength:1
            },{
                name:'personas',
                source: personas
            })
        });
    </script>

@endsection