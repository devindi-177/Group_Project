<html>
	<head>
		<title>Report_generation_acco
		</title>
		<link rel="stylesheet" type="text/css" href="category.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
	<style>
		body {
  		background-color: #000;
  		background-image: url("picture/pro picture.jpeg");
  		background-size: cover;
  		background-position: top center;
  		}
	</style>
	<table width = 100% height="100%">
  		<tr>
    		<td colspan="3" width="22%" height= "1%">
				<div class="navbar">
					
					<a href="#"><i class="fa fa-address-book" aria-hidden="true"></i> Home</a>
  					<a href="#"><i class="fa fa-address-book" aria-hidden="true"></i> Payments from SE</a>
					<a href="#"><i class="fa fa-address-book" aria-hidden="true"></i> Payments History</a>
					<a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
  				</div>
			</td>
    	</tr>
		<tr>
			<td colspan = "2" height ="25%" width="95%">>
				<div class="logobox">
					<h2>Report Generation</h2>
				</div>
			</td>
		</tr>
		<tr>
			<td colspan = "2" height = "75%">
				<div class="logobox" >
					<table width = 100% height=100% >
						<tr>
							<th>
								<form >
									<label for="fname">Dealer Name:</label>
								</form>
							</th>
							<td>
								<form >
									<input type="text" id="fname" name="fname" style= "width: 600px"><br>
								</form>
							</td>
						</tr>
						<tr>
							<th>
								<form >
									<label for="fnme">SE Responsible:</label>
								</form>
							</th>
							<td>
								<form >
									<input type="text" id="fnme" name="fnme" style= "width: 600px"><br>
								</form>
							</td>
						</tr>
						<tr>
							<th>
								<form >
									<label for="fme">Orders Made:</label>
								</form>
							</th>
							<td>
								<form >
									<input type="text" id="fme" name="fme" style= "width: 600px"><br>
								</form>
							</td>
						</tr>
						<tr>
							<th>
								<form >
									<label for="fpay">Payments Done:</label>
								</form>
							</th>
							<td>
								<form >
									<input type="checkbox" id="fpay" name="fpay" value="All Done">All Paid <br>
									<input type="checkbox" id="fpay" name="fpay" value="Remaining">Remaining<br>
								</form>
							</td>
						</tr>
						<tr>
							<th>
								<form >
									<label for="fpayi">Amount Remaining:</label>
								</form>
							</th>
							<td>
								<form >
									<input type="text" id="fpayi" name="fpayi" style= "width: 600px"><br>
								</form>
							</td>
						</tr>
						<tr>
							<th>
								<form >
									<label for="fdate">Reporting Date:</label>
								</form>
							</th>
							<td>
								<form >
									<input type="date" id="fdate" name="fdate" value="2020-01-01" min="2000-12-31" max="2030-12-31"><br>
								</form>
							</td>
						</tr>
						<tr>
							<form METHOD="post" ACTION="mailto:jburns@htmlgoodies.com" ENCTYPE="multipart/form-data">
							Attachment: <INPUT TYPE="file" NAME="attachedfile" MAXLENGTH=50 ALLOW="text/*" >
							</form>
						<tr>
							<th>
								<form >
									<input type="submit" value="Generate">
								</form>
							</th>
						</tr>
					</table>
				</div>	
			</td>
		</tr>	
  		<tr>
			<td>
				<div class="logobox">
					<img src="picture/logo.png" height ="50%" width="70%">
				</div>
			</td>
    		<td colspan="2">
				<div class="foot">
					<h3>Contact Us</h3>
					<a href="https://www.facebook.com"><img src="picture/fb.png" width=40px height=40px></a>
					<a href="https://www.instagram.com/?hl=en"><img src="picture/insta.png" width=60px height=40px></a>
					<a href="https://twitter.com/"><img src="picture/twitter.png" width=40px height=40px></a>
				</div>
			</td>
    
  		</tr>
	</table>
	
	</body>
	
	
</html>
