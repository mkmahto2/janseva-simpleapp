<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Fill the form detail</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="container">
  <div class="header">
  	<h2>fill the form</h2>
  </div>

  <form method="post" action="formsubmit.php">

  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="name" value="">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="">
  	</div>
  	<div class="input-group">
  	  <label>mobile</label>
  	  <input type="text" name="mobile">
  	</div>
  	<div class="input-group">
  	  <label>age</label>
  	  <input type="number" name="age">
  	</div>
    <div class="input-group">
  	  <label>gender</label><br>

      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>
      <input type="radio" name="gender" value="other"> Other

  	</div>
    <br>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="" value="Submit">Submit</button>
  	</div>

  </form>
</body>
</html>
