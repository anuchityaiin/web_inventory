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
            <form class="form-regis" id="form_register" action="submit/register" method="post">
            <h3 class="form-regis-heading">Register</h3>
            
            <div class="control-group" id="control_err_u">
                <div class="controls">
                  <input type="text" id="username" placeholder="Username" class="input-append">
                  <span class="help-inline" id="err_u"></span>
                </div>
            </div> 
            
            <div class="control-group" id="control_err_p">
                <div class="controls">
                  <input type="text" id="password" placeholder="Password" class="input-append">
                  <span class="help-inline" id="err_p"></span>
                </div>
            </div>
            
            <input type="password" class="input-block-level" placeholder="Re-Password" id="repassword" name="repassword">
            <input type="text" class="input-block-level" placeholder="Name" id="name" name="name">
            <input type="text" class="input-block-level" placeholder="Lastname" id="lastname" name="lastname">
            <input type="text" class="input-block-level" placeholder="Address" id="address" name="address">
            <input type="email" class="input-block-level" placeholder="E-mail" id="email" name="e-mail">
            <input type="text" class="input-block-level" placeholder="Phone" id="phone" name="phone">
            <select class="input-block-level" data-provide="typeahead" placeholder="City" id="city" name="City">
                <option >Thailand</option>
            </select>
            <div id="below" class="pull-right"><a href="login"><span class="label label-primary">Login</span></a>
                 | <a href="#"><span class="label label-warning">ลืมรหัสผ่าน</span></a>
                </div>
            <br/><br/>
            <button class="btn btn-large btn-success " type="submit" id="lef-but">Register</button>         
          </form>
        </div>
        <div id="res"></div>
        <script src="js/jquery.js"></script>
        <script src="js/models/constants.js"></script>
        <script src="js/models/register.js"></script>
        <script>          
            var regis = new register();
            $(document).ready(function(){
                $('#username').keyup(function(){
                    $('#control_err_u').removeClass('error');
                });
                $('#password').keyup(function(){
                    $('#control_err_p').removeClass('error');
                });
                
                $('#form_register').submit(function(){
                    var username = $('#username').val();
                    var password = $('#password').val();
                    var repassword = $('#repassword').val();
                    var name = $('#name').val();
                    var lastname = $('#lastname').val();
                    var address = $('#address').val();
                    var email = $('#email').val();
                    var phone = $('#phone').val();
                    var city = $('#city').val();
                    
                    if(username!='' || username!=' ')
                    var re = regis.submitRegister({
                        'username'  :username,
                        'password'  :password,
                        'repassword':repassword,
                        'name'      :name,
                        'lastname'  :lastname,
                        'address'   :address,
                        'email'     :email,
                        'phone'     :phone,
                        'city'      :city
                    });
                    
                    
                    if(!username.res){
                        $('#err_u').html('<span class="icon-exclamation-sign"></span> ' + username.data.msg);
                        $('#control_err_u').addClass('error');
                        return false;
                    }
                    else{
                        $('#control_err_u').removeClass('error');
                    }
                    
                    if(!password.res){
                        $('#err_p').html('<span class="icon-exclamation-sign"></span> ' + password.data.msg);
                        $('#control_err_p').addClass('error');
                        return false;
                    }
                    else{
                        
                    }
                    return false;
                });             
            });
            
            function errorRegister(t,msg,b){
                if(b){
                    $('#err_'+t).html('<span class="icon-exclamation-sign"></span> '+msg);
                    $('#control_err_'+t).addClass('error');
                }
                else{
                    $('#control_err_'+t).removeClass('error');
                }                
            }
        </script>
    </body>
</html>