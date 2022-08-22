<html>

    <head>
        <link rel="stylesheet" href="css/regis.css">
        <title>
            User--Register page
        </title>
    </head>
    <script>
                 function myfun(){
                    var a=document.getElementById("pwd1").value;
                    var b=document.getElementById("pwd2").value;
                    var c=document.getElementById("phno1").value;
                    var d=document.getElementById("phno2").value;
                    var e=document.getElementById("age").value;
                    var e=document.getElementById("email").value;
                    var e=document.getElementById("name").value;
                    if(email==''){
                        document.getElementById("error").innerHTML="*please fill the mail id ";
                        return false
                    }
                   
                    }
                    if(age>=80){
                        document.getElementById("error").innerHTML="*Not Eligible";
                        return false;
                    }
                   
                    if(c==""){
                        document.getElementById("error").innerHTML="*Please fill the phnumber";
                        return false;

                    }
                    if(c.length!=10){
                        document.getElementById("error").innerHTML="*please enter correct number";
                        return false;

                    }
                    if(d==""){
                        document.getElementById("error").innerHTML="*please fill the phno";
                        return false;

                    }
                    if(d.length!=10){
                        document.getElementById("error").innerHTML="*please enter the correct number";
                        return false;

                    }
                    if(a==""){
                        document.getElementById("error").innerHTML="*Please fill the password";
                        return false;
                    }
                   
                    if(a.length<=7)
                     { 
                        document.getElementById("error").innerHTML="*minimum 8 characters only allowed ";
                        return false;

                     }
                     
                     if(a.length>=20)
                     { 
                        document.getElementById("error").innerHTML=" *maximum 16 characters only allowed ";
                        return false;
                     }
                     
                     if(b==""){
                        document.getElementById("error").innerHTML="*Please fill the password";
                        return false;
                    }
                    
                    if(b.length<7)
                     { 
                        document.getElementById("error").innerHTML="*minimum 8 characters only allowed ";
                        return false;

                     }
                     
                     if(b.length>20)
                     { 
                        document.getElementById("error").innerHTML=" *maximum 16 characters only allowed ";
                        return false;
                     }
                    
                     if(a!=b){
                        document.getElementById("error").innerHTML="* password doesn't match";
                        return false;
                     }

                    
                 }
    </script>
    <body><div id="main">
    <div >
            <nav class="nav">
                <ul class="bar">
                    <li ><a href="home.html" >HOME</a></li>
                    <li ><a href="login.php" >LOGIN</a></li>
                    <li ><a href="#">CONTACT</a></li>
                    <li ><a href="#">ABOUT US</a></li>
            </nav>
        </div>
        <div >
        <div class="display">
        <form  action="dbcon.php" method="post">
            <div class="login">
            <div class="pass">
                <input type ="name" id="name" name="name" class="textbox"  placeholder="Enter Your Name"  required >
                <input type ="number" class="textbox2"  id="age" name="age" maxlength="3" placeholder="Enter Your Age" required>
            </div>
            <div class="pass">
                <input type="email" class="textbox" id="email" name="email" placeholder="EmailId"  required>
                <input type="date" class="textbox2" name="dob" id="dob"  placeholder="Select Your DoB"  required>
            </div>
            <div class="pass">
                    <input type ="password" class="textbox" name="password1"id="pwd1" value="" placeholder="Create Your Password" required>
                    <input type ="number" class="textbox2" name="number1" id="phno1" maxlength="10" placeholder="Enter Your Number"required>
            </div>
            <div class="pass">
                    <input type="password" class="textbox" id="pwd2" name="password2" value=""  placeholder="Confirm Your Password"  required>
                    <input type="number" class="textbox2" id="phno2"name="number2" placeholder="Alternate Number" maxlength="10"  required>
            </div>
            <p id="error" class="error"> 
                 
            </p>
            <div >
                <input type="Submit" class="submit" onclick="return myfun()" value="REGISTER">
            </div>
            </div>
        </form>
        <div class="eu">
                  <h2> Already Have An Account!<a class="a1"  href="login.php"> Login </a></h2>
        </div>
        </div>
</div>
</div>
    </body>
</html>