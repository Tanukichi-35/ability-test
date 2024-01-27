@extends('layouts.app')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
@endsection

@section('content')
<div class="div__main">
  <h2 class="h2__confirm">Confirm</h2>
  <form action="/store" method="POST" class="form__confirm">
    @csrf
    <table class="table__confirm">
      <tr>
        <th>お名前</th>
        <td>{{$contact['last_name']}}  {{$contact['first_name']}}</td>
      </tr>
      <tr>
        <th>性別</th>
        <td>{{$contact['gender']}}</td>
      </tr>
      <tr>
        <th>メールアドレス</th>
        <td>{{$contact['email']}}</td>
      </tr>
      <tr>
        <th>電話番号</th>
        <td>{{$contact['tell_1']}}-{{$contact['tell_2']}}-{{$contact['tell_3']}}</td>
      </tr>
      <tr>
        <th>住所</th>
        <td>{{$contact['address']}}</td>
      </tr>
      <tr>
        <th>建物名</th>
        <td>{{$contact['building']}}</td>
      </tr>
      <tr>
        <th>お問い合わせの種類</th>
        <td>{{$categories[$contact['category_id']-1]->content}}</td>
      </tr>
      <tr>
        <th>お問い合わせ内容</th>
        <td>{{$contact['detail']}}</td>
      </tr>
    </table>
    <div class="div__button">
      <input name="last_name" value="{{$contact['last_name']}}" hidden>
      <input name="first_name" value="{{$contact['first_name']}}" hidden>
      <input name="gender" value="{{$contact['gender']}}" hidden>
      <input name="email" value="{{$contact['email']}}" hidden>
      <input name="tell_1" value="{{$contact['tell_1']}}" hidden>
      <input name="tell_2" value="{{$contact['tell_2']}}" hidden>
      <input name="tell_3" value="{{$contact['tell_3']}}" hidden>
      {{-- <input name="tell" value="{{$contact['tell_1']}}-{{$contact['tell_2']}}-{{$contact['tell_3']}}" hidden> --}}
      <input name="address" value="{{$contact['address']}}" hidden>
      <input name="building" value="{{$contact['building']}}" hidden>
      <input name="category_id" value="{{$contact['category_id']}}" hidden>
      <input name="detail" value="{{$contact['detail']}}" hidden>
      <button class="button__submit" >送信</button>
      <button class="button__correct" name='back' value="back">修正</button>
    </div>
  </form>
</div>
@endsection