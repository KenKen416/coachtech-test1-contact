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
    <table class="table--main">
      <tr class="table__row">
        <th class="table__header--main">お名前</th>
        <th class="table__header--main">性別</th>
        <th class="table__header--main">メールアドレス</th>
        <th class="table__header--main">お問い合わせの種類</th>
        <th class="table__header--main"></th>
      </tr>
      @foreach($contacts as $contact)
      <tr class="table__row">

        <td class="table__item--main">
          {{$contact['last_name']}} {{$contact['first_name']}}
        </td>
        <td class="table__item--main">
          {{$contact['gender_label']}}
        </td>
        <td class="table__item--main">
          {{$contact['email']}}
        </td>
        <td class="table__item--main">
          {{$contact->category->content}}
        </td>
        <td class="table__item--main">
          <button class="open-button" popovertarget="modal-{{$contact->id}}" popovertargetaction="show">
            詳細
          </button>
          <div class="modal" id="modal-{{$contact->id}}" popover>
            <div class="modal__inner">
              <table class="table--modal">
                <tr>
                  <th class="table__header--modal">お名前</th>
                  <td class="table__item--modal">{{$contact['last_name']}} {{$contact['first_name']}}</td>
                </tr>
                <tr>
                  <th class="table__header--modal">性別</th>
                  <td class="table__item--modal">
                    {{$contact['gender_label']}}
                  </td>
                </tr>
                <tr>
                  <th class="table__header--modal">メールアドレス</th>
                  <td class="table__item--modal">
                    {{$contact['email']}}
                  </td>
                </tr>
                <tr>
                  <th class="table__header--modal">電話番号</th>
                  <td class="table__item--modal">
                    {{$contact['tel']}}
                  </td>
                </tr>
                <tr>
                  <th class="table__header--modal">住所</th>
                  <td class="table__item--modal">
                    {{$contact['address']}}
                  </td>
                </tr>
                <tr>
                  <th class="table__header--modal">建物名</th>
                  <td class="table__item--modal">
                    {{$contact['building']}}
                  </td>
                </tr>
                <tr>
                  <th class="table__header--modal">お問い合わせの種類</th>
                  <td class="table__item--modal">
                    {{$contact->category->content}}
                  </td>
                </tr>
                <tr>
                  <th class="table__header--modal">お問い合わせの内容</th>
                  <td class="table__item--modal">
                    {{$contact['detail']}}
                  </td>
                </tr>
              </table>
              <div class="delete-button">
                <form action="/admin/delete" method="post" class="delete-button__form">
                  @method('DELETE')
                  @csrf
                  <input type="hidden" name="id" value="{{$contact->id}}">
                  <button type="submit">削除</button>
                </form>
              </div>
            </div>
            <button class="close-button" popovertarget="modal-{{$contact->id}}" popovertargetaction="hide">
              ×
            </button>
          </div>
        </td>
      </tr>
      @endforeach
    </table>
  </div>
  @if(session('message'))
  <div class="message">
    <h2>
      {{session('message')}}
    </h2>
  </div>
  @endif
  @if(session('notfound'))
  <div class="notfound">
    <h2>
      {{session('notfound')}}
    </h2>
  </div>
  @endif
</div>
@endsection