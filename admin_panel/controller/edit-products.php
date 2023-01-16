<?php 
include ("../../config.php");
error_reporting(0);
$id = $_GET['id'];
$titl = $_GET['titl'];
$autho = $_GET['autho'];
$msp = $_GET['msp'];
$pri = $_GET['pri'];
$dis = $_GET['dis'];
$ava = $_GET['ava'];
$pub = $_GET['pub'];
$edi = $_GET['edi'];
$cat = $_GET['cat'];
$des = $_GET['des'];
$lan = $_GET['lan'];
$pge = $_GET['pge'];
$wei = $_GET['wei'];

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
            border-radius: 45px;
background: #d765a2;
box-shadow:  5px 5px 0px #562841,
             -5px -5px 0px #ffa2ff;
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
            <td>Product-ID</td>
            <td><input type="text" value="<?php echo "$id" ?>" name="pid" required></td>
        </tr>
        
         <tr>
         <td>Title</td>
            <td><input type="text" value="<?php echo "$titl" ?>" name="title" required></td>
        </tr>
    </tr>
        <tr>
            <td>Author</td>
            <td><input type="text" value="<?php echo "$autho" ?>" name="author" required></td>
        </tr>
        <tr>
            <td>Maximum Selling Price</td>
            <td><input type="text" value="<?php echo "$msp" ?>" name="mspp" required></td>
        </tr>
         <tr>
            <td>Price after Discount</td>
            <td><input type="text" value="<?php echo "$pri" ?>" name="prii" required></td>
        </tr>
         <tr>
            <td>Discount</td>
            <td><input type="text" value="<?php echo "$dis" ?>" name="disc" required></td>
        </tr>
         <tr>
            <td>Availability</td>
            <td><input type="text" value="<?php echo "$ava" ?>" name="avail" required></td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td><input type="text" value="<?php echo "$pub" ?>" name="publ" required></td>
        </tr>
        <tr>
            <td>Edition</td>
            <td><input type="text" value="<?php echo "$edi" ?>" name="edition" required></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><input type="text" value="<?php echo "$cat" ?>" name="cate" required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input type="text" value="<?php echo "$des" ?>" name="desc" required></td>
        </tr>
        <tr>
            <td>Language</td>
            <td><input type="text" value="<?php echo "$lan" ?>" name="langu" required></td>
        </tr>
        <tr>
            <td>No of Pages in the Book</td>
            <td><input type="text" value="<?php echo "$pge" ?>" name="pges" required></td>
        </tr>
        <tr>
            <td>Weight of the Book</td>
            <td><input type="text" value="<?php echo "$wei" ?>" name="weig" required></td>
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
    $pid=$_GET['pid'];
    $title=$_GET['title'];
    $author=$_GET['author'];
    $mspp=$_GET['mspp'];
    $prii=$_GET['prii'];
    $disc=$_GET['disc'];
    $publ=$_GET['publ'];
    $edition=$_GET['edition'];
    $cate=$_GET['cate'];
    $desc=$_GET['desc'];
    $langu=$_GET['langu'];
    $pges=$_GET['pges'];
    $weig=$_GET['weig'];
    $avail=$_GET['avail'];

    $query="UPDATE products SET PID='$pid', Title='$title', Author='$author', MRP='$mspp', Price='$prii', Discount='$disc', Available='$avail',Publisher='$publ',Edition='$edition',Category='$cate',Description='$desc',Language='$langu',page='$pges',weight='$weig' WHERE PID='$pid'";

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