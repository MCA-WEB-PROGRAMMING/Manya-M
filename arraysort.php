<html>
<body>
<?php
$student=array("Sreeraj","Gopika","Manya","Anu","Abina","Stefi","Akhil");
echo "Array:";
print_r($student);
echo "<br>"."Array in ascending order:";
asort($student);
print_r($student);
echo "<br>"."Array in descending order:";;
arsort($student);
print_r($student);
?>
</body>
</html>