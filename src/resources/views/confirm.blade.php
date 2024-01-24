@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
<div class="div__main">
  <h2 class="logo">Confirm</h2>
  <form action="" class="form__confirm">
    <table class="table__confirm">
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
        <td>080-1234-5678</td>
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
        <td>届いた商品が中もした商品ではありませんでした。<br>商品の取り換えをお願いいたします。</td>
      </tr>
    </table>
    <div class="div__button">
      <button class="button__send">送信</button>
      <button class="button__correct">修正</button>
    </div>
  </form>
</div>
@endsection