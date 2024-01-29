@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/register.css') }}" />
@endsection

@section('content')
<div class="div__main">
  <h2 class="h2__register">Register</h2>
  <form action="/register" method="POST" class="form__register">
    @csrf
    <div class="div__input">
      <label class="label__name">お名前<br>
        <input type="text" name="name" class="input__name" placeholder="例:山田  太郎" value="{{ old('name') }}" >
      </label>
      <div class="form__error">
        <ul>
          @error('name')
          <li>
            {{$message}}
          </li>
          @enderror
        </ul>
      </div>
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
        <input name="password_confirm" value="{{`password`}}" style="display: none">
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
    <button class="button__register">登録</button>
  </form>
</div>
@endsection