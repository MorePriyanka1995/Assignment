<?php
mysql_connect("localhost","root","root")or die(mysql_error());
mysql_select_db("ecom") or die(mysql_error());

$delete="";
if(isset($_POST['submit']))
{
$delete=$_POST['pname'];
}

if(empty($delete))
{
echo "<script type='text/javascript'>alert('Enter Item Name')
	 window.location='deleteitem.html';
</script>";
}
else
{

$abc=mysql_query("delete from product where pname='".$delete."'");
if($abc)
{
echo "<script type='text/javascript'>alert('Item Deleted Successfully')
	 window.location='deleteitem.html';
</script>";
}
}
?>

