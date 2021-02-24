@extends('layouts.app')

@section('content')
<div class="main-e">
    <div class="amount">
        <p class="top">お問い合わせ完了</p>
        <div class="article">
            <p>{{ __('お問い合わせありがとうございます。') }}</p>
            <p>{{ __('ご返信させて頂きますのでしばらくお待ち下さい。') }}</p>
        </div>
        <div class="thanks-button">
            <a class="thanks-button1" href="{{ url('/') }}">TOPに戻る</a>
        </div>
    </div>
</div>

@endsection