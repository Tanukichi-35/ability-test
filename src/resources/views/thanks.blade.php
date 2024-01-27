<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Todo App</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
  <div class="div__thanks">
    <div class="div__front">
      <h2 class="h2__thanks">お問い合わせありがとうございました</h2>
      <form action="/" method="get">
        @csrf
        <button class="button__home">HOME</button>
      </form>
    </div>
    <p class="p__thanks">Thank you</p>
  </div>
</body>

</html>