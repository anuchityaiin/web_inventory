<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/style.css">
        <style></style>

    </head>
    <body>
        <div class="container">
            <form class="form-signin" method="post" action="submit/login" >
            <h2 class="form-signin-heading">Login</h2>
            <input type="text" class="input-block-level" placeholder="Username" name="username">
            <input type="password" class="input-block-level" placeholder="Password" name="password">
                <div id="below" class="pull-right"><a href="register"><span class="label label-success">Register</span></a>
                 | <a href="#"><span class="label label-warning">ลืมรหัสผ่าน</span></a>
                </div><br><br>
            <button class="btn btn-large btn-primary" type="submit">Sign in</button>
          </form>
        </div>
        <script src="js/jquery.js"></script>
    </body>
</html>