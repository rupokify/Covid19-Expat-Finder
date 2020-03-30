<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <style>
        #loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }
            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <link href="{{ asset('assets/style.css') }}" rel="stylesheet">
</head>

<body class="app">
<div id="loader">
    <div class="spinner"></div>
</div>
<script>
    window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
            loader.classList.add('fadeOut');
        }, 300);
    });
</script>
<div class="peers ai-s fxw-nw h-100vh">
    <div class="d-n@sm- peer peer-greed h-100 pos-r bgr-n bgpX-c bgpY-c bgsz-cv" style="background-image:url({{ url('assets/static/images/bg.jpg') }})">
        <div class="pos-a centerXY">
            <div class="bgc-white bdrs-50p pos-r" style="width:120px;height:120px">
                <a href="{{ route('home') }}">
                    <img class="pos-a centerXY" src="{{ asset('assets/static/images/logo.png') }}" alt="{{ config('app.name') }}">
                </a>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4 peer pX-40 pY-80 h-100 bgc-white scrollable pos-r" style="min-width:320px">
        <h4 class="fw-300 c-grey-900 mB-40">Register to {{ config('app.name') }}</h4>

        @include('partials._message')

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="text-normal text-dark" for="full_name">Full Name</label>
                <input name="full_name" id="full_name" type="text" class="form-control" placeholder="Your Full Name" required>
            </div>

            <div class="form-group">
                <label class="text-normal text-dark" for="email">Email</label>
                <input name="email" id="email" type="email" class="form-control" placeholder="Your Email Address" required>
            </div>

            <div class="form-group">
                <label class="text-normal text-dark" for="location">Location</label>
                <input name="location" id="location" type="text" class="form-control" placeholder="Your Location" required>
            </div>

            <div class="form-group">
                <label class="text-normal text-dark" for="password">Password</label>
                <input name="password" id="password" type="password" class="form-control" placeholder="Password" required>
            </div>

            <div class="form-group">
                <div class="peers ai-c jc-sb fxw-nw">
                    <div class="peer">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('assets/vendor.js') }}"></script>
<script src="{{ asset('assets/bundle.js') }}"></script>
</body>
</html>
