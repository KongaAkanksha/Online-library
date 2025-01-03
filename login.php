<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <section class="header">
        
        <div class="text-box" id = "signIn">
            <center> 
            <h2> LOGIN </h2> 
        
            <form method="post" action="register.php" onsubmit="return valid()">
              
                <div class="container">
                  <label for="email"><b>Email</b></label>
                  <input type="text"  placeholder="Enter Email" name="email" id="email" required><br>
              
                  <label for="psw"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw2" id="psw2" required>
                      
                  <br>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
                </div>
              
                <div class="container">
                    <button type="submit" class="submitbtn" name="signIn">Login</button>
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw" >New User<br><a href="create_acc.php" style="color:rgb(255, 255, 255);">Sign up</a></span>
                </div>
              </form>
            </center>
        </div>
    </section>
    <script>
      function valid() {
          var email = document.getElementById("email").value;
          var psw = document.getElementById("psw2").value;
          
        //   if(psw.length < 5){
        //       alert("Password length must be at least 5 characters");
        //       return false;
        //   }
          if (email == "" || psw2 == "") {
              alert("Username and Password must be filled out");
              return false;
          }
      }
  </script>
</body>
</html>