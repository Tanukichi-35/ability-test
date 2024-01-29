@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
<div class="div__main">
  <h2 class="h2__login">Login</h2>
  <form action="/login" method="POST" class="form__login">
    @csrf
    <div class="div__input">
      <label class="label__mail">メールアドレス<br>
        <input type="text" name="email" class="input__mail" placeholder="例:test@example.com" value="{{ old('email') }}" >
      </label>
      <div class="form__error">
        <ul>
          @error('email')
          <li>
            {{$message}}
          </li>
          @enderror
        </ul>
      </div>
      <label class="label__password">パスワード<br>
        <input type="password" name="password" class="input__password" placeholder="例:coachtech1106">
      </label>
      <div class="form__error">
        <ul>
          @error('password')
          <li>
            {{$message}}
          </li>
          @enderror
        </ul>
      </div>
    </div>
    <button class="button__login">ログイン</button>
  </form>
</div>
@endsection