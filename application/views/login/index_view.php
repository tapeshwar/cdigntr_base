
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="loginbox-title">LOG IN</div>
            <br/>
            <form method="post" id="user_login_form" data-url="<?=base_url('login/user_login')?>">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username/Email" name="username" required />
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password" required/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="loginbox-forgot">
                    <a href="#">Forgot Password?</a>
                </div>
                <div>
                    <input type="submit" class="btn btn-primary btn-block user_login_btn" value="Login">
                </div>
            </form>
            <!-- <div class="loginbox-signup">
                <a href="register.html">Sign Up With Email</a>
            </div> -->
        </div>
        
    </div>

