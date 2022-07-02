<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.1/assets/img/favicons/favicon.ico">

    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.1/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

</head>



<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-3">

            <body class="text-center">

                <form class="form-signin" method="POST" action="register-user.php">
                    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                    <label for="inputEmail" class="sr-only">Name</label>
                    <input type="text" id="inputName" class="form-control mb-3" placeholder="Name" name="name">
                    <label for="inputPassword" class="sr-only">Email</label>
                    <input type="text" id="inputEmail" class="form-control mb-3" placeholder="Email" name="email">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Pwd" name="pwd">
                    <label for="inputPassword" class="sr-only">Verify Password</label>
                    <input type="password" id="inputVerPassword" class="form-control mb-3" placeholder="VerPwd" name="verPwd">
                    <div class="checkbox mb-3">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
                </form>
            </body>
        </div>
    </div>


</div>

</html>