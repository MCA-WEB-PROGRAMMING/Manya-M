<html>
<body>
<?php
$student=array("Dhoni","Virat","Ashwin","Rohit","Jadeja","Rahul","Hardik",
                "Shreyas","Pant","Rahane");
echo "<table border='1'><tr><th>NO.</th><th>PLAYERS</th></tr>";
foreach($student as $key=>$value)
            {
                echo"<tr><td>". $key+1 ."</th><th>$value</th></tr>";
            }
echo "</table>";
?>
</body>
</html>