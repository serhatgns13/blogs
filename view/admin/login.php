<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title><?php echo $title ?></title>
    <!-- Bootstrap core CSS -->
    <link href="/view/admin/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    <link href="/view/admin/assets/css/login.css" rel="stylesheet">


</head>

<body class="text-center">

    <main class="form-signin">

        <form action="/admin/login" method="post">
            <img class="mb-4" src="/view/admin/assets/images/login.png" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal">Lütfen giriş yapın</h1>

            <?php if (!empty($error)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error; ?>
                </div>
            <?php endif; ?>

            <div class="form-floating">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">E-posta</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Şifre">
                <label for="floatingPassword">Şifre</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Beni hatırla
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Giriş Yap</button>
            <p class="mt-5 mb-3 text-muted">&copy; <?php echo date("Y"); ?></p>
        </form>
    </main>


</body>

</html>