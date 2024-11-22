<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $degree =$_POST['degree'];
    $college =$_POST['college'];
    $report =$_POST['report'];
    $health =$_POST['health'];
    $check = isset($_POST['check']) ? 'Yes' : 'No';
    $sports= $_POST['sports'];
    $color =$_POST['color'];
    $range =$_POST['range'];
    $time =$_POST['time'];

    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Submitted Data</title>
        <style>
           
            th{
                color: rgb(0, 26, 255);
                }
                table{
                border: 2px solid black;
}
                

        
        </style>
    </head>
    <body>
        <h1>Submitted Application Data</h1>
        <table border='1' cellpadding='10' cellspacing='0'>
            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Date of Birth</th>
                <th>Nationality</th>
                <th>Gender</th>
                <th>Degree</th>
                <th>College</th>
                <th>Report</th>
                  <th>Health Issue</th>
               
            </tr>
            <tr>
            
                <td>$full_name</td>
                <td>$email</td>
                <td>$dob</td>
                <td>$nationality</td>
                <td>$gender</td>
                <td>$degree</td>
                <td>$college</td>
                 <td>$report</td>
                <td>$health</td>
              
               

            </tr>
             </table>
             <br>
             <br>
             
                   <table border='1' cellpadding='10' cellspacing='0'>
            <tr>
             
              
                <th>Permanent Disease</th>
                <th>Sports Played</th>
                <th>Favorite Color</th>
                <th>Experience Rating</th>
                <th>Preferred Start Time</th>
                </tr>
                  
                <tr>
              
                
                <td>$check</td>
                <td>$sports</td>
              
                <td><div style='background-color: $color; width: 50px; height: 20px;'></div></td>
                <td>$range</td>
                <td>$time</td>
                </tr>
     </table>

    </body>
    </html>";
} else {
    
    echo "Invalid request method.";
}
?>
