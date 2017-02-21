<header>
  <div class="container">
    <a href="#" class="logo"><img src="{{ asset('images/logo.png') }}" width="100"></a>
    <nav class="navbar-default">
      <a href="#" class="mobilelogin" data-toggle="modal" data-target=".bs-example-modal-lg">Login/Register</a>
      <div class="navbar-header" style="float: right;">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#" class="active">Home</a></li>
          <li><a href="#">Want To Be A Coach</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact Us</a></li>
          <li class="userName Hidden">
            <div class="btn-group show-on-hover">
              <a href="#" type="button" class="dropdown-toggle" data-toggle="dropdown">
                <span id="loginData"></span>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Profile</a></li>
                <li><a href="#" onclick="loginService.logOut(event)">Logout</a></li>
              </ul>
            </div>
          </li>
          
          <li class="loginHide">
         
            <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Login </a>
           
          </li>
          <li class="loginHide">
          <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">Register</a>
          </li>
          <div class="clearfix"></div>
        </ul>
      </div>
    </nav>
  </div>
</header>

<div class="modal fade bs-example-modal-lg popupnw" id="loginmodule" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-md" role="document">
  <div id="contactModal_container" class="modal-content">
            <div class="newmodal"></div>
        </div>
    <div class="modal-content contactform"> 
    </div>
    </div>
    </div>
    <script type="text/x-underscore-template" id="scriptPostadError">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button> 
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-6 col-md-6 xs-hidden">
            <div class="leftcontenbg">
              <span><img src="images/logo.png" width="150"></span>
              <ul>
                <li>Select a Sport  </li>
                <li>Shortlist a coach whom you need to connect by location , timings and Fees</li>
                <li>Choose infrastructure and sports kits  from the preference filters , if needed</li>
                <li>Get connected with coach for trial session/training session by booking</li>
                <li>Get started with training to help the dreams of your kid</li>
              </ul>
            </div>
          </div>
              <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="panel panel-login">
              <div class="panel-heading">
                <a href="#" class="active" id="login-form-link">Login</a>
                <a href="#" id="register-form-link">Register</a>
                <hr>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">
                    <form id="login-form" role="form" style="display: block;">
                      <div class="form-group">
                        <input 
                        type="text" 
                        name="username" 
                        id="username" 
                        tabindex="1" 
                        class="form-control" 
                        onkeyup="loginService.setData('userName',this.value)"
                        value="<%= loginService.userName %>"
                        placeholder="Username" 
                        >
                      </div>
                      <div class="form-group">
                        <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        tabindex="2"
                        onkeyup="loginService.setData('password',this.value)" 
                        class="form-control" 
                        placeholder="Password">
                      </div>
                      <div class="form-group text-center">
                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                        <label for="remember"> Remember Me</label>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                            <input type="submit" name="login-submit" id="" tabindex="4" class="form-control btn btn-login" value="Log In" onclick="loginService.signIn(event)">
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="text-center">
                              <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <form id="register-form" style="display: none;">
                      <div class="form-group" >
                        <input 
                        type="text" 
                        name="username" 
                        id="username" 
                        tabindex="1" 
                        onkeyup="loginService.setData('userName',this.value)"
                        class="form-control" 
                        placeholder="Username" 
                        value=""
                        autocomplete="off">
                      </div>
                      <div class="emailWrapper form-group">
                        <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        onkeyup="loginService.setData('email',this.value)"
                        tabindex="1" 
                        class="form-control" 
                        placeholder="Email Address" 
                        value=""
                        autocomplete="off"
                        required>
                      </div>
                       <div class="error-container hide">
                <small class="email_required"> Your email is required.</small>
                <small class="email_pattern"> That is not a valid email. Please input a valid one.</small>
            </div>
                      <div class="form-group">
                        <input 
                        type="text" 
                        name="phone" 
                        id="username" 
                        onkeyup="loginService.setData('mobile',this.value)"
                        tabindex="1" 
                        class="form-control" 
                        placeholder="Mobile Number" 
                        value=""
                        autocomplete="off">
                      </div>
                      <div class="form-group">
                        <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        tabindex="2"
                        onkeyup="loginService.setData('password',this.value)" 
                        class="form-control" 
                        placeholder="Password"
                        autocomplete="off">
                      </div>
                      <div class="form-group">
                        <input 
                        type="password" 
                        name="confirm-password" 
                        id="confirm-password" 
                        tabindex="2" 
                        onkeyup="loginService.setData('confirmPwd',this.value)"
                        class="form-control" 
                        placeholder="Confirm Password"
                        autocomplete="off">
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-3">
                          <!-- <button onclick="loginService.registration();">Register Now</button> -->
                            <input type="submit" id="submit" name="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now" onclick="loginService.registration(event)">
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
</script >