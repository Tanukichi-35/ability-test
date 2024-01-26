@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
@endsection

@section('content')
<div class="div__main">
  <h2 class="h2__register">Admin</h2>
  <div class="div__search">
    <form action="" class="form__search">
      <input type="text" name="word" class="input__search-word">
      <select name="" id="" class="select__search-gender"></select>
      <select name="" id="" class="select__search-type"></select>
      <select name="" id="" class="select__search-date"></select>
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
        <form action="" class="form__detail">
          <button class="button__detail">詳細</button>
        </form>
      </td>
    </tr>
    <tr>
      <td>山田太郎</td>
      <td>男性</td>
      <td>test@example.com</td>
      <td>商品の交換について</td>
      <td>
        <form action="" class="form__detail">
          <button class="button__detail">詳細</button>
        </form>
      </td>
  </tr>
    <tr>
      <td>山田太郎</td>
      <td>男性</td>
      <td>test@example.com</td>
      <td>商品の交換について</td>
      <td>
        <form action="" class="form__detail">
          <button class="button__detail">詳細</button>
        </form>
      </td>
  </tr>
  </table>
</div>
@endsection