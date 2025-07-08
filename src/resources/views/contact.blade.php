@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/contact.css')}}">
@endsection

@section('content')
<div class="content">
  <div class="content__title">
    <h2>Contact</h2>
  </div>
  <div class="form">
    <form action="/" method="post" class="form__inner">
      @csrf
      <table>

        <tr class="table__row">
          <th class="table__header">
            お名前
            <span>※</span>
          </th>
          <td class="table__item">
            <input class="table__item-name" type="text" name='first_name'>
            <input class="table__item-name" type="text" name="last_name">
          </td>
        </tr>
        <tr class="table__row">
          <th class="table__header">
            性別
            <span>※</span>
          </th>
          <td class="table__item">
            <div class="radio-group">
              <input type="radio" name="gender" value="1" id="1" checked>
              <label for="man">男性</label>
            </div>
            <div class="radio-group">
              <input type="radio" name="gender" value="2" id="2">
              <label for="woman">女性</label>
            </div>
            <div class="radio-group">
              <input type="radio" name="gender" value="3" id="3">
              <label for="other">その他</label>
            </div>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            メールアドレス
            <span>※</span>
          </th>
          <td class="table__item">
            <input type="email" name="email">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            電話番号
            <span>※</span>
          </th>
          <td class="table__item">
            <input type="tel" name="tel1" maxlength="3">
            <p class="space">-</p>
            <input type="tel" name="tel2" maxlength="4">
            <p class="space">-</p>
            <input type="tel" name="tel3" maxlength="4">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            住所
            <span>※</span>
          </th>
          <td class="table__item">
            <input type="text" name="address">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            建物名
          </th>
          <td class="table__item">
            <input type="text" name="building">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            お問い合わせの種類
            <span>※</span>
          </th>
          <td class="table__item">
            <select name="category_id" id="">
              <option value="" selected disabled>選択して下さい</option>
              <option value="1">商品のお届けについて</option>
              <option value="2">商品の交換について</option>
              <option value="3">商品トラブル</option>
              <option value="4">ショップへのお問い合わせ</option>
              <option value="5">その他</option>
            </select>
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            お問い合わせ内容
            <span>※</span>
          </th>
          <td class="table__item">
            <textarea name="detail" id="" rows="5"></textarea>
          </td>
        </tr>
      </table>
      <div class="form__button">
        <button class="form__button-submit" type="submit">
          確認画面
        </button>
      </div>
    </form>
  </div>
</div>
@endsection