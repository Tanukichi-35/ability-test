@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
<div class="div__main">
  <h2 class="h2__login">Login</h2>
  <form action="" class="form__login">
    <div class="div__input">
      <label class="label__mail">メールアドレス<br>
        <input type="text" class="input__mail">
      </label>
      <label class="label__password">パスワード<br>
        <input type="password" class="input__password">
      </label>
    </div>
    <button class="button__login">ログイン</button>
  </form>
</div>
@endsection