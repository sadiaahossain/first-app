<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
</head>
<body>

<h1>Profile</h1>
<form action="lab2.php" method="POST">
<table>
<td>
<fieldset>
<legend>General Information:</legend>
<table>

    <p><?php echo $_POST['firstname'];?></p>
	<br>

    
   <p><?php echo $_POST['lastname'];?></p><br>
    
    
   <p><strong>Gender:</strong>  <input type="radio" id="html" name="Gender" value="Male">
  <label for="Male">Male</label>
  <input type="radio" id="css" name="Gender" value="Female">
  <label for="Female">Female</label><br></p><br>

   
    
   <p><b>Father's name:</b><input type="text"></p><br>
    

  <p><b>Mother's Name:</b> <input type="text"></p><br>
	
    
    <p><b>Blood Group:</b> <select id="bloodgroup" name="bloodgroup">
  <option value="A+">A+</option>
  <option value="B+">B+</option>
  <option value="A-">A-</option>
  <option value="B-">B-</option>
  <option value="O+">O+</option>
  <option value="O-">O-</option>
</select>
  
 
  </p><br>
	
    
   <p><b>Religion:</b><select id="religion" name="religion">
  <option value="Islam">Islam</option>
  <option value="Christianity">Christianity</option>
  <option value="Buddhism">Buddhism</option>
  <option value="Hinduism">Hinduism</option>
  
</select> </p><br>
	
	
	
	
	</table>
    
 </fieldset>
 </td>
 <td>
 <fieldset >
<legend>Contact Information:</legend>
    <p><strong>Email </strong>
  <input type="email" id="email" name="email"></p>
	<br>
    
    <p><b>Phone/Mobile:</b> <input type="tel" id="phone" name="phone" ></p>
    <br>
    
    <p><strong>Website:</strong> <input type="url" id="homepage" name="homepage"></p>
	<br>
   
    
    <p><b>Present Address:</b><fieldset><legend>Present Address</legend><select>
  <option value="Bangladesh">Bangladesh</option>
  <option value="India">India</option>
  <option value="Pakistan">Pakistan</option>
  <option value="Nepal">Nepal</option>
  
</select><select>
  <option value="Dhaka">Dhaka</option>
  <option value="Chittagong">Chittagong</option>
  <option value="Rajshahi">Rajshahi</option>
  <option value="Sylhet">Sylhet</option>
  
</select>
	</p>
    <p><input type="text" style="width: 170px; height: 120px"><br></p>
	<p><input type="number"><br></p>

    
    
 </fieldset>
 </td>
 <td>
 <fieldset>
 <legend>Account Infromation:</legend>
 <p><strong>Username: </strong>
  <input type="text"></p>
	<br>
	<p><strong>Password: </strong>
  <input type="Password"></p>
	<br>
	<p><strong>Confirm Password: </strong>
  <input type="Password"></p>
	<br>
	</fieldset><br>
	<input type="submit" value="Register">
	</td>
	
 
 </table>

</body>
</html>