@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="content__title">
    <h2>Confirm</h2>
  </div>
  <div class="form">
    <form action="/create" method="post" class="form__inner">
      @csrf
      <table>
        <tr class="table__row">
          <th class="table__header">
            お名前
          </th>
          <td class="table__item">
            <p>{{$confirm['last_name']}} {{$confirm['first_name']}} </p>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            性別
          </th>
          <td class="table__item">
            <p>{{$gender_label}}</p>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            メールアドレス
          </th>
          <td class="table__item">
            <p>{{$confirm['email']}}</p>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            電話番号
          </th>
          <td class="table__item">
            <p>{{$tel}}</p>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            住所
          </th>
          <td class="table__item">
            <p>{{$confirm['address']}}</p>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            建物名
          </th>
          <td class="table__item">
            <p>{{$confirm['building']}}</p>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            お問い合わせの種類
          </th>
          <td class="table__item">
            <p>{{$content}}</p>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            お問い合わせ内容
          </th>
          <td class="table__item">
            <p>{!! nl2br(e($confirm['detail'])) !!}</p>
          </td>
        </tr>
      </table>
      <div class="form__button">

        <!-- ポストする内容 -->
        <input type="hidden" name='first_name' value="{{$confirm['first_name']}}">
        <input type="hidden" name="last_name" value="{{$confirm['last_name']}}">
        <input type="hidden" name='gender' value="{{$confirm['gender']}}">
        <input type="hidden" name="email" value="{{$confirm['email']}}">
        <input type="hidden" name="tel" value="{{$tel}}">
        <input type="hidden" name="address" value="{{$confirm['address']}}">
        <input type="hidden" name="building" value="{{$confirm['building']}}">
        <input type="hidden" name="category_id" value="{{$confirm['category_id']}}">
        <input type="hidden" name="detail" value="{{$confirm['detail']}}">

        <button class="form__button-submit" type="submit">
          送信
        </button>
      </div>
    </form>
  </div>
  <form action="/" method="POST" class="form__modify">
    @csrf

    <!-- ポストする内容 -->
    <input type="hidden" name="first_name" value="{{ $confirm['first_name'] }}">
    <input type="hidden" name="last_name" value="{{ $confirm['last_name'] }}">
    <input type="hidden" name="gender" value="{{ $confirm['gender'] }}">
    <input type="hidden" name="email" value="{{ $confirm['email'] }}">
    <input type="hidden" name="tel1" value="{{ $confirm['tel1'] }}">
    <input type="hidden" name="tel2" value="{{ $confirm['tel2'] }}">
    <input type="hidden" name="tel3" value="{{ $confirm['tel3'] }}">
    <input type="hidden" name="address" value="{{ $confirm['address'] }}">
    <input type="hidden" name="building" value="{{ $confirm['building'] }}">
    <input type="hidden" name="category_id" value="{{ $confirm['category_id'] }}">
    <input type="hidden" name="detail" value="{{$confirm['detail']}}">

    <button type="submit" name="action" value="back" class="form_modify-button">修正</button>
  </form>
</div>
@endsection