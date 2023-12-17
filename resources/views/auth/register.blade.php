@extends('layouts.auth')

@section('content')
    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-20">
            <h3>ユーザー登録</h3>
            <!-- <p class="opacity-60">詳細を入力してアカウントを作成してください:</p> -->
        </div>
        <form class="form text-center" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 p-form-control" id="name" type="text" placeholder="名前" name="name" required autofocus autocomplete="name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>
            <div class="form-group">
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 p-form-control" id="email" type="email" placeholder="メールアドレス" name="email" autocomplete="email" required/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group">
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 p-form-control" id="password" type="password" placeholder="パスワード (８文字以上で入力)" name="password" required  autocomplete="new-password"/>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="form-group">
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 p-form-control" id="password_confirmation" type="password" placeholder="確認のため再入力" name="password_confirmation" required autocomplete="new-password"/>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 m-2 p-primary-btn">登録する</button>
                <a class="btn btn-pill btn-outline-white font-weight-bold opacity-70 px-15 py-3 m-2" href="/">キャンセル</a>
            </div>
        </form>
    </div>
    <!--end::Login Sign in form-->
@endsection