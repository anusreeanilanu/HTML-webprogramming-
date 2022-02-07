<html>
<head>
</head>
<body>
<form method="POST">
<table>
<tr>
<td>Enter the meter number:
<input type="number" name="num" placeholder="enter the meter number"></td>
</tr>
<tr>
    <td>Enter the units:
        <input type="number" name="unit" place holder="enter the units"></td>
    </tr>
    <tr>
        <td>Enter the Category:
            <select name="tariff">
                <option> Rural </option>
                <option> Residential </option>
                <option> Commercial </option>
            </select>
        </td>
    </tr>
    <tr>
    <td>
        <input type="submit" value="submit" name="submit">
    </td>
</tr>
</table>
</form>
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
        if($unit>0&&$unit<=50)
        {
            $e=50;
            $price=(($unit*.50)+$e);
            echo $price;
        }
        else if($unit>50&&$unit<=150)
        {
            $e=50;
            $price=(($unit*.75)+$e);
        }
        else if($unit>150&&$unit<=350)
        {
            $e=50;
            $price=(($unit*1.50)+$e);
        }
        else if($unit>300&&$unit<=400)
        {
            $e=55;
            $price=(($unit*1.75)+$e);
        }
        else if($unit>400)
        {
            $e=55;
            $price=(($unit*2.50)+$e);
        }
        echo "Your Meter Number is:".$num;
        echo "<br>";
        echo "Units are:".$unit;
        echo "<br>";
        echo "Extra charges are".$e;
        echo "<br>";
        echo "Total $unit units of charge".$price;
        echo "<br>";


    }

    if($tariff=="Residential")
    {
        if($unit>0&&$unit<=50)
        {
            $e=60;
            $price=(($unit*1.50)+$e);
            echo $price;
        }
        else if($unit>50&&$unit<=150)
        {
            $e=60;
            $price=(($unit*1.75)+$e);
        }
        else if($unit>150&&$unit<=350)
        {
            $e=60;
            $price=(($unit*2.50)+$e);
        }
        else if($unit>300&&$unit<=400)
        {
            $e=65;
            $price=(($unit*2.75)+$e);
        }
        else if($unit>400)
        {
            $e=65;
            $price=(($unit*3.00)+$e);
        }
        echo "Your Meter Number is:".$num;
        echo "<br>";
        echo "Units are:".$unit;
        echo "<br>";
        echo "Extra charges are".$e;
        echo "<br>";
        echo "Total $unit units of charge".$price;
        echo "<br>";


    }
    if($tariff=="Commercial")
    {
        if($unit>0&&$unit<=50)
        {
            $e=80;
            $price=(($unit*1.50)+$e);
            echo $price;
        }
        else if($unit>50&&$unit<=150)
        {
            $e=80;
            $price=(($unit*2.75)+$e);
        }
        else if($unit>150&&$unit<=350)
        {
            $e=80;
            $price=(($unit*3.50)+$e);
        }
        else if($unit>300&&$unit<=400)
        {
            $e=85;
            $price=(($unit*3.75)+$e);
        }
        else if($unit>400)
        {
            $e=85;
            $price=(($unit*4.00)+$e);
        }
        echo "Your Meter Number is:".$num;
        echo "<br>";
        echo "Units are:".$unit;
        echo "<br>";
        echo "Extra charges are".$e;
        echo "<br>";
        echo "Total $unit units of charge".$price;
        echo "<br>";
     }
}
?>




    

