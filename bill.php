<html>
<head>
    <title>electricity bill</title>
</head>
<body>
<form name="myform" method="POST">
<table>
    <tr><td>
    Enter the meter number<input type="number" name="num"></td></tr>
    <tr><td>
    Enter the number of units<input type="text" name="unit"></td></tr>
    <tr><td>
    Select category
    <select name="tariff">
        <option>Select</option>
        <option>Rural</option>
        <option>Residential</option>
        <option>Commercial</option>
    </select></td></tr>
    <tr><td>
    <input type="submit"  name="submit"></td></tr>
</table>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num=$_POST['num'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff=="Rural")
    {
        if($unit>0 && $unit<=50)
        {
        $e=20;
        $price=(($unit*.25)+$e);
        }
        if($unit>50 && $unit<=100)
        {
        $e=20;
        $price=(($unit*.5)+$e);
        }
        if($unit>100 && $unit<=150)
        {
        $e=25;
        $price=(($unit*1)+$e);
        }
        if($unit>150 && $unit<=250)
        {
        $e=30;
        $price=(($unit*1.5)+$e);
        }
        if($unit>250 && $unit<=400)
        {
        $e=35;
        $price=(($unit*2)+$e);
        }
        if($unit>400)
        {
        $e=35;
        $price=(($unit*3)+$e);
        }
        
    
    echo "your meter number is :".$num;
    echo "<br>";
    echo "Units are :".$unit;
    echo "<br>";
    echo "Extra charges are:".$e;
    echo "<br>";
    echo "Total $unit units of charges=".$price;
}
if($tariff=="Residential")
{
    if($unit>0 && $unit<=50)
    {
    $e=35;
    $price=(($unit*1.25)+$e);
    }
    if($unit>50 && $unit<=100)
    {
    $e=35;
    $price=(($unit*1.5)+$e);
    }
    if($unit>100 && $unit<=150)
    {
    $e=35;
    $price=(($unit*2)+$e);
    }
    if($unit>150 && $unit<=250)
    {
    $e=40;
    $price=(($unit*2.5)+$e);
    }
    if($unit>250 && $unit<=400)
    {
    $e=45;
    $price=(($unit*3)+$e);
    }
    if($unit>400)
    {
    $e=45;
    $price=(($unit*3.5)+$e);
    }
    

echo "your meter number is :".$num;
echo "<br>";
echo "Units are :".$unit;
echo "<br>";
echo "Extra charges are:".$e;
echo "<br>";
echo "Total $unit units of charges=".$price;
}
if($tariff=="Commercial")
{
    if($unit>0 && $unit<=50)
    {
    $e=50;
    $price=(($unit*3)+$e);
    }
    if($unit>50 && $unit<=100)
    {
    $e=50;
    $price=(($unit*3)+$e);
    }
    if($unit>100 && $unit<=150)
    {
    $e=55;
    $price=(($unit*4)+$e);
    }
    if($unit>150 && $unit<=250)
    {
    $e=55;
    $price=(($unit*4.5)+$e);
    }
    if($unit>250 && $unit<=400)
    {
    $e=60;
    $price=(($unit*5)+$e);
    }
    if($unit>400)
    {
    $e=60;
    $price=(($unit*5)+$e);
    }
    

echo "your meter number is :".$num;
echo "<br>";
echo "Units are :".$unit;
echo "<br>";
echo "Extra charges are:".$e;
echo "<br>";
echo "Total $unit units of charges=".$price;
}
}
?>