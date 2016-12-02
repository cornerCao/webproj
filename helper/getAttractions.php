<?php
    $connect=mysql_connect("mysql.comp.polyu.edu.hk","16027789x","jsiyppoo") or die("Fail to connect!");
    mysql_select_db("16027789x",$connect) or die (mysql_error());
    $findID = $_POST["id"];
    $sql="select * from attractions where AttractionID='$findID';";
    $result=mysql_query($sql) or die(mysql_error());
    $tempArray = [];
    while ($row = mysql_fetch_assoc($result)) {
        $tempArray[0] = $row["Title"];
        $tempArray[1] = $row["URL"];
        $tempArray[2] = $row["Description1"];
        $tempArray[3] = $row["Description2"];
        $tempArray[4] = $row["Description3"];
        $tempArray[5] = $row["Description4"];
        $tempArray[6] = $row["Description5"];
        $tempArray[7] = $row["Photo1"];
        $tempArray[8] = $row["P1width"];
        $tempArray[9] = $row["P1height"];
        $tempArray[10] = $row["Photo2"];
        $tempArray[11] = $row["Photo3"];
        $tempArray[12] = $row["Photo4"];
        $tempArray[13] = $row["h1"];
        $tempArray[14] = $row["h2"];
        $tempArray[15] = $row["h3"];
        $tempArray[16] = $row["h1description"];
        $tempArray[17] = $row["h2description"];
        $tempArray[18] = $row["h3description"];
        
        echo "<h2 style='text-align:center'>$tempArray[0]</h2>";
        if($tempArray[8]!=""){
            echo "<img class='photo' src='img/$tempArray[7]' height='$tempArray[9]' width='$tempArray[8]'>";
        }
        else{
            echo "<img class='photo' src='img/$tempArray[7]'>";
        }
        echo "<h3>Introduction</h3>";
        echo "<p>$tempArray[2]</p>";
        echo "<p>$tempArray[3]</p>";
        echo "<p>$tempArray[4]</p>";
        echo "<p>$tempArray[5]</p>";
        echo "<p>$tempArray[6]</p><br><br>";
        if($tempArray[10]!=""){
            echo "<img class='photo' src='img/$tempArray[10]'><br>";
            echo "<h3>$tempArray[13]</h3>";
            echo "<p>$tempArray[16]</p><br><br>";
        }
        if($tempArray[11]!=""){
            echo "<img class='photo' src='img/$tempArray[11]'><br>";
            echo "<h3>$tempArray[14]</h3>";
            echo "<p>$tempArray[17]</p><br><br>";
        }
        if($tempArray[12]!=""){
            echo "<img class='photo' src='img/$tempArray[12]'><br>";
            echo "<h3>$tempArray[15]</h3>";
            echo "<p>$tempArray[18]</p><br><br>";
        }
    }
mysql_close($connect);
?>