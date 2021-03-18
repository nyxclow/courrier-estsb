<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('admin/plugins/toastr/app.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-dark" role="button">Login</a>

                       <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary" role="button">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Est-sb Courrier
                </div>
            </div>
        </div>
                <footer>
            <div class="container-fluid p-0">
              <div class="row text-left">
                <div class="col-md-5 col-sm-5">
                  <h4 class="text">A propos de nous </h4>
                  
                  <p class="pt-4 text-muted">Copyright ©2021 All rights reserved | ce site est crée par:
                    <span> Dbilij Anas & Koussaimi MohammedAmmine</span>
                  </p>
                </div>
                <div class="col-md-5 col-sm-12">
                  <h4 class="text">Boite de Communivation</h4>
                  <p class="text-muted">contacter nous</p>
                  <form class="form-inline">
                    <div class="col pl-0">
                      <div class="input-group pr-5">
                        <input type="text" class="form-control bg-dark text-white" id="inlineFormInputGroupUsername2" placeholder="Email">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <i class="fas fa-arrow-right"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-2 col-sm-12">
                  <h4 class="text">Reseau sociaux</h4>
                  
                  <div class="column text-light">
                    <a href="https://facebook.com/nyxclow" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/nyxclow" class="fa fa-twitter"></a>
                    <a href="https://instagram.com/notanasdbilij" class="fa fa-instagram"></a>
            

                  </div>
                </div>
              </div>
            </div>
          </footer>


    </body>
</html>
