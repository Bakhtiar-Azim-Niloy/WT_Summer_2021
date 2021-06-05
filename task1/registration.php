<!DOCTYPE html>
<html>
<head>

<title>Registration Form </title>

</head>
<body>
<table>
<h1>Registration Form</h1>
<form>
<tr>
<td> <label for="fName ">Full Name : </label> </td>
<td><input type="text" id="fName"></td>
</tr>


<tr>
<td> <label for="email ">E-mail : </label> </td>
<td><input type="text" id="email"></td>
</tr>


<tr>
<td> <label for="password ">Password : </label> </td>
<td><input type="password" id="password"></td>
</tr>

<tr>
<td> <label for="comment ">Comment : </label> </td>
<td><textarea rows="5" cols="30" name="comment" form="comment  Here "> </textarea></td>
</tr>


<tr>
<td> <label for="gender ">Gender : </label> </td>
<td>
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
</td>
</tr>

<tr>
<td> <label for="checkbox ">Please Choose a Hobby : </label> </td>
<td>
<input type="checkbox"  name="value1" value="Singing">
<label for="value1">Singing</label>
<input type="checkbox" name="value2" value="Dancing">
<label for="value2">Dancing</label>
<input type="checkbox"  name="value3" value="Reading">
<label for="value3"> Reading</label>
</td>
</tr>



<tr>
<td> <label for="file ">Please Choose a File : </label> </td>
<td><input type="file" id="file"></td>
</tr>


<tr>
<td> <input type="submit" name="Submit"> 
<input type="reset" name="Reset">
</td>
</tr>




</form>
</table>

</body>
</html>