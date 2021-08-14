<?php

include "navDB.php";

$name = '';
$email = '';
$message = '';
global $connection;



if(isset($_POST["submit"]))
{
	
	
	$name = $_POST["user_name"];
	$email = $_POST["user_email"];
	$message = $_POST["message"];




    
    $resultCheck = mysqli_query($connection);

    $no_of_data = mysqli_num_rows($resultCheck);
	
	



    if(!$no_of_data){
		
	    $sqlInsert = 'INSERT INTO contact (user_name,user_email,message)
	    VALUES("'.$name.'","'.$email.'","'.$message.'")';
		
	    $resultInsert = mysqli_query($connection,$sqlInsert);
	
	    $lastNumberTnsert = mysqli_insert_id($connection);
		header('Location: index.php');
	}

}




?>
<!DOCTYPE html>
<html>

       <?php include "header.php" ?>
	   
 <body class="text-center">
 
    <main class="form-signup">
	
	        <h1 class="h3 mb-3 fw-normal">Register here</h1>

			<form  action="" method="POST">
			
				<div class="form-floating"> 
				
				
					
					<input type="text" placeholder="Enter your name" id="floatingInput" name="user_name" required value="" class="form-control" />
					<label for="floatingInput">Name</label>
				</div>
				<div class="form-floating"> 
					
					<input type="email" placeholder="Enter your email" id="floatingInput" name="user_email" required value="" class="form-control" /> 
					<label for="floatingInput">Email</label>
				</div>
				
				<div class="form-floating"> 
					
				
                    <textarea name="message" placeholder="Enter your message" id="floatingInput" required class="form-control"></textarea>
					<label for="floatingInput">Message</label>
			    </div>
				
				
				

				<button class="w-100 btn btn-lg btn-primary" name="submit" value="Sign Up" type="submit">Send</button>
				
				
			</form>
			

	</main>

</body>
</html>