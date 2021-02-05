<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>春山機械</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel = "preconnect" href = "https://fonts.gstatic.com">
        <link href = "https://fonts.googleapis.com/css2？family = Noto + Serif + JP：wght @ 500＆ display = swap "rel =" stylesheet ">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/welcome.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/company.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/product.css') }}" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="logo">
                <a class="logo1" href="{{ url('/') }}">春山機械</a>
                <h5>〜中古機械販売買取から塗装まで〜</h5>
            </div>{{-- logo --}}
            <div class="nav">
                <a class="icon-a" href="{{ url('/company') }}">会社情報</a>
                <a class="icon-a" href="{{ url('/product') }}">機械情報</a>
                <a class="icon-a" href>お問い合わせ</a>
            </div>{{-- nav --}}
        </header>

        
        @yield('content')
        
        



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>