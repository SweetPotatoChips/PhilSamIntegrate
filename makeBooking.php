<!DOCTYPE html>
<html>

	<head>

		<title>Make Booking</title>

	</head>

	<body>

		<div class="container-fluid" style="padding-left:100px;padding-right:100px;padding-top:20px;">

			<?php 
				$action = "booking"; //makes the make booking button highlighted so the user knows they are on that page
				include "includes\bootstrap.php"; //includes the bootstrap code (css/js/jquery)
				include "includes\header.php"; //includes header files that has the navbar
			?>

			<body>

			<br><br><br><br>

			<div class="row">
				<div class="alert alert-info" style="display: inline-block; margin-left: 13px"><!-- this is an info alert that tells the user to endter start and end dstination -->
					<center>Enter start locations, end locations, departure date and return date below</center>
				</div>
			</div>
			
			<br>

			<script src="javascript\inputCheck.js"></script> <!-- get the js script to make sure the user has entered a valid entry -->
			<script src="javascript\autoComplete.js"></script><!-- gets the js script to get the auto comlete drop downs on the textboxs -->
			<script src="javascript\date.js"></script><!-- gets the js for the date select popouts -->
			<script src="javascript\alertTimeout.js"></script><!-- makes the error alert messages timeout -->

			<form  
				name="myForm" 
				action="submitBooking.php" 
				onsubmit="return inputCheck()" 
				method="post"
			><!-- This is the form that is send the users data to the submitBooking.php file. It also called teh inputCheck js fucntion that check if the users input id valid -->

				<div class="row">
					<div class="col-md-3"><!-- the col-xs-3 div keeps the 2 textboxes and submit button  inline with each other-->
						<input 
							class="form-control" 
							name="startLoc" 
							id="tags1" 
							placeholder="Start Location" 
							autocomplete="off"  
							
						><!-- text box for start location -->
					</div>

					<div class="col-md-2">
						<input 
							class="form-control" 
							id="date" 
							name="startdate" 
							placeholder="Depart DD/MM/YYYY " 
							type="text" 
							readonly 
							 
							style="background-color: white;"
						/><!-- input for the departure date-->
					</div>
				</div>

				<br><br>

				<div class="row">
					<div class="col-md-3">
						<input 
							class="form-control" 
							name="endLoc" 
							id="tags2" 
							placeholder="End Location" 
							autocomplete="off" 
							
						><!-- text box for end location -->
					</div>

					<div class="col-md-2">
						<input 
							class="form-control" 
							id="date" 
							name="enddate" 
							placeholder="Return DD/MM/YYYY " 
							type="text" 
							readonly 
							
							style="background-color: white;" 
						/><!-- input for return date -->
					</div>

				</div>

				<br>

					<div class="col-md-offset-4">
						<button 
							class="btn btn-primary" 
							type="submit" 
							style="margin-left: 23px"
						>
							Submit
						</button><!-- submit button for the form -->
					</div>

			</form>
			
			<div class="row" style="margin-left: 0px">
				<div>
					<strong><!-- if the inputCheck detects invalid data it will return the error here -->	
						<p id="error">	
						</p>
					</strong>
				</div>
		
			</div>
			<strong><!-- if the inputCheck detects invalid data it will return the error/errors here -->
				<p id="startError"></p>
				<p id="endError"></p>
				<p id="depError"></p>
				<p id="retError"></p>
				<p id="dupError"></p>
				<p id="invalidError"></p>
			</strong>

	</body>

</html> 
