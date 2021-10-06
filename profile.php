<?php

$name = isset($_COOKIE["Name"]) ? $_COOKIE["Name"] : "";
$email = isset($_COOKIE["Email"]) ? $_COOKIE["Email"] : "";
$password = isset($_COOKIE["Password"]) ? $_COOKIE["Password"] : "";
$address = isset($_COOKIE["Address"]) ? $_COOKIE["Address"] : "";
$linked = isset($_COOKIE["Linkedin"]) ? $_COOKIE["Linkedin"] : "";
$cv_file = isset($_COOKIE["Cv_File"]) ? $_COOKIE["Cv_File"] : "";
?>
<h1>Profile Data</h1>
<table border='2'>
    <thead>
        <td><h4>input Data</h4></td>
        <td colspan='10'><h4>values Data</h4></td>
    </thead>
    <tbody>
        <tr>
        <td><b>Name : </b></td>
        <td colspan='10'><b><?php echo $name; ?></b></td>
        </tr>
        <tr>
        <td><b>Email : </b></td>
        <td colspan='10'><b><?php echo $email; ?></b></td>
        </tr>
        <tr>
        <td><b>Password : </b></td>
        <td colspan='10'><b><?php echo md5($password); ?></b></td>
        </tr>
        <tr>
        <td><b>Address : </b></td>
        <td colspan='10'><b><?php echo $address; ?></b></td>
        </tr>
        <tr>
        <td><b>Linkedin Url : </b></td>
        <td colspan='10'><b><?php echo $linked; ?></b></td>
        </tr>
        <tr>
        <td><b>Cvfile_Name : </b></td>
        <td colspan='10'><b><?php echo $cv_file; ?></b></td>
        </tr>
    </tbody>
</table>