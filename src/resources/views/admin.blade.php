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
      <input type="text" name="word" class="input__search-word">
      <select name="" id="" class="select__search-gender"></select>
      <select name="" id="" class="select__search-type"></select>
      <input type="text" name="" id="datepicker" class="input__search-date">
      <button class="button__search">検索</button>
      <button class="button__reset">リセット</button>
    </form>
  </div>
  <table class="table__contacts">
    <tr class="tr__header">
      <td>お名前</td>
      <td>性別</td>
      <td>メールアドレス</td>
      <td>お問い合わせの種類</td>
      <td></td>
    </tr>
    <tr>
      <td>山田太郎</td>
      <td>男性</td>
      <td>test@example.com</td>
      <td>商品の交換について</td>
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
                <td>山田太郎</td>
              </tr>
              <tr>
                <th>性別</th>
                <td>男性</td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td>test@example.com</td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td>08012345678</td>
              </tr>
              <tr>
                <th>住所</th>
                <td>東京都渋谷区千駄ヶ谷1-2-3</td>
              </tr>
              <tr>
                <th>建物名</th>
                <td>千駄ヶ谷マンション101</td>
              </tr>
              <tr>
                <th>お問い合わせの種類</th>
                <td>商品の交換について</td>
              </tr>
              <tr>
                <th>お問い合わせ内容</th>
                <td>届いた商品が注文した商品ではありませんでした。商品の交換をお願いします。</td>
              </tr>
            </table>
            <div class="div__delete">
              <button class="button__delete">削除</button>
            </div>
          </div>  
        </div>
      </td>
    </tr>
  </table>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/i18n/jquery.ui.datepicker-ja.min.js"></script>
  <script src="{{ asset('js/admin.js') }}"></script>
</div>
@endsection