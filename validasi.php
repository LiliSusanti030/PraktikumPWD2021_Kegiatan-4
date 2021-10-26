<html>
<head>
	<style>
		.error{color; .#FF0000;}
	</style>
</head>
<body>
	<?php
	$namaErr = $emailErr = $genderErr = $websiteErr = "";
	$nama = $email = $gender = $comment = $website = "";

	if ($_SERVER["REQUES_METHOD"]) == "POST"){
	if (empty($_POST["nama"])){
		$namaErr = "Nama harus diisi";
	}else{
		$nama = test_input($_POST["nama"]);
	}
	if (empty($_POST["email"])){
		$namaErr = "email harus diisi";
	}else{
		$nama = test_input($_POST["email"]);
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$emailErr = "Email tidak sesuai format"
	}
	if (empty($_POST["website"])){
		$website = "";
	}else{
		$website = test_input($_POST["website"]);
	}
	}
	if (empty($_POST["comment"])){
		$comment = "";
	}else{
		$comment = test_input($_POST["comment"]);
	}
	}
	if (empty($_POST["gender"])){
		$gender = "gender harus dipilih";
	}else{
		$website = test_input($_POST["gender"]);
	}
}

function test_input($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>

<h2> Posting Komentar </h2>

<p><span class = "error">*harus diisi.</span></p>
<form method="post" action=" "<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<table>
<tr>
	<td>Nama : </td>
	<td><input type="text" name="nama">
		<span class = "error">* <?php echo $namaErr;?></span>
	</td>
</tr>
<tr>
	<td>Email : </td>
	<td><input type="text" name="email">
		<span class = "error">* <?php echo $emailErr;?></span>
	</td>
</tr>
<tr>
	<td>website : </td>
	<td><input type="text" name="websiteErr">
		<span class = "error">* <?php echo $namaErr;?></span>
	</td>
</tr>
<tr>
	<td>Komentar : </td>
	<td><textarea nama = "comment" rows="5" cols="40"></textarea>
	</td>
<tr>
	<td>Gender : </td>
	<td>
		<input ="radio" name="gender" value="L">Laki-laki
		<input ="radio" name="gender" value="P">Perempuan
		<span class="error">* <?php echo $genderErr;?></span>
	</td>
</tr>
<td>
		<input type="submit" name="submit" value="submit">
	</td>
</tr>
</table>
</form>

<?php
echo "<h2>Data yang anda isi : </h2>";
echo $nama;
echo "<br>";

echo $email;
echo "<br>";

echo $website;
echo "<br>";

echo $comment;
echo "<br>";

echo $gender;
?>
</body>
</html>