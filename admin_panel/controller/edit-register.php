<?php 
include ("../../config.php");
error_reporting(0);
$fn = $_GET['fn'];
$ln = $_GET['ln'];
$em = $_GET['em'];
$agee = $_GET['agee'];
$phn = $_GET['phn'];
$pw = $_GET['pw'];
$addr = $_GET['addr']

?>
<html>
<head>
    <title>
    </title>
    <style>
        body{
            background-color: #7094ff;
        }
        .container{
              background-color: #1e88e5;
            box-shadow: 6px 6px 5px white;
            padding: 14px;
            align-content: center;
            max-width: 400px;
            margin-top: 18px;
            border-radius: 9px;
            margin-bottom: 40px;
            border-radius: 31px;
background: linear-gradient(225deg, #6585e6, #789eff);
box-shadow:  -8px 8px 7px #2d3b66,
             8px -8px 7px #b3edff;
             margin: auto;
        }
        h3{
            color: black;
            font-family: cursive;
            text-align: center;
            margin-top: 70px;
            margin-bottom: 0px;
            margin-left: 20px;
        }
        .container .form-group .form-control{
            color: aliceblue;
        }
        
    </style>
</head>
<body>
<br><br><br><br><br><br><br>
<div class="container">
<form action ="" method="GET">
    <table border="0"  align="center" cellspacing="20">

        <tr>
            
            <tr>
            <td>First-Name</td>
            <td><input type="text" value="<?php echo "$fn" ?>" name="firstname" required></td>
        </tr>
        
         <tr>
         <td>Last-Name</td>
            <td><input type="text" value="<?php echo "$ln" ?>" name="lastname" required></td>
        </tr>
    </tr>
        <tr>
            <td>Phone-Number</td>
            <td><input type="text" value="<?php echo "$phn" ?>" name="phnumber" required></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="text" value="<?php echo "$pw" ?>" name="passw" required></td>
        </tr>
         <tr>
            <td>Email</td>
            <td><input type="text" value="<?php echo "$em" ?>" name="email" required></td>
        </tr>
         <tr>
            <td>Age</td>
            <td><input type="text" value="<?php echo "$agee" ?>" name="age" required></td>
        </tr>
         <tr>
            <td>Address</td>
            <td><input type="text" value="<?php echo "$addr" ?>" name="addre" required></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" id="button" name="submit" value="Update Details"></a></td>
        </tr>
    </form>
</table>
</div>
</body>
</html>

<?php 
if($_GET['submit'])
{
    $firstname=$_GET['firstname'];
    $lastname=$_GET['lastname'];
    $email=$_GET['email'];
    $phonenumber=$_GET['phnumber'];
    $addre=$_GET['addre'];
    $age=$_GET['age'];
    $passw=$_GET['passw'];

    $query="UPDATE userinfo SET firstname='$firstname', lastname='$lastname', email='$email', pnumber='$phonenumber', password='$passw', age='$age', address='$addre'WHERE email='$email'";

    $data=mysqli_query($conn,$query);


if ($data)
{
echo "<script> alert('Record Updated')</script>";
}
else{
    echo "failed";
}
}
?>