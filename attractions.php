<html>
<head>
    <title>Attractions in Hong Kong</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    div.menu * {
        width: 200px;
        height: 30px;
        border: 1px solid #337ab7;
        text-align: center;
    }
    div.menu {
        position:fixed;
        top:70px;
    }
    div.menu div {
        display:none
    }
    div.menu div a {
        display:none
    }
    div.menu div.vp {
        position:absolute;
        top:30px;
        left:0px;
        z-index:1
    }
    div.menu div.op {
        position:absolute;
        top:60px;
        left:0px;
        z-index:1
    }
    div.menu div.tt {
        position:absolute;
        top:90px;
        left:0px;
        z-index:1
    }
    div.menu div.np {
        position:absolute;
        top:120px;
        left:0px;
        z-index:1
    }
    div.menu div.cc {
        position:absolute;
        top:150px;
        left:0px;
        z-index:1
    }
    div.menu:hover div {
        display:block
    }
    div.menu div:hover a {
        display:block
    }
    a.n1 {
        background-color: white;
        position:relative;
        left:200px;
        top:-30px;
        z-index:1
    }
    div.Intro {
        position: absolute;
        left: 250px;
        top: 70px;
        width: 60%;
        text-align: left;
        border: 0px;
        visibility: visible;
    }
    img.photo {
        display: block;
        margin-left: auto;
        margin-right: auto
    }
</style>
</head>
<body>
    <?
    $active = "attractions";
    include_once 'helper/nav.php';
    include_once "helper/connect.php";
    $sql="select * from attractions;";
    $result=mysql_query($sql) or die(mysql_error());
    $data = array();
    $i = mysql_num_rows($result);
    $top = 30;
    while ($row =  mysql_fetch_assoc($result)) {
        $tempArray = array($row["Title"]);
        array_push($tempArray, $row["URL"]);
        array_push($data, $tempArray);
    }
    ?>
    <div class="menu">
    
    <div style="display: block;">Attractions</div>
        <?
            for($x=0;$x<$i; $x++){
                $y = $x + 1001;
                echo "<div style='position:absolute;left:0px;z-index:1;top:" . (($x+1)*30) . "'><div>" . $data[$x][0] . "</div><a href='#' class='n1'><div onclick='intro(" . $y . ");'>Introduction</div></a><a href='" . $data[$x][1] . "' target='_blank' class='n1'><div>Website Link</div></a></div>";
            }
        ?>
    </div> 
    
    <div class="Intro" id="introduction">
    </div>
    <? 
//    $connect->close(); 
    mysql_close($connect);
    ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

    <script>
        function intro(num){
            $.post("helper/getAttractions.php",{"id":num},function(data,status){
                $("#introduction").html(data);
            });
        }
    </script>
</body> </html>