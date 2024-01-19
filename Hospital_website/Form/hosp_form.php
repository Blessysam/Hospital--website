<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraion Form</title>

    <link rel="stylesheet" href="style.css">

    
</head>
<body>
    
        <fieldset id="f1">
            
            <form action="form_in.php" method="post">
                
                <h3>Doctor Appointment Form:</h3>
                
                <label for="name" id="name">Full Name: </label> <br>
                <input type="text" name="full_name" id="fullname"  placeholder="Enter full Name" ><br><br>

                <label for="age" id="name">Age: </label> <br>
                <input type="text" name="age" id="age"  placeholder="Enter Your Age" ><br><br>

                <label for="gender" id="name">Gender: </label> <br>
                <input type="radio" name="gender" value="male" id="gender">Male
                <input type="radio" name="gender" value="female" id="gender">Female 
                <input type="radio" name="gender" value="other" id="gender">Other<br><br>
                
                <label for="email" id="name">Email ID: </label> <br>
                <input type="email" name="email" id="email" placeholder="Enter Email ID"><br><br>

                <label for="contact" id="name">Contact No: </label> <br>
                <input type="text" name="contact" id="contact" placeholder="Enter Contact No" ><br><br>

                <label for="app_date" id="name">Appointment Date: </label> <br>
                <input type="date" name="app_date" id="app_date" placeholder="Enter The Date" ><br><br>

                

                <h3>Address Details:</h3>

                <label for="area_address" id="name">Area: </label> <br>
                <input type="text" name="area_address" id="area_address" placeholder="Enter Area"><br><br>

                <label for="city_address" id="name">City: </label> <br>
                <input type="text" name="city_address" id="city_address" placeholder="Enter City"><br><br>

                <label for="state_address" id="name">State: </label> <br>
                <input type="text" name="state_address" id="state_address" placeholder="Enter State"><br><br>

                <label for="postal_code" id="name">Postal Code: </label> <br>
                <input type="text" name="pincode" id="pincode" placeholder="Enter Postal Code"><br><br>



                <button value="submit" id="btn">Book Appointment</button>
            </form>

            
        </fieldset>
       
   
</body>
</html>