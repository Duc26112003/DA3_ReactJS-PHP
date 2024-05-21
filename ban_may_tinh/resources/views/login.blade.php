<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{ asset('./css/style2.css') }}" />
    <!-- font roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet" />
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var errMessage = "{{ session('email') }}";
            if (errMessage) {
                alert(errMessage);
            }
        });
    </script>
</head>

<body>
    <form action="{{ route('login.authenticate') }}" method="POST" class="vid-container">
        @csrf
        <img class="bgvid"
            src="https://images.unsplash.com/photo-1425321395722-b1dd54a97cf3?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop="
            alt="Background image">
        <div class="inner-container">
            <img class="bgvid inner"
                src="https://images.unsplash.com/photo-1425321395722-b1dd54a97cf3?dpr=1&auto=format&fit=crop&w=1500&h=1000&q=80&cs=tinysrgb&crop="
                alt="Background image">
            <div class="box">
                <h1>Login</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input type="text" name="email" placeholder="email" />
                <input type="password" name="password" placeholder="password" />
                <button type="submit">Login</button>
                <p>Not a member? <a href="{{ route('register') }}">Sign Up</a></p>
            </div>
        </div>
    </form>
</body>

</html>
