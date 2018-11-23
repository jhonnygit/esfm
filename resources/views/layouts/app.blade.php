<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ESFM</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <!-- iconos -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- BOOSTRAR 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- FIN -->

    <link rel="stylesheet" href="{{asset('css/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('css/flipclock.css')}}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
        <div class="container">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#app-navbar-collapse" aria-controls="app-navbar-collapse" aria-expanded="false" aria-label="Menu">
             <i class="fal fa-bars"></i> 
            </button>

                <!-- Branding Image -->
                <a href="{{ url('/') }}" class="navbar-brand">
                    <i class="fas fa-home"></i> Inicio
                </a>
           

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a href="{{url('/profesores/')}}" class="nav-link">Docentes</a>
                    </li>

                    <li class="nav-item">
                        <a href="{{url('/noticias/')}}" class="nav-link">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{url('/estudios/')}}" class="nav-link">Estudios Universitarios</a>
                    </li>


                    @can('admin')
                    <li class="btn-group nav-item">
                        <a href="{{ url('/home') }}" class="nav-link dropdown-toggle" id="menu-categorias"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modulos <span class="caret"></span></a>
                        <div class="dropdown-menu" id="manager-menu" arialabelledby="menu-categorias">
                            <a href="{{action('CategoryController@getIndex')}}" class="dropdown-item">
                               <span class="glyphicon glyphicon-cog"></span>Manager Category
                            </a>
                            <a href="{{action('CategoryController@getNew')}}" class="dropdown-item">
                             <span class="glyphicon glyphicon-plus"></span>Add Category
                            </a>
                            <a href="{{/*action('SubjectController@getIndex')*/route('admin.subject.index')}}" class="dropdown-item">
                               <span class="glyphicon glyphicon-cog"></span> Manage Subjects</a>
                            <a href="{{route('subject.new')/*action('SubjectController@getNew')*/}}" class="dropdown-item">
                             <span class="glyphicon glyphicon-plus"></span>Add Subjects
                            </a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="{{action('UserController@getIndex')}}" class="nav-link">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('subjects.results')}}" class="nav-link">Exams Results</a>
                    </li>

                    @endcan
                    @can('guest')
                    <!--li>
                        <a href="{{action('SubjectController@getStartTest',1)}}">Start Test</a>
                    </li-->
                    <li class="btn-group nav-item">
                        <a href="{{ url('/home') }}" class="nav-link dropdown-toggle" id="menu-categorias2"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Elija los examenes</a>
                        <div class="dropdown-menu" arialabelledby="menu-categorias2">

                            @foreach(App\Subject::all() as $cat)
                                @if($cat->hasQuestions() && $cat->isExamined())
                                 <a href="{{action('SubjectController@getBeforeStartTest',$cat->id)}}" class="dropdown-item">{{$cat->name}}</a>
                                @endif
                            @endforeach
                        </div>
                    </li>

                    @endcan
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                        <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link">Register</a></li>
                    @else
                        <li class="btn-group nav-item">
                            <a href="#" class="nav-link dropdown-toggle" id="menu-user" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu" arialabelledby="menu-user" >
                                <a href="{{ url('/logout') }}" class="dropdown-item"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                            </div>
                        </li>
                    @endif
                </ul>

                <form action="" class="form-inline">
                    <input type="text" class="form-control mr-2" placeholder="Buscar">
                    <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container">        
                @yield('content') 
         <!-- footer -->
        <footer class="row">

        <div class="col">
            <h1 >
            Sitios
            </h1>
            <ul ul_attributes="nav-group nav-group--top-bar" display_stickynav="yes" class="list-clean">
                <li class="menu-449 first"><a href="http://www.accessibility.harvard.edu/" title="Accessibility@0">Accessibility</a></li>
                <li class="menu-683 last"><a href="/sitemap" title="Sitemap@0">Sitemap</a></li>
            </ul> 
        </div>

        <div class="col">
            <h2 class="footer__heading txt-h5">
            Entrar en contacto
            </h2>
            <ul ul_attributes="nav-group nav-group--top-bar" display_stickynav="yes" class="list-clean"><li class="menu-660 first"><a href="/contact-harvard" title="Contact@2">Contact Harvard</a></li>
            <li class="menu-2078"><a href="/about-harvard/maps-directions" title="">Maps &amp; Directions</a></li>
            <li class="menu-2383"><a href="http://hr.harvard.edu/jobs" title="">Jobs</a></li>
            <li class="menu-2384 last"><a href="/about-harvard/social-media-and-newsletter-directory" title="">Social Media</a></li>
            </ul>
        </div>

        <div class="col">
            <h4 class="footer__heading txt-h5 is-visually-hidden">
            Medio Sociales 
            </h4>
            <ul class="list-social-links list-clean">
                <li>
                <a href="http://facebook.com/harvard" class="social-link social-link--facebook">
                <span class="is-visually-hidden">
                Facebook
                </span>
                </a>
                </li>

                <li>
                <a href="http://twitter.com/harvard" class="social-link social-link--twitter">
                <span class="is-visually-hidden">
                Twitter
                </span>
                </a>
                </li>

                <li>
                <a href="http://www.instagram.com/harvard" class="social-link social-link--instagram">
                <span class="is-visually-hidden">
                Instagram
                </span>
                </a>
                </li>


                <li>
                <a href="http://plus.google.com/+harvard" class="social-link social-link--google-plus">
                <span class="is-visually-hidden">
                Google 
                </span>
                </a>
                </li>

            </ul>

        </div>
        <div class="col">
            <p class="footer__outro">
             © 2018 Escuela de formacion de maestros "Simon Bolivar"
            </p>
            <lu>
                <li>
                 <a href="http://plus.google.com/+harvard" class="social-link social-link--google-plus">
                  <span class="is-visually-hidden">
                Desarrollador 
                </span>
                </a>
                </li>
            </lu>


        </div>
    
        </footer>        
    </div>



    <!-- Jquerry -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- find -->

    <!-- boostrar js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- fin -->

    <script type="text/javascript" src="{{asset('js/flipclock.min.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    <script>

        $('div.alert-success').delay(3000).slideUp(400);

        $(function(){
        $('a#btn-delete').on('click', function(e){
            e.preventDefault();
            e.stopPropagation();
            var $a = this;

            swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this category!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#DD6B55',
                        confirmButtonText: 'Yes, delete it!',
                        closeOnConfirm: false
                    },
                    function(){
                        //console.log($($a).attr('href'));
                        document.location.href=$($a).attr('href');
                    });
        });
        });

        $('#add-new-question').hide();
        $('#btn-add-new-question').on('click', function(){
            $('#add-new-question').slideDown();
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });
        @yield('script_clock')
        @yield('script_form')
    </script>
</body>
</html>
