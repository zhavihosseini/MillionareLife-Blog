<html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Norican&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>
<style>
    @font-face {
        font-family: Vazir;
        src: url('../public/font/Vazir.eot');
        src: url('../public/font/Vazir.eot?#iefix') format('../public/font/Vazir-opentype'),
        url('../font/Vazir.woff') format('woff'),
        url('../public/font/Vazir.ttf') format('truetype');
        font-style: normal;
    }
    @font-face {
        font-family: Vazir;
        src: url('../public/font/Vazir-Light.eot');
        src: url('../public/font/Vazir-Light.eot?#iefix') format('../public/font/Vazir-opentype'),
        url('../public/font/Vazir-Light.woff') format('woff'),
        url('../public/font/Vazir-Light.ttf') format('truetype');
        font-weight: 300;
    }
    @font-face {
        font-family: Yekan;
        src: url('../public/font/Yekan.eot');
        src: url('../public/font/Yekan.eot?#iefix') format('../public/font/Yekan-opentype'),
        url('../font/Yekan.woff') format('woff'),
        url('../public/font/Yekan.ttf') format('truetype');
        font-style: normal;
    }
    @font-face {
        font-family: 'MateSC-Regular';
    url('MateSC-Regular.ttf') format('truetype');
    }
    :root {
        --input-padding-x: 1.5rem;
        --input-padding-y: .75rem;
    }

    body {
        font-family: Vazir;
        background-color: #ffffff;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100%25' height='100%25' viewBox='0 0 1200 800'%3E%3Cdefs%3E%3CradialGradient id='a' cx='0' cy='800' r='800' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23e2fff3'/%3E%3Cstop offset='1' stop-color='%23e2fff3' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='b' cx='1200' cy='800' r='800' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%2380e6ff'/%3E%3Cstop offset='1' stop-color='%2380e6ff' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='c' cx='600' cy='0' r='600' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%2362e6f3'/%3E%3Cstop offset='1' stop-color='%2362e6f3' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='d' cx='600' cy='800' r='600' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23ffffff'/%3E%3Cstop offset='1' stop-color='%23ffffff' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='e' cx='0' cy='0' r='800' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%23c4ffe6'/%3E%3Cstop offset='1' stop-color='%23c4ffe6' stop-opacity='0'/%3E%3C/radialGradient%3E%3CradialGradient id='f' cx='1200' cy='0' r='800' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%230CF'/%3E%3Cstop offset='1' stop-color='%230CF' stop-opacity='0'/%3E%3C/radialGradient%3E%3C/defs%3E%3Crect fill='url(%23a)' width='1200' height='800'/%3E%3Crect fill='url(%23b)' width='1200' height='800'/%3E%3Crect fill='url(%23c)' width='1200' height='800'/%3E%3Crect fill='url(%23d)' width='1200' height='800'/%3E%3Crect fill='url(%23e)' width='1200' height='800'/%3E%3Crect fill='url(%23f)' width='1200' height='800'/%3E%3C/svg%3E");
        background-attachment: fixed;
        background-size: cover;
    }

    .card-signin {
        border: 0;
        box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card-signin .card-title {
        margin-bottom: 2rem;
        font-weight: 300;
        font-size: 1.5rem;
    }

    .card-signin .card-body {
        padding: 2rem;
    }

    .form-signin {
        width: 100%;
    }

    .form-signin .btn {
        font-size: 80%;
        letter-spacing: .1rem;
        font-weight: bold;
        padding: 1rem;
        transition: all 0.2s;
    }

    .form-label-group {
        position: relative;
        margin-bottom: 1rem;
    }

    .form-label-group input {
        height: auto;
    }

    .form-label-group input:focus {
        border: 1px solid dodgerblue;
        box-shadow: none;
    }
    .form-label-group>input,
    .form-label-group>label {
        padding: var(--input-padding-y) var(--input-padding-x);
    }

    .form-label-group>label {
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        width: 100%;
        margin-bottom: 0;
        /* Override default `<label>` margin */
        line-height: 1.5;
        color: #495057;
        border: 1px solid transparent;
        border-radius: .25rem;
        transition: all .1s ease-in-out;
    }

    .form-label-group input::-webkit-input-placeholder {
        color: transparent;
    }

    .form-label-group input:-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-ms-input-placeholder {
        color: transparent;
    }

    .form-label-group input::-moz-placeholder {
        color: transparent;
    }

    .form-label-group input::placeholder {
        color: transparent;
    }

    .form-label-group input:not(:placeholder-shown) {
        padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
        padding-bottom: calc(var(--input-padding-y) / 3);
    }

    .form-label-group input:not(:placeholder-shown)~label {
        padding-top: calc(var(--input-padding-y) / 3);
        padding-bottom: calc(var(--input-padding-y) / 3);
        font-size: 10px;
        color: #777;
        text-align: right;
    }

    .btn-google {
        color: white;
        background-color: #ea4335;
        width: 100%;
    }

    .btn-facebook {
        color: white;
        background-color: #3b5998;
    }

    /* Fallback for Edge
    -------------------------------------------------- */

    @supports (-ms-ime-align: auto) {
        .form-label-group>label {
            display: none;
        }
        .form-label-group input::-ms-input-placeholder {
            color: #777;
        }
    }
    #subid{
        width: 100%;
        border-radius: 0px;
        text-align: center;
        font-size: 16px;
        font-family: Yekan;
        font-weight: bold;
        background-color: #39a0ff;
        color: white;
    }
    #subidv{
        width: 100%;
        border-radius: 0px;
        text-align: center;
        font-size: 18px;
        font-family: Yekan;
        font-weight: bold;
        background-color: #9990ff;
        color: white;
    }
    /* Fallback for IE
    -------------------------------------------------- */

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
        .form-label-group>label {
            display: none;
        }
        .form-label-group input:-ms-input-placeholder {
            color: #777;
        }
    }
    ::-webkit-scrollbar {
        width: 10px;
    }

    /* Track */
    ::-webkit-scrollbar-track {

    }

    /* Handle */
    ::-webkit-scrollbar-thumb {
        background: #4f88ff;
        border-radius: 5px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
        background: #4f88ff;
    }
