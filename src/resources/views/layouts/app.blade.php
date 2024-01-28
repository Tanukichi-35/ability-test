<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=Noto+Sans+JP&display=swap" rel="stylesheet">   
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/common.css') }}" />
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <button class="button__dummy" id="button__dummy"></button>
      <h2 class="header__logo">
        FashionablyLate
      </h2>
      <button class="button__register" id="button__register">register</button>
      <button class="button__login" id="button__login">login</button>
      <button class="button__logout" id="button__logout">logout</button>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>