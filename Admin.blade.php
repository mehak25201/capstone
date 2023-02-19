

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Login Panel</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"  href="{{asset('cssfile/admin.css')}}"> 
   
   
  
</head>
<body>
<div class="login-form">
    <h1>ADMIN LOGIN PANEL</h1>
    <form action='insertD'>
    <form mehod='Post'>
        <div class="input-field">
        <i class="fa fa-user"></i>
            <input type="text" placeholder="AdminName" name="AdminName">
        </div>
        <div class="input-field">
        <i class="fa fa-lock"></i>
            <input type="password" placeholder="Password" name="Password">
        </div>

        <button type='submit'name='Signin'>Sign In</button>
        <div class="extra">
            <a href="#">Forgot Password ?</a>
        </div>
    </form>
    
</body>
</html>