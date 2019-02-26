<?php>
$cust_name = htmlentities($_post('cust_name']);
$cust_email = htmlentities($_post('cust_email']);
$cust_address = htmlentities($_post('cust_address']);
$cust_phone = htmlentities($_post('cust_phone']);

?>
<html>
<head>
<title> multi-page form - final </title>
</head>
</html>
<p> you filled in:<p>

name:<$php echo $cust_name; ?.<br/>
email:<$php echo $cust_email; ?.<br/>
address:<$php echo $cust_address; ?.<br/>
phone:<$php echo $cust_phone; ?.<br/>

</body>
</html>
