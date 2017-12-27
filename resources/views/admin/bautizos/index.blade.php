@extends('layouts.app')
@section('title','Listado de Bautizos')
@section('body-class','product-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
</div>

<div class="main main-raised">
<div class="container">
    <div class="section">
        <h2 class="title">Listado de personas</h2>

        <div class="team">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th >#</th>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Fecha Nacimiento</th>
                            
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >1</td>
                            <td>Andrew Mike</td>
                            <td>Develop</td>
                            <td>2013</td>
                            
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
                        <tr>
                            <td >2</td>
                            <td>John Doe</td>
                            <td>Design</td>
                            <td>2012</td>
                           
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
                        <tr>
                            <td>3</td>
                            <td>Alex Mike</td>
                            <td>Design</td>
                            <td>2010</td>
                            
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