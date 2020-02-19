<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <form name="frmRegistration" method="post" action="">	
        <div class="table">	
        <div class="form-head">Sign Up</div>
 <div class="field-column">
                <label>First Name</label>
                <div>
                    <input type="text" class="input-box"
                        name="firstname" placeholder="Enter First Name"
                        value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']; ?>">
                </div>
            </div>
            
            <div class="field-column">
                <label>Last Name</label>
                <div><input type="text" class="input-box"
                    name="lastname" placeholder="Enter Last Name"></div>
            </div>
            <div class="field-column">
                <label>Middle Name</label>
                <div>
                    <input type="text" class="input-box"
                        name="middlename" placeholder="Enter Middle">
                </div>
            </div>
            <div class="field-column">
                <label>Address</label>
                <div>
                    <input type="text" class="input-box"
                        name="address" placeholder="Enter Address">
                   
                </div>

            </div>
            <div class="field-column">
                <label>Date of Birth</label>
                <div>
                    <input type="date" class="input-box"
                        name="dateofbirth" placeholder="Enter Date of Birth">
                </div>
            </div>
            <div class="field-column">
            	<label>Place of Birth</label>
            	<div>
            		<input type="text" class="input-box"
            		 name="placeofbirth" placeholder="Enter Place of Birth">
            	</div>
            </div>
            <div class="field-column">
            	<label>Gender</label>
            	<div>
            		Female<input type="radio" class="input-box" name="gender"><br>
            		Male<input type="radio" class="input-box" name="gender"><br>
            	</div>
            	
            </div>
            <div class="field-column">
            	<label >Guardian</label>
            	<div>
            		<input type="text" class="input-box" 
            		name="guardian" placeholder="Enter Guardian">
          
            	</div>
            	
            </div>
            <div class="field-column">
            	<label>Contact Number</label>
            	<div>
            		<input type="text" class="input-box" 
            		name="contactnumber" placeholder="Enter Contact Number">
          
            	</div>
            	
            </div>
            <div class="field-column">
            	<label>Civil Status</label>
            	<div>
            		<input type="text" class="input-box" 
            		name="civilstatus" placeholder="Enter Civil Status">
          
            	</div>
            	
            </div>
            <div class="field-column">
            	<label>Year Level</label>
            	<div>
            		<select>
            			<option value="1styear">1st Year</option>
            			<option value="2ndyear">2nd Year</option>
            			<option value="3rdyear">3rd Year</option>
            			<option value="4thyear">4th Year</option>
            			<option value="5thyear">5th Year</option>	
            		</select>
          
            	</div>
            	
            </div>
            <div class="field-column">
            	<label>Course</label>
            	<div>
            		<select>
            			<option value="infotech">Information Technology</option>
            			<option value="comeng">Computer Engineering</option>
            			<option value="education">Education</option>
            			<option value="autotronics">AutoTronics</option>
            			<option value="mecheng">Mechanical Engineering</option>	
            		</select>
          
            	</div>
            	
            </div>
            <div class="field-column">
            	<label>School Year</label>
            	<div>
            		<input type="text" class="input-box" 
            		name="schoolyear">
          
            	</div>
            	
            </div>

            <div class="field-column">
                <div class="terms">
                    <input type="checkbox" name="terms"> I accept terms
                    and conditions
                </div>
                <div>
                    <input type="submit"
                        name="register-user" value="Register"
                        class="btnRegister">
                </div>
            </div>
        </div>

</form>

</body>
</html>