<!DOCTYPE html>
<html>
<head>
	<title>Laba7-8</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<style type="text/css">
	a:link, a:visited {
  background-color: #F4A736;
  color: white;
  padding: 15px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: blue;
}
</style>
</head>
<body>
	<a href="index.php">Main</a>
	<a href="Table.html">Table</a>
	<a href="Form.php">LogForm</a>
	<a href="users.php">Users</a>
	<?php
    	$mas = ["ua"=> "Українська","ru" => "Русский","en"=>"English","fr"=>"Francias","de"=>"Deutch","pl"=>"Polski"];
    	?>
	<div class="row">
	<div class="col-3">
	</div>
	<div class="col-3 bg-success bg-opacity-10 p-4">
		<h3>Форма регистрации</h3>
		<form action="" method="post">
			<div class="form-group mb-3" >
				<label class="form-label" for="name">Name:</label>
				<input class="form-control" type="text" name="name" min="2" max="15" id="name" required>
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="lastname">Lastname:</label>
				<input class="form-control" type="text" name="lastname" min="2" max="15" id="lastname" required>
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="mail">Mail:</label>
				<input class="form-control" type="text" name="mail" min="2" max="15" id="mail" required>
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="pass">Password:</label>
				<input class="form-control" type="text" name="pass" min="2" max="15" id="pass" required>
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="pass2">Password:</label>
				<input class="form-control" type="text" name="pass2" min="2" max="15" id="pass2" required>
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="sex">Sex:</label>
				<select class="form-control" name="sex" id="sex">
					<option value="">Your sex</option>
					<option value="woman">W</option>
					<option value="man">M</option>
					<option value="it">Yes</option>
				</select>
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="birthdate">Birth date:</label>
				<input class="form-control" type="date" name="birthdate" id="birthdate">
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="country">Country:</label>
				<select class="form-select" name="country" id="country">
					<option value="">Your country</option>
					<option value="ua">Ukraine</option>
					<option value="gr">Georgia</option>
					<option value="ty">Turkey</option>
					<option value="pl">Poland</option>
					<option value="uk">Britain</option>
					<option value="2007">2007</option>
				</select>
			</div>
			<div>
				<label class="form-label" for="language">Language:</label>
				<select class="form-select" name="language" id="language">
				<?php
                foreach($mas as $V=>$v)
                echo "<option value='$V'>$v</option>";
                ?>
                </select>
			</div>
			<div>
				<input class="btn btn-primary" type="submit" name="Registration">
			</div>
		</form>
	</div>
	<div class="col-3 bg-primary bg-opacity-10 p-4">
		<h3>Форма авторизации</h3>
		<form action="" method="post">
			<div class="form-group mb-3">
				<label class="form-label" for="mail">Mail:</label>
				<input class="form-control" type="text" name="mail" min="2" max="15" id="mail" required>
			</div>
			<div class="form-group mb-3">
				<label class="form-label" for="pass">Password:</label>
				<input class="form-control" type="text" name="pass" min="2" max="15" id="pass" required>
			</div>
			<div>
				<input class="btn btn-primary" type="submit" name="Registration">
			</div>
		</form>
	</div>
	<div class="col-3">
	</div>
	</div>

</body>
</html>