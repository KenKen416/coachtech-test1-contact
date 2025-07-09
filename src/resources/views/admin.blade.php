@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection

@section('link-button')
<a href="">logout</a>
@endsection

@section('content')
<div class="content">
  <div class="content__title">
    <h2>Admin</h2>
  </div>
  <div class="form">
    @csrf
    <form action="" class="form__inner">
      <div class="form__search-keyword">
        <input type="text" name="keyword">
      </div>
      <div class="form__search-gender">
        <select name="gender">
          <option value="">性別</option>
          <option value="1">男性</option>
          <option value="2">女性</option>
          <option value="3">その他</option>
        </select>
      </div>
      <div class="form__search-category">
        <select name="category_id" id="">
          <option value="">お問い合わせの種類</option>
          <option value="1">商品のお届けについて</option>
          <option value="2">商品の交換について</option>
          <option value="3">商品トラブル</option>
          <option value="4">ショップへのお問い合わせ</option>
          <option value="5">その他</option>
        </select>
      </div>
      <div class="form__search-calender">
        <input type="date" name="created_at">
      </div>
      <div class="form__search-submit">
        <button class="form__search-submit--button" type="submit">検索</button>
      </div>
      <div class="form__search-reset">
        <button class="form__search-reset--button">リセット</button>
      </div>
    </form>
  </div>
  <div class="function">
    <div class="function__export">
      <button class="function__export-button">エクスポート</button>
    </div>
    <div class="function__paging">
      {{ $contacts->links('pagination::bootstrap-4') }}
    </div>
  </div>
  <div class="contact-lists">
    <table class="contact-lists__table">
      <tr class="table__row">
        <th class="table__header">お名前</th>
        <th class="table__header">性別</th>
        <th class="table__header">メールアドレス</th>
        <th class="table__header">お問い合わせの種類</th>
        <th class="table__header"></th>
      </tr>
      @foreach($contacts as $contact)
      <tr class="table__row">

        <td class="table__item">
          {{$contact['last_name']}} {{$contact['first_name']}}
        </td>
        <td class="table__item">
          {{$contact['gender_label']}}
        </td>
        <td class="table__item">
          {{$contact['email']}}
        </td>
        <td class="table__item">
          {{$contact->category->content}}
        </td>
        <td class="table__item">
          <button id="openModal" class="open-modal">詳細</button> <!--変更必要-->
        </td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection