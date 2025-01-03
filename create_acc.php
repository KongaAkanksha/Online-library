<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title><link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ysabeau+Infant:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
</head>
<body>
    <script>
        function data() {
            var a = document.getElementById("uname").value;
            var b = document.getElementById("email").value;
            var c = document.getElementById("psw1").value;
            var d = document.getElementById("psw2").value;

            if (a == "" || b == "" || c == "" || d == "") {
                alert("Cannot be empty");
                return false;
            }
            else if(a.length < 5){
                alert("username too short!!");
                return false;
            }
            else if(a.length > 20){
                alert("username too long");
                return false;
            }
            else if (!b.match(/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/)) {
                alert("Enter valid email");
                return false;
            }
            else if (c != d) {
                alert("Passwords do not match");
                return false;
            }
            else {
                return true;
            }
        }

    </script>
    <section class="header">
        
        <div class="text-box" id = "signUp">
            <center> 
            <h2> CREATE AN ACCOUNT</h2> 
        
            <form method="post" action="register.php" onsubmit="return data();">
              
                <div class="container">
                  <label for="uname"><b>Username &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b></label>
                  <input type="text"  placeholder="Enter Username" id="uname" name="uname" required><br>
              
                  <label for="email"><b>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b></label>
                  <input type="text" placeholder="Email" id="email" name="email" required><br>
                  
                  <label for="psw1"><b>Password &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</b></label>
                  <input type="password" placeholder="Enter Password" id="psw1" name="psw1" required><br>

                  <label for="psw2"><b>Confirm Password &nbsp</b></label>
                  <input type="password" placeholder="Confirm Password" id="psw2" name="psw2" required>

                </div>
                <div class="container">
                    <button type="submit" class="submitbtn" name="signUp">Create</button>
                    <span class="psw" >Already have an account<br><a href="login.php" style="color:rgb(255, 255, 255);">Sign in</a></span>
                </div>
                
              </form>
            </center>
        </div>
    </section>
</body>
</html>
