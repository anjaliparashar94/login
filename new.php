<!DOCTYPE html>
<html>
<head>
</head>
<body>
<script type="text/javascript">
	function Myfunction(){
		alert("done");
	}
</script>
<form>
	<label>Name:</label>
		<input type="text" name="name">
		
		<label>Email:</label>
		<input type="email" name="email">
		
		<label>branch:</label>
		<select name="branch">
			<option value="EE">EE</option>
			<option value="CSE">CSE</option>
			<option value="MECH">MECH</option>
			<option value="IT">IT</option>
		</select>

		<label>Address:</label>
		<input type="text" name="address">
		
		<label>DOB:</label>
		<input type="date" name="dob">
		
		<label>P.no</label>
	    <input type="number" name="pno">
	   <input type="button" value="touch me" onclick="Myfunction() ">
</form>

</body>
</html>