<html>
<h2>T4Tutorials.com</h2>
<h3>Form program</h3>
<p>show output student name and roll number</p>
</html>
<html>
<body>
<form method="post">
<p>Enter Name</p>
<input type="text" name="name" />
<p>Enter Roll number</p>
<input type="text" name="number" />
<input type="submit" name="submit" />
</form>
<?php
class student
{
    public $name= 'ali';
	public $rno=77;
}
$a = new student();
if(isset($_POST['submit'])){
$a->name=$_POST['name'];
$a->rno=$_POST['number'];
echo"Name of student= $a->name</h2><br>";
echo"Roll number of student= $a->rno</h2>";
}
?>
</body>
</html>
