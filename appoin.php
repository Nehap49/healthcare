<?php
	@$name = $_POST['name'];
	@$number = $_POST['number'];
	@$email = $_POST['email'];
	@$dr_name = $_POST['dr_name'];
	@$date = $_POST['date'];
	@$other = $_POST['other'];

	// Database connection
	$conn = new mysqli('localhost','root','','nehapatildb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into book(name, number, email, dr_name, date, other) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sissss", $name, $number, $email, $dr_name, $date, $other);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hospital website design </title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link  rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

    <div class="navbar">
        <a href="home.html">home</a>
        <a href="services.html">services</a>
        <a href="about.html">about</a>
        <a href="doctors.html">doctors</a>
        <a href="facility.html">facility</a>
        <a href="book.html">book</a>
        <a href="review.html">review</a>
        <a href="blogs.html">blogs</a>
        <a href="login.php">login</a>
        <a href="shedule.html">shedule</a>
    
        
    </div>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="book" id="book">

    <h1 class="heading"> <span>book</span> now </h1>    

    <div class="row">
        
        <div class="image">
            <img src="book-img.svg" alt="">
        </div>
        
        <form action="appoin.php" method="post">
            
            <h3>book appointment</h3>
            
            <input type="text" name="name" id="name" placeholder="your name" class="box">
            <input type="number" name="number" id="number" placeholder="your number" class="box">
            <input type="email" name="email" id="email" placeholder="your email" class="box">
            <input type="text" name="dr_name" id="dr_name" placeholder="dr_name" class="box">
            <input type="date" name="date" id="date" placeholder="date" class="box">
            <textarea name="other" id="other" cols="10" rows="10" placeholder="other" class="box"></textarea>
            
            <input type="submit" class="btn btn-primary" />
             
        </form>

    </div>

</section>

</body>
</html>
