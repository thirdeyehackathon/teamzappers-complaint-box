<html>
<?php
$username="root";
$password="";
$hostname="localhost";
$dbhandle=mysql_connect($hostname,$username,$password)or die("unable to connect to MySQL");
echo "connected to MySQL<br>";
$selected =mysql_select_db("comp",$dbhandle)or die("could not select examples");
$name=$_POST['t1'];
$id=$_POST['t2'];
$pass=$_POST['p1'];
$dept=$_POST['p2'];
print "$name<br>";
print "$id<br>";
print "$pass<br>";
print "$dept<br>";
print "PLEASE SUBMIT YOUR COMPLAINT <br>";
$ins="insert into stud(name,id,pass,dept)values('$name','$id','$pass','$dept')";
$ins1=mysql_query($ins,$dbhandle);
mysql_close($dbhandle);

?>



<br><br><br><h2><a href="abc.html">SENT  EMAIL FOR COMPLAINT</a></h2>
</html>