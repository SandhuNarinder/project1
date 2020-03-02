<!--SandhuNarinder-->
<?php
// start the session
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Store</title>
    <meta charset="utf-8">
	<!-- Add bootstrap in the file-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<body style="background-color:#ffffcc">
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
<body>
<div class="heading">
            <h1 style="color:#4d2600"><strong>Online BookShop</strong></h1>
        </div>
		<!--create nav bar -->
<div class="container">
     <ul>
			<li class="nav-item">
					<a class="nav-link active" href="store.php">Collections</a>
					</li>
                <li class="nav-item">
                    
					<a class="active" href="index.php"> Home</a>
                </li>
                </ul>
        </div>
    </div>
<div class="products">
        <div class="container">
            <div class="products-grids">
                <div class="col-md-8 products-grid-left">
                    <div class="products-grid-lft">
                        <u>
                            <h1 style="text-align: center; font-family: Times; font-size: 4em; color:#4d2600" >Novel Collection</h1>
                        </u><br><br>
						 <?php
						 //require the file mysqli_connect
                        require('mysqli_connect.php');
						
						$q =  "SELECT * FROM bookinventory";
						// select the data from bookinventory table
                        $r  = mysqli_query($dbc, $q);
                        
						$id = 'book_id';
						$name = 'book_name';
						$aname = 'author_name';
						$desc = 'book_description';
						$price = 'price';
						$quantity = 'quantity';
						$image = 'image';

						$form = "";
						
						if(mysqli_num_rows($r) > 0) {
							// check the number of rows from database

						while($row = mysqli_fetch_array($r)) {
							// loop for fetch the data
								$id = $row['book_id'];
								$name = $row['book_name'];
								$aname = $row['author_name'];
								$desc = $row['book_description'];
								$price = $row['price'];
								$quantity = $row['quantity'];
								$image = $row['image'];

								// create the form to display the novel collection

								$form .= "<div class='products' style='color:#4d2600'>
								<div class='pname' style='text-align:center;'>
				                <u><h4><strong>$name</strong></h4></u><br>
								</div>
								<div class='ppic' style='text-align:center;'>
								<img src=$image class='Img' style='height:80%; width:50%'>
								</div><br>
								<div class='paname' style='text-align:center;'>
				                <u><h4><strong>$aname</strong></h4></u><br>
								</div>
								<div class='pdesc' style='text-align:center;'>
				                <p>$desc</p>
								</div><br>
                                                
                                <div class='pprice' style='text-align:center;'>
				                <p>Price: $price</p><br>
								</div>
												
                                <div class='pquantity' style='text-align:center;'>
				                <p>Remaining Stock: $quantity</p>
								</div><br>
						submit button to 						
				<div class='buyform' style='text-align:center;'>
				<a href='checkout.php?wid=$id'>
				<input type='submit' style='background-color:#4d2600; color:#e6ffcc;' name='submit' value='Buy Now'>
				</a>
				</div><br>
				</div>
				<hr>";// submit button for submitting the data to the next page
       }
				echo $form;
       }
						?>
                        <div class='posts_area'></div>
                    </div>
                </div>
            </div>
        </div>
	</div>
	
	<footer class="py-5 bg-dark">

    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Online BookShop 2020</p>
    </div>
	
</body>

</html>