@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')
<div class="div__main">
  <h2 class="logo">Contact</h2>
  <form class = "form__contact" action="/confirm" method="post">
    <div class = "div__name">
      <label class="label__name form__label form__required" for="last_name">お名前</label>
      <div class="div__input">
        <input class="input__last_name" id="last_name" name="last_name" placeholder="例:山田" value="{{old ('last_name')}}" >
        <input class="input__first_name" name="first_name" placeholder="例:太郎" value="{{old ('first_name')}}" >
      </div>
    </div>
    <div class="div__gender">
      <label class="label__gender form__label form__required">性別</label>
      <div class="div__input">
        <input type="radio" name="gender" class="input__male" id="input_male" value="男性" {{ old ('male') == '男性' ? 'checked' : '' }} checked>
        <label class="label__gender" for="input_male">男性</label>
        <input type="radio" name="gender" class="input__female" id="input_female" value="女性" {{ old ('female') == '女性' ? 'checked' : '' }} checked>
        <label class="label__gender" for="input_female">女性</label>
        <input type="radio" name="gender" class="input__other" id="input__other" value="その他" {{ old ('Other') == 'その他' ? 'checked' : '' }} checked>
        <label class="label__gender" for="input__other">その他</label>
      </div>
    </div>
    <div class="div__email">
      <label class="label__email form__label form__required" for="input_email">メールアドレス</label>
      <div class="div__input">
        <input class="input__email" id="input_email" name="email" placeholder="例:test@example.com" value="{{old ('email')}}" >
      </div>
    </div>
    <div class="div__tell">
      <label class="label__tell form__label form__required" for="tell-1">電話番号</label>
      <div class="div__input">
        <input class="input__tell-1" id="tell-1" name="tell-1" placeholder="080" value="{{old ('tell-1')}}" >
        <label>-</label>
        <input class="input__tell-2" name="tell-2" placeholder="1234" value="{{old ('tell-2')}}" >
        <label>-</label>
        <input class="input__tell-3" name="tell-3" placeholder="5678" value="{{old ('tell-3')}}" >
      </div>
    </div>
    <div class="div__address">
      <label class="label__address form__label form__required" for="input_address">住所</label>
      <div class="div__input">
        <input class="input__address" id="input_address" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{old ('address')}}" >
      </div>
    </div>
    <div class="div__building">
      <label class="label__building form__label" for="input_building">建物名</label>
      <div class="div__input">
        <input class="input__building" id="input_building" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{old ('building')}}" >
      </div>
    </div>
    <div class="div__category">
      <label class="label__category form__label form__required" for="select_category">お問い合わせの種類</label>
      <div class="div__input">
        <select class="select__category" name="category_id">
          <option value="" disabled selected style='display:none;'>選択してください</option>
        </select>
      </div>
    </div>
    <div class="div__detail">
      <label class="label__detail form__label form__required" for="textarea__detail">お問い合わせ内容</label>
      <div class="div__input">
        <textarea class="textarea__detail" id="textarea__detail" name="detail" placeholder="お問い合わせの内容をご記載ください" value="{{old ('detail')}}" >
        </textarea>
      </div>
    </div>
    <button class="button__confirm">確認画面</button>
  </form>
</div>
@endsection