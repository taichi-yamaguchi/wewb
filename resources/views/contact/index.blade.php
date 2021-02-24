@extends('layouts.app')

@section('content')
    <div class="main-c">
        <div class="amount">
            <div class="question-main">
                <p class="top">お問い合わせフォーム</p>
                <form method="POST" action="{{ route('contact.confirm') }}">
                    @csrf
                    
                    <div class="question-1">
                        <label>氏名:</label>
                        <input
                            name="simei"
                            value="{{ old('simei') }}"
                            type="text">
                        @if ($errors->has('simei'))
                            <p class="error-message">{{ $errors->first('simei') }}</p>
                        @endif
                    </div>

                    <div class=question-2>
                        <label>メールアドレス:</label>
                        <input
                            name="email"
                            value="{{ old('email') }}"
                            type="text">
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="question-3">
                        <label>タイトル:</label>
                        <input
                            name="title"
                            value="{{ old('title') }}"
                            type="text">
                        @if ($errors->has('title'))
                            <p class="error-message">{{ $errors->first('title') }}</p>
                        @endif
                    </div>

                    <div class="question-4">
                        <label>お問い合わせ内容:</label>
                        <textarea name="body">{{ old('body') }}</textarea>
                        @if ($errors->has('body'))
                            <p class="error-message">{{ $errors->first('body') }}</p>
                        @endif
                    </div>

                    <div class="button-1">
                        <button type="submit">
                            入力内容確認
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection