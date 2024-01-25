@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
<div class="div__main">
  <h2 class="h2__register">Register</h2>
  <form action="" class="form__register">
    <div class="div__input">
      <label class="label__name">お名前<br>
        <input type="text" class="input__name">
      </label>
      <label class="label__mail">メールアドレス<br>
        <input type="text" class="input__mail">
      </label>
      <label class="label__password">パスワード<br>
        <input type="password" class="input__password">
      </label>
    </div>
    <button class="button__register">登録</button>
  </form>
</div>
@endsection