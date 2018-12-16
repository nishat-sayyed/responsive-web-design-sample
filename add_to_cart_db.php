<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "web_design";

    $conn = mysqli_connect($servername, $username, $password, $db_name);

    if(!$conn)
        die("Connecting error");
    else
        echo "Connected successfully <br>";
    session_start();

    $name = $_POST['name'];
    $price = $_POST['price'];
	$email = $_SESSION['email'];

    echo $name."----".$price."----".$email."<br>";

    $sql = "INSERT INTO cart_table (`cart_id`, `name`, `user_email`, `price`) VALUES (NULL, '$name', '$email', '$price')";
	$productExistQuery = mysqli_query($conn, "SELECT * FROM cart_table WHERE name = '$name' AND user_email = '$email'");
	if(mysqli_num_rows($productExistQuery) > 0)
	{
		//It means the product already exists in the table...hence do nothing and stay on the current page.
		echo $name." already exists <br>";
		header("location:user_services.php");
	}
	else{
		//It means that product does not exist in the table hence insert it in the table and stay on the current page for now
		echo $name." does not exist in table <br>";
		if(mysqli_query($conn, $sql)){
			echo "Record inserted successfully";
			header("location:user_services.php");
		}
		else {
			echo "Error updating ".mysqli_error($conn);
		}
	}
 ?>
