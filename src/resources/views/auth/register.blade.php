@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login-register.css')}}">
@endsection

@section('link-button')
<a href="/login">login</a>
@endsection

@section('content')
<div class="content">
  <div class="content__title">
    <h2>Register</h2>
  </div>
  <div class="form">
    <form action="/register" class="form__inner" method="post">
      @csrf
      <div class="form__item">
        <div class="form__item-label">お名前</div>
        <input class="form__item-input" type="text" name="name" value="{{old('name')}}" placeholder="例：山田太郎">
        @error('name')
        <div class="error">
          {{$message}}
        </div>
        @enderror
      </div>
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
        <input class="form__item-input" type="password" name="password" value="" placeholder="例:coachtech1106">
        @error('password')
        <div class="error">
          {{$message}}
        </div>
        @enderror
      </div>
      <div class="form__button">
        <button type="submit" class="form__button-submit">登録</button>
      </div>
    </form>
  </div>
</div>
@endsection