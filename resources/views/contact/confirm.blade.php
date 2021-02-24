@extends('layouts.app')

@section('content')
<div class="main-d">
    <div class="amount">
        <div class="confirm-main">
            <p class="top">お問い合わせ確認</p>
            <form method="POST" action="{{ route('contact.send') }}">
                @csrf

                <label>氏名:</label>
                {{ $inputs['simei'] }}
                <input
                    name="simei"
                    value="{{ $inputs['simei'] }}"
                    type="hidden">

                <label>メールアドレス:</label>
                {{ $inputs['email'] }}
                <input
                    name="email"
                    value="{{ $inputs['email'] }}"
                    type="hidden">

                <label>タイトル:</label>
                {{ $inputs['title'] }}
                <input
                    name="title"
                    value="{{ $inputs['title'] }}"
                    type="hidden">


                <label>お問い合わせ内容:</label>
                {!! nl2br(e($inputs['body'])) !!}
                <input
                    name="body"
                    value="{{ $inputs['body'] }}"
                    type="hidden">

                <div class="button-1">
                    <button type="submit" name="action" value="back">
                        入力内容修正
                    </button>
                    <button type="submit" name="action" value="submit" class="button-right">
                        送信する
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection