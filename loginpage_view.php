
<html lang = "en">
   
   <head>
      <title>Login page</title>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      
      <style>

         body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-size: contain;

            background-image: url("tinderbox2.jpg");
         }

         .loginlogo {
            width: 250px;
            text-align: center;
            margin-left: auto; 
            margin-right: auto;
            padding-bottom: 65px;
         }

         .tinderboxletter {
            width: 250px;
         }

         .logbutton {
            width: 90%;
            height: 70px;
            border-radius: 10px;
            font-size: 32px;
            background-color: #FFD962;
         }
         
         .form-signin {
            padding: 15px;
            margin: 0 auto;
            color: #017572;
            text-align: center;
         }
         
         .form-signin .form-signin-heading,
         .form-signin .checkbox {
            margin-bottom: 10px;
         }
         
         .form-signin .checkbox {
            font-weight: normal;
         }
         
         .form-signin .form-control {
            position: relative;
            height: 65px;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 32px;
            border-radius: 10px;
            margin-bottom: 10px;
            width: 80%;

         }

         input {
            background-color: #FFF9F4 !important;
         }
         
         .form-signin .form-control:focus {
            z-index: 2;
         }
         
         .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            border-color:#FFF9F4;
            background-color: #FFF9F4 !important;
         }
         
         .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-color:#FFF9F4;
            background-color: #FFF9F4 !important;

         }
         
         h2{
            text-align: center;
            color: #017572;
         }
      </style>
      
   </head>
   
   <body>
      
      <div class = "container form-signin">
         
      </div> <!-- /container -->
      
      <div class = "container">
         <div class="loginlogo">
            <img src="tinderboxletter.png" alt="tinderboxletter" class="tinderboxletter">
         </div>
         <form class = "form-signin" role = "form" 
            action = "/codeigniter/usertinder" method = "post">
           <!-- <h4 class = "form-signin-heading"><?php echo $msg; ?></h4> -->
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = tinderbox" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
               </br>
            <button class = "btn btn-lg btn-primary btn-block logbutton" type = "submit" 
               name = "login">Login!</button>
         </form>
         
         
      </div> 
      
   </body>
</html>