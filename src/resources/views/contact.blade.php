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
            <input class="table__item-name" type="text" name="last_name" placeholder="例:山田" value="{{old('last_name')}}">
            <input class="table__item-name" type="text" name='first_name' placeholder="例:太郎" value="{{old('first_name')}}">
          </td>
        </tr>
        @error('last_name')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror
        @error('first_name')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror

        <tr class="table__row">
          <th class="table__header">
            性別
            <span>※</span>
          </th>
          <td class="table__item">
            <div class="radio-group">
              <input type="radio" name="gender" value="1" id="man" {{ old('gender', '1') == '1' ? 'checked' : '' }}>
              <label for="man">男性</label>
            </div>
            <div class="radio-group">
              <input type="radio" name="gender" value="2" id="woman" {{ old('gender') == '2' ? 'checked' : '' }}>
              <label for="woman">女性</label>
            </div>
            <div class="radio-group">
              <input type="radio" name="gender" value="3" id="other" {{ old('gender') == '3' ? 'checked' : '' }}>
              <label for="other">その他</label>
            </div>
          </td>
        </tr>
        @error('gender')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror

        <tr class="table__row">
          <th class="table__header">
            メールアドレス
            <span>※</span>
          </th>
          <td class="table__item">
            <input type="email" name="email" placeholder="例:test@test.com" value="{{old('email')}}">
          </td>
        </tr>
        @error('email')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror

        <tr class="table__row">
          <th class="table__header">
            電話番号
            <span>※</span>
          </th>
          <td class="table__item">
            <input type="tel" name="tel1" maxlength="5" placeholder="080" value="{{old('tel1')}}">
            <p class="space">-</p>
            <input type="tel" name="tel2" maxlength="5" placeholder="1234" value="{{old('tel2')}}">
            <p class="space">-</p>
            <input type="tel" name="tel3" maxlength="5" placeholder="5678" value="{{old('tel3')}}">
          </td>
        </tr>
        @error('tel1')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror
        @error('tel2')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror
        @error('tel3')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror

        <tr class="table__row">
          <th class="table__header">
            住所
            <span>※</span>
          </th>
          <td class="table__item">
            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{old('address')}}">
          </td>
        </tr>
        @error('address')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror

        <tr class="table__row">
          <th class="table__header">
            建物名
          </th>
          <td class="table__item">
            <input type="text" name="building" placeholder="例:Aマンション101" value="{{old('building')}}">
          </td>
        </tr>

        <tr class="table__row">
          <th class="table__header">
            お問い合わせの種類
            <span>※</span>
          </th>
          <td class="table__item">
            <select name="category_id" id="">
              <option value="" disabled {{ old('category_id') ? '' : 'selected' }}>選択して下さい</option>
              <option value="1" {{ old('category_id') == '1' ? 'selected' : '' }}>商品のお届けについて</option>
              <option value="2" {{ old('category_id') == '2' ? 'selected' : '' }}>商品の交換について</option>
              <option value="3" {{ old('category_id') == '3' ? 'selected' : '' }}>商品トラブル</option>
              <option value="4" {{ old('category_id') == '4' ? 'selected' : '' }}>ショップへのお問い合わせ</option>
              <option value="5" {{ old('category_id') == '5' ? 'selected' : '' }}>その他</option>
            </select>
          </td>
        </tr>
        @error('category_id')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror

        <tr class="table__row">
          <th class="table__header">
            お問い合わせ内容
            <span>※</span>
          </th>
          <td class="table__item">
            <textarea name="detail" id="" rows="5" placeholder="お問い合わせ内容をご記載ください">{{old('detail')}}</textarea>
          </td>
        </tr>
        @error('detail')
        <tr>
          <th>
            <div class="error">
              {{$message}}
            </div>
          </th>
        </tr>
        @enderror
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