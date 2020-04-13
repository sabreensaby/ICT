<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>




input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #e0e1e2;
  border-radius: 0px;
}

label {
  font-family: "Roboto", sans-serif;
font-weight: 500;
font-size: 15px;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}


a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

</style> 
</head>
<body>

<div id="wrapper">
	<!-- Navigation Bar -->
      <?php include("include/nav.inc") ?>
<!-- Navigation Bar ends -->

		
<section class="full internal-page checkOut section">
	<div class="container">
		<div class="heading">
      <h2 class="section-title">Order Details</h2>
    </div>
    <div class="row" style="width: 100%">
      <div class="col-12">
        
          <div class="coTotal">
            <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
            <p><a href="#">Order number:</a> <span class="price">2642</span></p>
            <p><a href="#">Product 1</a> <span class="price">$15</span></p>
            <p><a href="#">Subtotal:</a> <span class="price">$165.00  </span></p>
            <p><a href="#">Shipping:</a> <span class="price">Direct Bank eTransfer</span></p>
            <p><a href="#">Total:</a> <span class="price">$165.00</span></p>
            <hr>
            <p class="lastTotal">Total <span class="price" style="color:black"><b>$30</b></span></p>
          </div>
        
      </div>
    </div>
	</div>
</section>	
<!-- Kitchen SetUp start-->


</div>
	<!-- footer end -->
   <?php include("include/footer.inc") ?> 
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
