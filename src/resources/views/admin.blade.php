@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
@endsection

@section('content')
<div class="div__main">
  <h2 class="h2__register">Admin</h2>
  <div class="div__search">
    <form method="GET" class="form__search">
      @csrf
      <div class="div__keyword">
        <input type="text" name="keyword" class="input__search-word" placeholder="名前やメールアドレスを入力してください" @if (isset( $request )) value="{{$request['keyword']}}"@endif>
      </div>
      <div class="div__gender">
        <select name="gender" class="select__search-gender">
          <option value="" style='display:none;' disabled selected>性別</option>
          <option value="0" @if(isset( $request ) && $request['gender'] == 0) selected @endif>全て</option>
          <option value="1" @if(isset( $request ) && $request['gender'] == 1) selected @endif>男性</option>
          <option value="2" @if(isset( $request ) && $request['gender'] == 2) selected @endif>女性</option>
          <option value="3" @if(isset( $request ) && $request['gender'] == 3) selected @endif>その他</option>
        </select>
      </div>
      <div class="div__category">
        <select name="category_id" class="select__search-category">
          <option value="" style='display:none;' disabled selected>お問い合わせの種類</option>
          <option value="0" @if(isset( $request ) && $request['category_id'] == 0) selected @endif>全て</option>
          @foreach ($categories->all() as $category)
          <option value="{{$category->id}}" @if(isset( $request ) && $request['category_id'] == $category->id) selected @endif>{{$category->content}}</option>
          @endforeach
        </select>
      </div>
      <div class="div__date">
        <input type="text" name="date" id="datepicker" class="input__search-date" placeholder="年/月/日" @if (isset( $request )) value="{{$request['date']}}"@endif>
      </div>
      <button class="button__search" formaction="/search">検索</button>
      <button class="button__reset" formaction="/reset">リセット</button>
    </form>
  </div>
  <button class="button__export">エクスポート</button>
  {{ $contacts->links('vendor.pagination.topics') }}
  <table class="table__contacts">
    <tr class="tr__header">
      <th>お名前</th>
      <th>性別</th>
      <th>メールアドレス</th>
      <th>お問い合わせの種類</th>
      <th></th>
    </tr>
    @foreach ($contacts->all() as $contact)
    <tr class="tr__contents">
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