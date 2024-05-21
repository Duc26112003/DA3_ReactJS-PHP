<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('./css/style2.css')}}"/>
    <!-- font roboto -->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
<body>
  <form action="{{ route('register') }}" method="post">
    @csrf
    <div class="vid-container">
      <img class="bgvid" src="https://images.unsplash.com/photo-1425321395722-b1dd54a97cf3?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
      <div class="inner-container">
        <img class="bgvid inner" src="https://images.unsplash.com/photo-1425321395722-b1dd54a97cf3?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop=" />
        <div class="box">
          <h1>Register</h1>
          <input type="email" placeholder="Email" name="email" required/>
          <input type="text" placeholder="FullName" name="name" required/>
          <input type="password" placeholder="Password" name="password" required/>
          <button type="submit">Register</button>
          <p>Already a member? <a href="{{ route('login') }}">Log in</a></p>
        </div>
      </div>
    </div>
  </form>
</body>
  <script src="./Js/Js/register.js"></script>
</html>