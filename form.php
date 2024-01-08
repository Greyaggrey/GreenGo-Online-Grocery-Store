<!DOCTYPE html>
<html>
<head>
	<title>Register Form</title>
</head>
<body>
	<form action="insert.php" method="POST">
		<table>
			<tr>
			    <td>Name :</td>
				<td><input type="text" name="username" required></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="Password" name="password" required></td>
			</tr>
			<tr>
				<td>Gender :</td>
				<td>
					<input type="radio" name="gender" value="m" required="">Male
					<input type="radio" name="gender" value="f" required="">Female
				</td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="mail" name="email" required></td>
			</tr>
			<tr>
				<td>Phone no :</td>
				<td>
					<select name="phoneCode" required>
						<option selected hidden value="">Select Code</option>
						<option value="255">255</option>
						<option value="256">256</option>
						<option value="257">257</option>
						<option value="258">258</option>
						<option value="259">259</option>
						<option value="260">260</option>
					</select>
					<input type="Phone" name="phone" required>
				</td>
			</tr>
			<tr>
				<td>
					<input type="Submit" value="Submit">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>