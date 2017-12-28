@extends('layouts.app')

@section('body-class','landing-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
<div class="container">
<div class="row">
    <div class="col-md-6">
        <h1 class="title">Parroquia San Francisco de Asís.</h1>
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore iure a recusandae, cumque quo officiis sapiente repudiandae sed cum. Tempore ut nam sit, debitis nobis consequuntur voluptatibus dicta accusantium, odit.</h4>

    </div>
</div>
</div>
</div>

<div class="main main-raised">
<div class="container">
<div class="section text-center section-landing">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="title">Servicios</h2>
            <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
        </div>
    </div>

    <div class="features">
        <div class="row">
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-primary">
                        <i class="material-icons">chat</i>
                    </div>
                    <h5 class="info-title"><a href="#">Bautizo</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quasi tenetur similique blanditiis voluptas sed nesciunt aliquam necessitatibus dolorem! Aut nisi blanditiis quia, atque sapiente labore? Eligendi, possimus placeat vero?</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-success">
                        <i class="material-icons">verified_user</i>
                    </div>
                    <h5 class="info-title"><a href="#">Comunión</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique dignissimos ducimus, magnam sit dolorem dolores maxime fuga, neque eum voluptas suscipit facere ut distinctio earum, soluta quo voluptatum blanditiis delectus!</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-danger">
                        <i class="material-icons">fingerprint</i>
                    </div>
                    <h5 class="info-title"><a href="#">Confirmación</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dignissimos eum nesciunt est laudantium, obcaecati ipsa ut sint esse at eaque quas! Ad quae at voluptate tempore nam, consequuntur tempora.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info">
                    <div class="icon icon-danger">
                        <i class="material-icons">fingerprint</i>
                    </div>
                    <h5 class="info-title"><a href="#">Matrimonio</a></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente reiciendis aliquid similique sunt dolore totam soluta tenetur, ut nulla iusto dolores itaque deserunt numquam, distinctio ipsum minus ab ex, hic!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section text-center">
    <h2 class="title">Sacerdotes</h2>

    <div class="team">
        <div class="row">
            <div class="col-md-4">
                <div class="team-player">
                    <img src="{{asset('/img/avatar.jpg')}}" alt="Thumbnail Image" class="img-raised img-circle">
                    <h4 class="title">Gigi Hadid <br />
                        <small class="text-muted">Model</small>
                    </h4>
                    <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-player">
                    <img src="{{asset('/img/christian.jpg')}}" alt="Thumbnail Image" class="img-raised img-circle">
                    <h4 class="title">Christian Louboutin<br />
                        <small class="text-muted">Designer</small>
                    </h4>
                    <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="team-player">
                    <img src="{{asset('/img/kendall.jpg')}}" alt="Thumbnail Image" class="img-raised img-circle">
                    <h4 class="title">Kendall Jenner<br />
                        <small class="text-muted">Model</small>
                    </h4>
                    <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                    <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

</div>


<d iv class="section landing-section">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center title">Contactanos</h2>
            <h4 class="text-center description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor sequi vitae nam, aliquid neque aperiam. Provident harum tempore debitis voluptatum repellat eos totam laudantium sint ipsa, itaque similique, omnis fugiat.</h4>
            <form class="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Tu Nombre</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group label-floating">
                            <label class="control-label">Tu Correo</label>
                            <input type="email" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Tu Mensaje</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <button class="btn btn-primary btn-raised">
                            Enviar mensaje
                        </button>
                    </div>
                </div>
            </form>
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