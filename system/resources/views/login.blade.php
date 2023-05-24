<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ url('public/admin') }}/dist/img/ti.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #f6f5f7;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #412d9b;
            background-color: #2b52ff;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: transparent;
            border-color: #FFFFFF;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        select {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: relative;
            overflow: hidden;
            width: 868px;
            max-width: 100%;
            min-height: 600px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.6s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #FF416C;
            background: -webkit-linear-gradient(to right, #D3D3D3, #D3D3D3);
            background: linear-gradient(to right, #D3D3D3, #D3D3D3);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        footer {
            background-color: #222;
            color: #fff;
            font-size: 14px;
            bottom: 0;
            position: fixed;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 999;
        }

        footer p {
            margin: 10px 0;
        }

        footer i {
            color: red;
        }

        footer a {
            color: #3c97bf;
            text-decoration: none;
        }

        .card {
            background: #FF416C;
            border-radius: 2px;
            display: inline-block;
            height: 55px;
            margin: 0rem;
            position: center;
            width: 100%;
        }

    </style>

</head>

<body>
    <h2>Halaman Login</h2>
    @if ($message = Session::get('info'))
        <div class="alert alert-primary" role="alert">
            <div class="card">
                <p>
                    <strong>{{ $message }}</strong>
                </p>
            </div>
        </div>
    @endif

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ url('storemember') }}" method="POST" role="form" enctype="multipart/form-data">
                @csrf
                <h1>Buat Member Baru</h1>
                <div class="social-container">
                </div>
                <span></span>
                <input type="text" placeholder="Nama Mitra DUDIKA" name="nama_mitra" required=""
                    oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"
                    title="Nama Mitra DUDIKA">

                <input type="text" placeholder="Alamat Mitra" name="alamat_mitra" required=""
                    oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"
                    title="Alamat Mitra">

                <input type="email" placeholder="Email Mitra DUDIKA" name="email" required=""
                    oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"
                    title="Email Mitra DUDIKA">

                <input type="password" placeholder="Password" name="password" required=""
                    oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"
                    title="Password">

                <input type="password" placeholder="Confirmasi Password" name="confir_password" required=""
                    oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"
                    title="Confirmasi Password">

                <input type="text" placeholder="Nama Pemegang Akses" name="pemegang_akses" required=""
                    oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"
                    title="Nama Pemegang Akses">

                <input type="text" placeholder="Nomor Handphone Pemegang Akses" name="no_hp" required=""
                    oninvalid="this.setCustomValidity(' Tidak Boleh Kosong')" oninput="setCustomValidity('')"
                    title="Nomor Handphone Pemegang Akses">

                <input type="file" placeholder="Logo Mitra DUDIKA" name="logo" accept=".jpg, .png, .jpeg"
                    title="Logo Mitra DUDIKA">

                <button class="btn btn-primary"> Buat Akun</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ url('login') }}" method="post">
                @csrf
                <h1>Halaman Login</h1>
                <div class="social-container">

                </div>
                <input type="text" placeholder="Email" name="username">
                <input type="password" placeholder="Password" name="password">
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 style="color: black">Selamat Datang!</h1>
                    <p style="color: black">Jika Anda Sudah Memiliki Akun Silahkan Login</p>
                    <button class="btn btn-primary" id="signIn">Login</button>
                </div>
                <div class="overlay-panel overlay-right">

                    <h1 style="color: black">Hallo!</h1>
                    <p style="color: black">Jika Anda Belum Memiliki Akun Silahkan Buat Akun Terlebih Dahulu</p>
                    <button class="btn btn-info" id="signUp">Buat Akun Member</button>
                </div>
            </div>
        </div>
    </div>


    </div>

    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>

</body>

</html>