@extends('layouts.auth')

@section('content')
    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-20">
            <h3>パスワードを忘れました ？</h3>
            <p class="opacity-60">メールアドレスを入力してパスワードをリセットしてください</p>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="form text-center" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 p-form-control" id="email" type="email" placeholder="メールアドレス" name="email" required autofocus />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </form>
        <div class="form-group">
            <button type="submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2 p-primary-btn">送信する</button>
            <a class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2" href="/login">キャンセル</a>
        </div>
    </div>
    <!--end::Login Sign in form-->
@endsection