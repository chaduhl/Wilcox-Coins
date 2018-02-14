<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'From: Wilcox Online Contact Form';
		$to = 'chaduhl@ku.edu';
		$subject = 'Inquiry about the Wilcox Collection';

		$body ="From: $name\nE-Mail: $email\nMessage:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}

		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
/*
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
*/
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! We will be in touch!</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again.</div>';
	}
}
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Wilcox Collection&mdash;Contact</title>

		<meta name="description" content="Wilcox Collection - RD"/>
		<meta name="keywords" content=""/>
		<meta name="author" content="Chad Uhl"/>

		<link rel="shortcut icon" href="">

		<link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body style="background-color: white;">

  <div class="title">
    <h1>Coins of the Wilcox Collection</h1>
    <h2>[ Under Construction ]</h2>
    <ul class="list-inline">
			<li><a href="../wilcox_tmp/wilcox">Home</a></li>
      <li><a href="../wilcox_tmp/about">About</a></li>
      <li><a href="../wilcox_tmp/contact">Contact</a></li>
    </ul>

    <br></br>
  </div>

  <div class="container">
    <div class="row">

      <div class="col-md-10">
        <div class="coin-text">
          <h3>Contact Us</h3>
					<div class="col-md-10">
						<form action="contact.php" method="post" role="form">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name" name="name" id="name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" name="email" id="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
							</div>
							<div class="form-group">
								<textarea class="form-control" id="message" cols="30" rows="10" value="" placeholder="Message" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary btn-md" name="submit" id="submit">
							</div>
              <div class="form-group">
            		<div class="col-sm-10">
            			<?php echo $result; ?>
            		</div>
            	</div>
            </form>
					</div>
        </div>
      </div>

    </div>

  </div>

	<!-- Scripts -->

	<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.10.4.min.js" type="text/javascript"></script> <!-- jQuery -->
	<script src="js/jquery.nicescroll.js"></script> <!-- jQuery NiceScroll -->
	<script src="js/jquery.parallax.js"></script> <!-- jQuery Parallax -->
	<script src="js/script.js"></script> <!-- All script -->

</body>

</html>
