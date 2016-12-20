<!doctype html>
<html lang="en">
<head>
    <title>Worn</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/nav-style.css">
    <link rel="stylesheet" href="css/form-style.css">
    <script src="/js/worn.js"></script>
    
    
</head>
<body>
   <div class="top">
       <div class="menu" onclick="myFunction(this)">
          <div class="hamburger">
              <div class="bar1"></div>
               <div class="bar2"></div>
               <div class="bar3"></div>
          </div>
           
              <div class=nav id="nav">
                <a href="/overview">Producten</a>
                <a href="/shoppingcart">Winkelkar</a>
                <a href="/login">Login</a>
                <a href="/register">Registreer</a>
            </div>   
       </div>
    
       <a href="/" class="logo"></a>
       
   
        
    </div>

@yield('content')

</body>
</html>