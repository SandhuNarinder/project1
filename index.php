<!--SandhuNarinder-->
<!DOCTYPE html>
<html>

<head>
<title>Online BookShop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style> 
ul {
  list-style-type: none;
  margin: 0;
  padding: 5;
  overflow: auto;
  background-color: #4d2600;
}

li {
  float: right;
}

li a {
  display: block;
  color: #ffd480;
  text-align: center;
  padding: 18px 30px;
  font-size:18px;
  text-decoration: none;
  
}

li a:hover {
  background-color: #4d2600;
}

.heading {
  text-align: center;
  padding: 30px;
  color:#4d2600;
  font-family:serif;

}
</style>
    
</head>
<body style="background-color:#e6ffcc">
    

<div class="heading">
            <h1 style="color:#4d2600"><strong>Online BookShop</strong></h1>
        </div>
    <div class="container">
        <ul >
            <li class="nav-item">
                    <a class="nav-link active" href="store.php">Collections</a>
                </li>
                <li class="nav-item">
                    
					<a class="active" href="index.php">Home</a>
                </li>
                </ul>
        </div>
    </div>
 <div class="container">
<!-- image for the home page-->
            <div style="padding-bottom:10px;" class="text-center">
               <br><br><br> <img src="images/store.jpg" alt="store" height="85%" width="85%"> <br><br><br><br><br>           
            <div style="padding-bottom:20px; padding-left:400px;" class="justify-content-center">
               <b> <a href="store.php"><input type="button" style="color:#4d2600; background-color:#ffd480" name="store" style ="text-align:center" value="See Our New Collection" class="btn-dark col-lg-3"></a></b>
                <br><br><br><br>
            </div>
        </div>
    </div>
    <footer class="py-5 bg-dark">

    <div class="container">
        <p class="m-0 text-center text-white" style="color:#4d2600">Copyright &copy; Online BookShop 2020</p>
    </div>

</footer>

</body>

</html>
