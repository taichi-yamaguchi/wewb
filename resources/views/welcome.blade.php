
@extends('layouts.app')

@section('content')

<main>
    <div id="img-top" class="carousel slide welcome-img-box" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="welcome-img" src="/images/S__5259292 2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="welcome-img" src="/images/S__5259294 2.jpg" alt="Second slide">
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#img-top" data-slide-to="0" class="active"></li>
            <li data-target="#img-top" data-slide-to="1"></li>
        </ol>
    </div>
    <div class="title">
        <p>3つの事業</p>
    </div>
    <div class="icon-group">
        <div class="icon">
            <div class="back">
                <a href>
                    <img class="img-1" src="/images/w-buy.png" alt="First icon">
                </a>
            </div>
            <div class="plain-group">
                <p class="plain-main">機械買取</p>
                <p class="plain">中古機械の買取から小さなことでも<br>ご相談ください。</p>
            </div>
        </div>
        <div class="icon">
            <div class="back">
                <a href>
                    <img class="img-1" src="/images/w-sell.png" alt="Second icon">
                </a>
            </div>
            <div class="plain-group">
                <p class="plain-main">機械販売</p>
                <p class="plain">新品・中古どちらも取り扱っております。<br>お客様のご要望にお応えします。</p>
            </div>
        </div>
        <div class="icon">
            <div class="back">
                <a href>
                    <img class="img-1" src="/images/w-paint.png" alt="Third icon">
                </a>
            </div>
            <div class="plain-group">
                <p class="plain-main">機械塗装</p>
                <p class="plain">工作機械塗装を行っており、<br>半世紀のキャリアがございます。</p>
            </div>
        </div>
    </div>
</main>

@endsection



