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
            <form class="form-regis" action="submit/register" method="post">
            <h3 class="form-regis-heading">Register</h3>
            <input type="text" class="input-block-level" placeholder="Username" name="username">
            <input type="password" class="input-block-level" placeholder="Password" name="pass">
            <input type="password" class="input-block-level" placeholder="Re-Password" name="repass">
            <input type="text" class="input-block-level" placeholder="Lastname" name="lastname">
            <input type="text" class="input-block-level" placeholder="Address" name="address">
            <input type="text" class="input-block-level" placeholder="E-mail" name="e-mail">
            <input type="text" class="input-block-level" placeholder="Phone" name="phone">
            <select class="input-block-level" data-provide="typeahead" placeholder="City" name="City">
                <option >Thailand</option>
            </select>
            <div id="below" class="pull-right"><a href="login"><span class="label label-primary">Login</span></a>
                 | <a href="#"><span class="label label-warning">ลืมรหัสผ่าน</span></a>
                </div>
            <br/><br/>
            <button class="btn btn-large btn-success " type="submit" id="lef-but">Register</button>         
          </form>
        </div>
        <script src="js/jquery.js"></script>
    </body>
</html>