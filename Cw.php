<?php

if (isset($_REQUEST['sbmt'])) {
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $addrs=$_REQUEST['addrs'];
    $city=$_REQUEST['city'];
    $zipcode=$_REQUEST['zipcode'];
    $sbmt=$_REQUEST['sbmt'];

    $json_array=array('fname'=>$fname,'lname'=>$lname,'address'=>$addrs,'city'=>$city,'zipcode'=>$zipcode);
    $json_format=json_encode($json_array,JSON_PRETTY_PRINT);

    if (file_put_contents('data.json',$json_format)) {


        echo "Successfully.json";
    }else {
        echo "Error!";
    }
   
   
} 

?>
<!DOCTYPE html>
<html >
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="" method="Post">
    <table>
        <tr >
            <td>First Name:</td>
            <td><input type="text"  name="fname">
           </td>
        </tr>
        <tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname"> </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><input type="text" name="addrs"> </td>
        </tr>
        <tr>
            <td>City:</td>
            <td><input type="text" name="city"> </td>
        </tr>
        <tr>
            <td>Zip Code:</td>
            <td><input type="number" name="zipcode"> </td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit" name="sbmt"></td>
        </tr>
    </table>
    </form>
   
</body>
</html>
