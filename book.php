<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="header">

    <a href="home.php" class="logo">Voyager.</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">package</a>
        <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</section>

<div class="heading" style="background:url(images/heading.jpg) no-repeat">
<h1>book now</h1>

</div>

<section class="booking">

    <h1 class ="heading-title">book your trip</h1>

    <form action="book_form.php" method="post" class="book-form">

	<div class="flex">
		<div class="inputBox">
			<span>name :</span>
			<input type="text" placeholder="enter your name"  name="name">

		</div>
		<div class="inputBox">
			<span>email :</span>
			<input type="email" placeholder="enter your email" name="email">
		
</div>
<div class="inputBox">
    <span>Phone:</span>
    <input type="tel" placeholder="Enter your phone number" name="phone" pattern="[0-9]{10}" maxlength="15" title="Enter a valid phone number">
</div>
		<div class="inputBox">
			<span>address :</span>
			<input type="text" placeholder="enter your address" name="address">

		</div>
		<div class="inputBox">
			<span>where to :</span>
			<input type="text" placeholder="place you want to visit"name="location">

		</div>
		<div class="inputBox">
			<span>how many :</span>
			<input type="number" placeholder="number of guests" name="guests">

		</div>
		<div class="inputBox">
			<span>arrivals :</span>
			<input type="date"name="arrivals">

		</div>
		<div class="inputBox">
			<span>leaving :</span>
			<input type="date"name="leaving">
		</div>
	</div>

	 <input type="submit" value = "submit" class="btn" name="send">


	</form>

     </section>






 




 


    
</body>
</html>
