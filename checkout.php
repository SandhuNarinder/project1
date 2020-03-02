<!--SandhuNarinder--><?php 
//connect with the mysqli_connection
    require('mysqli_connect.php');
	$error = array();

	if(isset($_GET['wid'])) {
        // check the condition and get the id
       
		$wid = '';
        $book_name = '';
        $book_price = '';
        $book_img = '';		
		$wid = $_GET['wid'];
	
        $q = "SELECT * FROM bookinventory WHERE book_id = $wid";//select the data from bookinventory table
		$r = mysqli_query($dbc, $q);
        echo mysqli_error($dbc);
        $db_form_query_results = mysqli_fetch_array($r);// fetch the data from the array
    

		$book_name = $db_form_query_results['book_name'];
		$book_price = $db_form_query_results['price'];
		$book_img = $db_form_query_results['image']; 
	}

echo mysqli_error($dbc);
// Post the data 
    if(isset($_POST['submit']))
    {
    	$firstname = $_POST['firstname'];
    	$lastname = $_POST['lastname'];
    	$payment = $_POST['payment'];          
        // check the data strings are not empty and check the length
        if(empty($firstname) || strlen($firstname) == 0) {
 			array_push($error, "Go back to store page to make selection again and then fill the following things in the form.Please enter your firstname<br><br>");
    	} else {// sanitize the user input
        	$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
   		}
		if(empty($lastname) || strlen($lastname) == 0) {// check the data strings are not empty and check the length
 			array_push($error, "Go back to store page to make selection again and then fill the following things in the form.Please enter your lastname<br><br>");
    	} else {// sanitize the user input
        	$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
   		}
           // check the data strings are not empty and check the length
		if(empty($payment) || strlen($payment) == 0) {
			array_push($error, "Please choose a payment method <br><br>");
		} else {// sanitize the user input
			$payment = filter_var($_POST['payment'], FILTER_SANITIZE_STRING);
		}// 
		$bookID = $_POST['id'];
       
	 	
        
        if(empty($error))// check for errors 
	 	{
             // insert the data into users table 
	 		$q = "INSERT INTO users VALUES ('','$firstname','$lastname','$payment')";
	 		$insert_query = mysqli_query($dbc,$q);
            echo mysqli_error($dbc);

            // select the data from bookinventory table 
	 		$query = mysqli_query($dbc, "SELECT * FROM bookinventory WHERE book_id = $bookID");
	 		$details = mysqli_fetch_array($query);
             $quantity = $details['quantity'];
             // select the quantity and then decrease as -1 

             $newQuantity = $quantity - 1;
             
                // update the table data
	 		$update = mysqli_query($dbc,"UPDATE bookinventory SET quantity = '$newQuantity' WHERE book_id='$bookID'");

	 		header("Location: success.php");
	 	}
        else{
            // loop over  for check the errors 
	 		foreach ($error as $key => $value) {
	 			echo $value;
	 		}
             
             
	 	}
	}

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


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
<div class="heading">
            <h1 style="color:#4d2600"><strong>Online BookShop</strong></h1>
        </div>

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


        <!--create form for the user inputs -->
    <div class=" text-center"><br><br>
        <div class='img_disp' style=" height: 20%; width: 100%; ">
            <img src="<?php echo $book_img; ?>" style=" height: 20%; width: 20%;">
        </div><br></br>


        <label style="color:#4d2600">Book Name:</label>
       
    <?php echo $book_name; ?>
        
        <br></br>
        <div>
            <label style="color:#4d2600">Book Price:</label>
           
               <?php echo $book_price; ?>
           
        </div>
    </div>
    <br>
    <div class='confirmation col-sm-12'>
        <br>

        <div class='form'>
            <form class="form-horizontal" action='checkout.php' method='post'>
            <div class="form-group">
                    <label class="control-label col-sm-4" style="color:#4d2600">First Name:</label>
                    <div class="col-sm-6">
                        <input type="text" style="color:#4d2600" class="form-control" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']?>" name="firstname">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" style="color:#4d2600">Last Name:</label>
                    <div class="col-sm-6">
                        <input type="text" style="color:#4d2600" class="form-control" value="" name="lastname">
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-4" style="color:#4d2600">Payment:</label>
                    <div class="col-sm-6">
                        <select name="payment" style="color: black">
                            <option value="Credit card" style="color:#4d2600">Credit Card</option>
                            <option value="Debit Card" style="color:#4d2600">Debit Card</option>
                        </select>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo $wid; ?>">
                <div class="form-group">
                    <div class="col-sm-offset-4 col-md-6">
                        <button type="submit" style="color:#4d2600; background-color:#ffd480;" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="py-5 bg-dark">

    <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Online BookShop 2020</p>
    </div>
</body>

</html>
