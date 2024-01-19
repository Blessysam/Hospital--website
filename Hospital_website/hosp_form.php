<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registraion Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
        <fieldset id="f1">
            
            <form action="hosp_in.php" method="post">
                
                <h3>Doctor Appointment Form:</h3>
                
                <label for="name" id="name">Full Name: </label> <br>
                <input type="text" name="Full_Name" id="fullname"  placeholder="Enter full Name" require><br><br>

                <label for="age" id="name">Age: </label> <br>
                <input type="number" name="Age" id="age" min="1"  placeholder="Enter Your Age"  require><br><br>
                
                <label for="email" id="name">Email ID: </label> <br>
                <input type="email" name="Email" id="email" placeholder="Enter Email ID"  require><br><br>

                <label for="contact" id="name">Contact No: </label> <br>
                <input type="text" name="Contact" id="contact" placeholder="Enter Contact No"  require><br><br>

                <label for="doctors" id="name">Choose Your Specialist: </label><br>
                <select id="doctors" name="Doctors" value="doctors">
                <option value="Dr. PETER NOED">Dr. PETER NOED-(Psychiatry)</option>
                <option value="Dr. DAVID WARNER">Dr. DAVID WARNER-(Psychiatry)</option>
                <option value="Dr. DARCIE BROWN">Dr. DARCIE BROWN-(Psychiatry)</option>
                <option value="Dr. JAMMIE GRACE">Dr. JAMMIE GRACE-(Psychiatry)</option>
                <option value="Dr. WILLIAM KATE">Dr. WILLIAM KATE-(Oncology)</option>
                <option value="Dr. JASPHER BEN">Dr. JASPHER BEN-(Oncology)</option>
                <option value="Dr. CATHY LANE">Dr. CATHY LANE-(Oncology)</option>
                <option value="Dr. MARIA WILL">Dr. MARIA WILL-(Oncology)</option>
                <option value="Dr. ANNA LISA">Dr. ANNA LISA-(Cardiology)</option>
                <option value="Dr. KEVIN ROY">Dr. KEVIN ROY-(Cardiology)</option>
                <option value="Dr. LEN HOPPER">Dr. LEN HOPPER-(Cardiology)</option>
                <option value="Dr. VINCENT FEDRIK">Dr. VINCENT FEDRIK-(Cardiology)</option>
                <option value="Dr. JACK MANDY">Dr. JACK MANDY-(Orthopedics)</option>
                <option value="Dr. JISOO RANY">Dr. JISOO RANY-(Orthopedics)</option>
                <option value="Dr. KASTRO LENO">Dr. KASTRO LENO-(Orthopedics)</option>
                <option value="Dr. ANDREW POLO">Dr. ANDREW POLO-(Orthopedics)</option>
                </select><br><br>

                <label for="app_date" id="name">Appointment Date: </label> <br>
                <input type="date" id="app_date" name="Date" min="<?php echo date('Y-m-d'); ?>"><br><br>

                <label for="gender" id="name">Gender: </label> <br>
                <input type="radio" name="Gender" value="male" id="gender">Male 
                <input type="radio" name="Gender" value="female" id="gender">Female 
                <input type="radio" name="Gender" value="other" id="gender">Other<br><br>

                

                <h3>Address Details:</h3>

                <label for="area_address" id="name">Area: </label> <br>
                <input type="text" name="Area" id="area_address" placeholder="Enter Area"  require><br><br>

                <label for="city_address" id="name">City: </label> <br>
                <input type="text" name="City" id="city_address" placeholder="Enter City"  require><br><br>

                <label for="state_address" id="name">State: </label> <br>
                <input type="text" name="State" id="state_address" placeholder="Enter State"  require><br><br>

                <label for="postal_code" id="name">Postal Code: </label> <br>
                <input type="text" name="Pincode" id="pincode" placeholder="Enter Postal Code"  require><br><br>



                <button value="submit" id="btn">Book Appointment</button>
            </form>

            
        </fieldset>
        
       
   
</body>
</html>