@extends('layout.app')

@section('css')
    <style>
        .xfera-container {
            margin-left: 200px;
            margin-right: 200px;
        }
        .teste {
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height: 100%; /* Garante que a div ocupe toda a altura da div parallax */
        }
        .full-xfera {
            height: 100vh !important;
        }

        .xfera-navbar {
            margin-left: 100px;
            margin-right: 100px;
        }

        .bg-xfera {
            background: rgb(58,82,32);
            background: linear-gradient(0deg, rgba(58,82,32,1) 0%, rgba(125,169,75,1) 100%);
        }

        .xfera-presentation-title {
            font-size: 8em;
            font-weight: 700;
            margin: 0;
            color: #fff;
            background: #fbf8ec;
            background: linear-gradient(180deg,#fff 95%,#4e6773);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .xfera-presentation-subtitle {
            font-size: 1.7em;
            color: #fff
        }
    </style>
@stop

@section('content')
    @include('components.home')

    <div class="section section-gray section-clients">
        <div class="container text-center">
            <h4 class="header-text">Sobre a XFera Tech</h4>
            <p>
                A XFera Tech é uma empresa de tecnologia fundada em 2023. Nosso foco é o desenvolvimento de plataformas para eventos acadêmicos e ensino EAD. Oferecemos soluções inovadoras e personalizadas que ajudam nossos clientes a alcançar seus objetivos.
            </p>
            <div class="logos">
                <ul class="list-unstyled">
                    <li ><img src="{{ asset('img/logos/adobe.png') }}"/></li>
                    <li ><img src="{{ asset('img/logos/zendesk.png') }}"/></li>
                    <li ><img src="{{ asset('img/logos/ebay.png') }}"/></li>
                    <li ><img src="{{ asset('img/logos/evernote.png') }}"/></li>
                    <li ><img src="{{ asset('img/logos/airbnb.png') }}"/></li>
                    <li ><img src="{{ asset('img/logos/zappos.png') }}"/></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section section-presentation">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="description">
                        <h4 class="header-text">Nossos produtos</h4>
                        <p>And your app is also probably social, awesome, easy-to-use and vital to users. This is the place to enlist all the good things that your app has to share. Focus on the benefits that the uers will receive. Try to combine imaginery with text and show meaningful printscreens from your app, that will make it clear what exactly the basic functions are. </p>
                        <p>Try to make it very clear for the people browsing the page that this product will enrich their life and will make a nice addition to the homescreen.
                        <p>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1 hidden-xs">
                    <img src="{{ asset('img/template/mac.png') }}"/>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-demo">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="description-carousel" class="carousel fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item">
                                <img src="{{ asset('img/template/examples/home_33.jpg') }}" alt="">
                            </div>
                            <div class="item active">
                                <img src="{{ asset('img/template/examples/home_22.jpg') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('img/template/examples/home_11.jpg') }}" alt="">
                            </div>
                        </div>
                        <ol class="carousel-indicators carousel-indicators-blue">
                            <li data-target="#description-carousel" data-slide-to="0" class=""></li>
                            <li data-target="#description-carousel" data-slide-to="1" class="active"></li>
                            <li data-target="#description-carousel" data-slide-to="2" class=""></li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <h4 class="header-text">Multiplataforma</h4>
                    <p>
                        With all the apps that users love! Make it easy for users to share, like, post and tweet their favourite things from the app. Be sure to let users know they continue to remain connected while using your app!
                    </p>
                    <a href="http://www.creative-tim.com/product/awesome-landing-page" id="Demo3" class="btn btn-fill btn-info" data-button="info">Get Free Demo</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-features">
        <div class="xfera-container">
            <h4 class="header-text text-center">Features</h4>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-note2"></i>
                        </div>
                        <div class="text">
                            <h4>Ambiente Virtual de Aprendizagem</h4>
                            <p>All appointments sync with your Google calendar so your availability is always up to date. See your schedule at a glance from any device.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-bell"></i>
                        </div>
                        <h4>Plataforma de Eventos</h4>
                        <p>Automatic text and email reminders make sure customers always remember their upcoming appointments.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blue">
                        <div class="icon">
                            <i class="pe-7s-graph1"></i>
                        </div>
                        <h4>Sistemas Personalizados</h4>
                        <p>Take payments and run your business on the go, in your store and then see how it all adds up with analytics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section section-testimonial">
        <div class="container">
            <h4 class="header-text text-center">Nossos clientes</h4>
            <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item">
                        <div class="mask">
                            <img src="{{ asset('img/faces/face-4.jpg') }}">
                        </div>
                        <div class="carousel-testimonial-caption">
                            <p>Jay Z, Producer</p>
                            <h3>"I absolutely love your app! It's truly amazing and looks awesome!"</h3>
                        </div>
                    </div>
                    <div class="item active">
                        <div class="mask">
                            <img src="{{ asset('img/faces/face-3.jpg') }}">
                        </div>
                        <div class="carousel-testimonial-caption">
                            <p>Drake, Artist</p>
                            <h3>"This is one of the most awesome apps I've ever seen! Wish you luck Creative Tim!"</h3>
                        </div>
                    </div>
                    <div class="item">
                        <div class="mask">
                            <img src="{{ asset('img/faces/face-2.jpg') }}">
                        </div>
                        <div class="carousel-testimonial-caption">
                            <p>Rick Ross, Musician</p>
                            <h3>"Loving this! Just picked it up the other day. Thank you for the work you put into this."</h3>
                        </div>
                    </div>
                </div>
                <ol class="carousel-indicators carousel-indicators-blue">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="section section-no-padding">
        <div class="parallax filter-gradient blue" data-color="blue">
            <div class="parallax-background">
                <img class ="parallax-background-image" src="{{ asset('img/template/bg3.jpg') }}"/>
            </div>
            <div class="info">
                <h1>Nossa Equipe</h1>
                <p>Beautiful multipurpose bootstrap landing page.</p>
            </div>
        </div>
    </div>
    <div class="section section-no-padding">
        <div class="parallax filter-gradient blue" data-color="blue">
            <div class="parallax-background">
            </div>
            <div class="info">
                <h1>Contato</h1>
                <p>Beautiful multipurpose bootstrap landing page.</p>
            </div>
        </div>
    </div>
@endsection
