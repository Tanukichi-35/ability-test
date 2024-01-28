@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
@endsection

@section('content')
<div class="div__main">
  <h2 class="h2__register">Admin</h2>
  <div class="div__search">
    <form action="" class="form__search">
      <input type="text" name="word" class="input__search-word" placeholder="名前やメールアドレスを入力してください">
      <select name="" id="" class="select__search-gender">
        <option value="" style='display:none;' disabled selected>性別</option>
        <option value="0">全て</option>
        <option value="1">男性</option>
        <option value="2">女性</option>
        <option value="3">その他</option>
      </select>
      <select name="" id="" class="select__search-type">
        <option value="" style='display:none;' disabled selected>お問い合わせの種類</option>
        @foreach ($categories->all() as $category)
        <option value="{{$category->id}}" @if(old('category_id') == $category->id) selected @endif>{{$category->content}}</option>
        @endforeach
      </select>
      <input type="text" name="" id="datepicker" class="input__search-date" placeholder="年/月/日">
      <button class="button__search">検索</button>
      <button class="button__reset">リセット</button>
    </form>
  </div>
  {{ $contacts->links('vendor.pagination.topics') }}
  <table class="table__contacts">
    <tr class="tr__header">
      <td>お名前</td>
      <td>性別</td>
      <td>メールアドレス</td>
      <td>お問い合わせの種類</td>
      <td></td>
    </tr>
    @foreach ($contacts->all() as $contact)
    <tr>
      <td>{{$contact->getName()}}</td>
      <td>{{$contact->getGender()}}</td>
      <td>{{$contact->email}}</td>
      <td>{{$contact->getCategory()}}</td>
      <td>
        <button type="button" class="button__detail">詳細</button>
        {{-- モーダル --}}
        <div class="div__modal">
          <div class="div__overlay"></div>
          <div class="div__modal-contents">
            <div class="div__modal-close">
              <button class="button__modal-close"></button>
                {{-- <span></span>
                <span></span>
              </button> --}}
            </div>
            <table class="table__detail">
              <tr>
                <th>お名前</th>
                <td>{{$contact->getName()}}</td>
              </tr>
              <tr>
                <th>性別</th>
                <td>{{$contact->getGender()}}</td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td>{{$contact->email}}</td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td>{{$contact->tell}}</td>
              </tr>
              <tr>
                <th>住所</th>
                <td>{{$contact->address}}</td>
              </tr>
              <tr>
                <th>建物名</th>
                <td>{{$contact->building}}</td>
              </tr>
              <tr>
                <th>お問い合わせの種類</th>
                <td>{{$contact->getCategory()}}</td>
              </tr>
              <tr>
                <th>お問い合わせ内容</th>
                <td>{{$contact->detail}}</td>
              </tr>
            </table>
            <div class="div__delete">
              <form action="/delete" method="post" class="form__delete">
                @csrf
                @method('DELETE')
                <input type="text" name="id" value="{{$contact->id}}" hidden>
                <button class="button__delete">削除</button>
              </form>
            </div>
          </div>  
        </div>
      </td>
    </tr>
    @endforeach
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/i18n/jquery.ui.datepicker-ja.min.js"></script>
  <script src="{{ asset('js/admin.js') }}"></script>
</div>
@endsection