@extends('layouts.app')

@section('content')
<main class="main-a">
    <div class="amount">
        <p class="top">事業内容</p>
        <div class="change">
            <p class="center">
                ・中古機械や遊休機械の買取・引取り<br>
                ・工作機械(全般の新品・中古)販売<br>
                ・半世紀のキャリアでの工作機械塗装
            </p>
            <p class="foot">
                上記の内容や機械に関してお悩みの際は、<br>
                小さな事でもお気軽にご相談ください。
            </p>
        </div>
        <div class="map-code">
            <div class="code">
                <p class="place-a">所在地</p>
                <p class="place-b">〒578-0964<br>大阪府東大阪市新庄西２−１７</p>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3280.695455137681!2d135.5962251152318!3d34.687634980437885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000dff8dfef593d%3A0x2abadeeca9190d3b!2z44CSNTc4LTA5NjQg5aSn6Ziq5bqc5p2x5aSn6Ziq5biC5paw5bqE6KW_77yS4oiS77yR77yX!5e0!3m2!1sja!2sjp!4v1611830230437!5m2!1sja!2sjp" width="300" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class="sns-group">
            <a class="icon-b" href="{{ url('https://twitter.com/taichi_9220') }}">
                <i class="fab fa-twitter fa-2x"></i>
            </a>
        </div>
    </div>
</main>
@endsection