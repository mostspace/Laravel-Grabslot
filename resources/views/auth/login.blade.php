@extends('layouts.auth')

@section('content')
    <!--begin::Login Sign in form-->
    <div class="login-signin">
        <div class="mb-10">
            <h3>ログイン</h3>
            <!-- <p class="mt-10 white-mode">GRABの宣伝URLとリンクさせる！</p> -->
            <div class="my-17">
                <a class="area" href="https://grabslot.co.jp" target="_blank">GRABの宣伝URLとリンクさせる!</a>
            </div>
            <!-- <div class="login-promotion-title my-15">
                <a href="https://grabslot.co.jp" target="_blank">GRABの宣伝URLとリンクさせる！</a>
            </div> -->
        </div>
        <form class="form text-center" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 p-form-control" id="email" type="text" placeholder="メールアドレス" name="email" required autofocus autocomplete="email" />
            </div>
            <div class="form-group">
                <input class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 p-form-control" id="password" type="password" placeholder="パスワード" name="password" required autocomplete="current-password"/>
                <!-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> -->
            </div>
            <div class="form-group d-flex flex-wrap justify-content-between align-items-center">
                <div class="checkbox-inline">
                    <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                    <input type="checkbox" name="remember" />
                    <span></span>メールアドレスとパスワードを保存する</label>
                </div>
                <a href="/forgot-password" id="kt_login_forgot" class="text-white font-weight-bold">パスワードを忘れましたか?</a>
            </div>
            <div class="form-group text-center mt-10 d-flex justify-content-center">
                <button class="fluid-btn w-200px">
                    <span class="fluid-btn-inner py-3 font-weight-bolder">ログイン</span>
                </button>
                <!-- <button class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3 p-primary-btn">ログイン</button> -->
            </div>
        </form>
        <div class="mt-10">
            <span class="opacity-70 mr-4 ">アカウントをお持ちでない場合は、</span>
            <a href="/register" id="kt_login_signup" class="text-white font-weight-bold">新規登録</a>
        </div>
    </div>
    <!--end::Login Sign in form-->
@endsection
					