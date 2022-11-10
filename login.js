<!DOCTYPE html>
<html>
<head>
  <title></title>
  
<style type="text/css">
  form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #82172B;
   
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #D9D9F3;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 20%;
    border-radius: 20%;
    float: center;
}

/* Add padding to containers */
.container {
    padding: 6px;
    float: center;
}

/* The "Forgot password" text */
span.psw {
    float: left;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}
h2,p{
font-family: "Snell Roundhand", cursive;}
</style>
</head>
<body background="ct.jpg">


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <form class="modal-content animate" method="post" action="index1.php">
    <div class="imgcontainer">
      <img src="tbb.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <p><label for="uname"><b>Mail-id</b></label></p>
      <input type="text" placeholder="Enter Username" name="uname" required >

      <p ><label for="psw"><b>Password</b></label></p>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit"><p style="color: white">Login</p></button>
     
    </div>

    
  </form>
  <button type="sign"><a href="signup.html"><p style="color: white">Sign up</p></a></button>
</div>
<div class="container">
  <form method="post" action="store.php">
    <button type="submit"><p style="color: white">Movie details</p></button>
    
  </form>
</div>

</body>
</html><!-- Button to open the modal login form -->
