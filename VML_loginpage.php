<!DOCTYPE html>
<html>
<head>
    <title>VML-Login</title>
    <link rel="icon" type="image/png" href="img/gear00.PNG">
    <link rel="stylesheet" media="screen and (min-width: 600px)" href="style.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="mobile.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="login_formValidation.js"></script>
</head>

<body>

  <div class="row header_2">
    <div class="col-1 col-m-3 header_img">
        <img src="img\gear00.PNG" width="100%">
    </div>
    <div class="col-3 col-m-9 header_text_2">
        <p>VEHICLE MAINTENANCE LOG</p>
    </div>

    <div class="col-8 col-m-12 navigation">
        <a href = "VML_signup.html">
          <div class="col-3 col-m-3 navigation_logout_div">
            <p class="navigation_links" >Sign Up</p>
          </div>
        </a>
        <a href = "#login_footer">
          <div class="col-3 navigation_links_div" id="nav_link_4">
            <p class="navigation_links">Contact</p>
          </div>
        </a>
        <a href = "About.php">  
          <div class="col-3 col-m-3 navigation_links_div">
            <p class="navigation_links">About Us</p>
          </div>
        </a>
        <a href = "index.php">
            <div class="col-3 col-m-3 navigation_links_div">
                <p class="navigation_links">Home</p>
            </div>
        </a>
    </div>
</div>

<div class="signup_main">
  <div class="signup_top">
    <p><b>LOGIN</b></p>
  </div>
    <div class="signupcontainer">
        <form action="login.php" name="login_form" method="POST" onsubmit="return(validate_login());">
            <div class="signup_sub">
                <div class="signup_sub1">
                    <lable>Username</lable>
                </div>
                <div class="signup_sub2">
                    <input class="data_forms_input" name="username" type="text" placeholder="Username">    
                </div>
            </div>
            <div class="signup_sub">
                <div class="signup_sub1">
                    <lable>Password</lable>
                </div>
                <div class="signup_sub2">
                    <input class="data_forms_input" name="psw" type="password" placeholder="Password">    
                </div>
            </div>
            
            <div class="signup_sub">
                <div class="signup_cancel_btn_div">
                    <a href="index.php"><input type="button" class="signupbtn" value="Cancel"></a>
                </div>
                <div class="signup_submit_btn_div">
                    <button type="submit" class="signupbtn" name="login_btn">Login</button>
                </div>
            </div>

            <div class="signup_sub">
                <p class="already_acc_text"><b>Don't have an account?</b> <a href="VML_signup.html">Sign Up</a></p>
            </div>

            <div class="signup_sub">
                <p class="already_acc_text"><b>Admin Portal: </b> <a href="AdminLoginPage.html">Click Here!</a></p>
            </div>

        </form>
    </div>
</div>


    <div class="row footer" id="login_footer">
      <div class="col-7 col-m-12 footer_sub_div">
          <div class="footer_left">
              <div class="col-1 col-m-1">
                  <img src="img/location.png" width="70%">
              </div>
              <div class="col-11 col-m-11">
                  <p>G-10/2, Islamabad</p>
              </div>
          </div>
          <div class="footer_left">
              <div class="col-1 col-m-1">
                  <img src="img/phone.png" width="70%">
              </div>
              <div class="col-11 col-m-11">
                  <p>+92 336 57xxxxx</p>
              </div>
          </div>
          <div class="footer_left">
              <div class="col-1 col-m-1">
                  <img src="img/email.png" width="70%">
              </div>
              <div class="col-11 col-m-11">
                  <p>support.vml@gmail.com</p>
              </div>
          </div>
      </div>
      <div class="col-5 col-m-12 footer_sub_div">
          <div class="footer_right">
              <div class="footer_links col-2 col-m-2">
                  <a href="https://web.facebook.com/?_rdc=1&_rdr"><img src="img/fb2.png" width="60%"></a>
              </div>
              <div class="footer_links col-2 col-m-2">
                  <a href="https://www.instagram.com/accounts/login/"><img src="img/insta2.png" width="60%"></a>
              </div>
              <div class="footer_links col-2 col-m-2">
                  <a href="https://twitter.com/login"><img src="img/twitter2.png" width="60%"></a>
              </div>
          </div>
      </div>
      <div class="col-12 col-m-12 footer_bottom">
          <p><i>(c) Copyright 2018-2025. All rights reserved.</i></p>
      </div>
  </div>

</body>
</html>