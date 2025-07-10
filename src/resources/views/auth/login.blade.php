@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login-register.css')}}">
@endsection

@section('link-button')
<a href="/register">register</a>
@endsection

@section('content')
<div class="content">
  <div class="content__title">
    <h2>login</h2>
  </div>
  <div class="form">
    <form action="/login" class="form__inner" method="post">
      @csrf
      <div class="form__item">
        <div class="form__item-label">メールアドレス</div>
        <input class="form__item-input" type="email" name="email" value="{{old('email')}}" placeholder="例:test@example.com">
        @error('email')
        <div class="error">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form__item">
        <div class="form__item-label">パスワード</div>
        <input class="form__item-input" type="password" name="password" placeholder="例:coachtech1106">
        @error('password')
        <div class="error">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form__button">
        <button type="submit" class="form__button-submit">ログイン</button>
      </div>
    </form>
    @error('login_error')
    <div class="error">
      {{$message}}
    </div>
    @enderror
  </div>
</div>
@endsection