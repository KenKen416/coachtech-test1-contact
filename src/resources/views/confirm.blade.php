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
            <p>{{$confirm['first_name']}} {{$confirm['last_name']}}</p>
            <input class="table__item-name" type="hidden" name='first_name' value="{{$confirm['first_name']}}">
            <input class="table__item-name" type="hidden" name="last_name" value="{{$confirm['last_name']}}">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            性別
          </th>
          <td class="table__item">
            <p>{{$gender_label}}</p>
            <input type="hidden" name='gender' value="{{$confirm['gender']}}">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            メールアドレス
          </th>
          <td class="table__item">
            <p>{{$confirm['email']}}</p>
            <input type="hidden" name="email" value="{{$confirm['email']}}">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            電話番号
          </th>
          <td class="table__item">
            <p>{{$tel}}</p>
            <input type="hidden" name="tel"
              value="{{$tel}}">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            住所
          </th>
          <td class="table__item">
            <p>{{$confirm['address']}}</p>
            <input type="hidden" name="address" value="{{$confirm['address']}}">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            建物名
          </th>
          <td class="table__item">
            <p>{{$confirm['building']}}</p>
            <input type="hidden" name="building" value="{{$confirm['building']}}">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            お問い合わせの種類
          </th>
          <td class="table__item">
            <p>{{$content}}</p>
            <input type="hidden" name="category_id" value="{{$confirm['category_id']}}">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            お問い合わせ内容
          </th>
          <td class="table__item">
            <p>{{$confirm['detail']}}</p>
            <input type="hidden" name="detail" value="{{$confirm['detail']}}">
          </td>
        </tr>
      </table>
      <div class="form__button">
        <button class="form__button-submit" type="submit">
          送信
        </button>
        <a href="/" class="form__button-modify">修正</a>

      </div>
    </form>
  </div>
</div>
@endsection