</style>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <h5 class="text-center" style="font-family: Yekan;font-size: 30px;font-weight: bolder;margin-top: 30px">میلیونر لایف</h5>
            <div class="card card-signin my-5">
                <div class="card-body">
                    <h5 class="card-title text-center" style="font-family: Yekan;font-size: 28px;font-weight: normal">ساخت حساب کاربری</h5>
                    <div class="alert-danger">
                        <x-jet-validation-errors class="mb-4" />
                    </div>
                    <form method="POST" action="{{ route('showphone') }}">
                        @csrf
                        <div class="form-label-group">
                            <input type="text" id="name" name="name" class="form-control" placeholder="نام و نام خانوادگی خود را وارد کنید" required autofocus style="text-align: right">
                            <label  for="name" :value="__('name')" style="text-align: right">نام و نام خانوادگی خود را وارد کنید</label>
                        </div>
                        <div class="form-label-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="نام کاربری خود را انتخاب کنید" required autofocus style="text-align: right">
                            <label  for="username" :value="__('username')" style="text-align: right">نام کاربری خود را انتخاب کنید</label>
                        </div>
                        <div class="form-label-group">
                            <input type="phone" id="phone" name="phone" class="form-control" placeholder="شماره تلفن همراه *******091" required autofocus style="text-align: right">
                            <label  for="phone" :value="__('phone')" style="text-align: right">شماره تلفن همراه *******091</label>
                        </div>
                        <div class="form-label-group" style="direction: rtl">
                            <input type="password" name="password" id="password" class="form-control" placeholder="رمز عبور" required autocomplete="new-password" style="text-align: right">
                            <label for="password" style="text-align: right" :value="__('password')">رمز عبور</label>
                        </div>
                        <div class="form-label-group" style="direction: rtl">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="تکرار رمز عبور" required style="text-align: right" autocomplete="off">
                            <label for="password_confirmation" style="text-align: right" :value="__('password_confirmation')">تکرار رمز عبور</label>
                        </div>
                        <button class="btn btn-lg btn-block text-uppercase" type="submit" id="subid">ساخت حساب کاربری</button>
                        <hr class="my-4">
                    </form>
                    <a class="btn btn-lg btn-block text-uppercase" type="submit" id="subidv" href="{{route('register')}}">قبلا ثبت نام کردید ؟ صفحه ی ورود</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
