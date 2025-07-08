<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
  <link rel="stylesheet" href="{{asset('css/common.css')}}">
  @yield('css')
  

  <title>FashionablyLate</title>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <div class="header__title">
        <h1>FashionablyLate</h1>
      </div>
      <div class="link-button">
        @yield('link-button')
      </div>

    </div>
  </header>
  <main>
    @yield('content')
  </main>
</body>

</html>