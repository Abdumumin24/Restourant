<?php
include_once('baza.php');
if(isset($_POST['goo'])) {
    $email = htmlspecialchars($_POST['email']);
    $pass = md5($_POST['parol']);
    $queriy = "SELECT * FROM `admin` WHERE login = '{$email}' AND pass = '{$pass}' LIMIT 1";
    $results = $sql->query($queriy) or die ($sql->error);
    $rows = $results->fetch_object();
    if($rows->login) {
      session_start();
      $_SESSION['login'] = $rows->login ;
      header('location:index.php');
      exit();
    }
} 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  <div class="login-box">
 
 <form method="post">
   <div class="user-box">
     <input type="text" name="email" required="">
     <label>Username</label>
   </div>
   <div class="user-box">
     <input type="password" name="parol" required="">
     <label>Password</label>
   </div><center>
       
   <button name="goo"> Send
</button>
    </center>
 </form>
</div>
    
  </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style>
    body{
        background: rgba(24, 20, 20, 0.987);
    }
    .login-box {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 400px;
  padding: 40px;
  transform: translate(-50%, -50%);
  background: rgba(24, 20, 20, 0.987);
  box-sizing: border-box;
  box-shadow: 0 15px 25px rgba(0,0,0,.6);
  border-radius: 10px;
}

.login-box .user-box {
  position: relative;
}

.login-box .user-box input {
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  margin-bottom: 30px;
  border: none;
  border-bottom: 1px solid #fff;
  outline: none;
  background: transparent;
}

.login-box .user-box label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 10px 0;
  font-size: 16px;
  color: #fff;
  pointer-events: none;
  transition: .5s;
}

.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label {
  top: -20px;
  left: 0;
  color: #bdb8b8;
  font-size: 12px;
}
button {
 padding: 0.8em 1.8em;
 border: 2px solid #17C3B2;
 position: relative;
 overflow: hidden;
 background-color: transparent;
 text-align: center;
 text-transform: uppercase;
 font-size: 16px;
 transition: .3s;
 z-index: 1;
 font-family: inherit;
 color: #17C3B2;
}

button::before {
 content: '';
 width: 0;
 height: 300%;
 position: absolute;
 top: 50%;
 left: 50%;
 transform: translate(-50%, -50%) rotate(45deg);
 background: #17C3B2;
 transition: .5s ease;
 display: block;
 z-index: -1;
}

button:hover::before {
 width: 105%;
}

button:hover {
 color: #111;
}


</style>