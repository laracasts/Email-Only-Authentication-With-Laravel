<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Example</title>

    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/login.css">
</head>
<body>

<div class="container">

    <!-- Example login form from Twitter Bootstrap's website. Modify as needed. -->

    <form method="POST" class="form-signin">
        <h2 class="form-signin-heading">
            Please Sign In
        </h2>

        {{ csrf_field() }}

        <label for="inputEmail" class="sr-only">Email Address</label>

        <input name="email"
               type="email"
               id="inputEmail"
               class="form-control"
               placeholder="Email address"
               required
               autofocus>

        <button class="btn btn-lg btn-primary btn-block"
                type="submit"
        >
            Sign In
        </button>
    </form>

</div>

</body>
</html>