<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SpeakerDetail</title>
    <style>
        .infoTable{
            margin: 70px auto;
            /*width: 550px;*/
        }

        .fourCells{
            width: 410px;
        }
        div.infoTable > div > div >span{
            border: 1px solid black;
        }
        .fourCells span{
            width: 25%;
            float: left;
        }
        .twoCells span{
            width: 50%;
            float: left;
        }
    </style>
</head>
<body>
<div class="infoTable">
    <span style="float: right">
        <img src="img/cc1.jpg" width="80px" height="100px">
    </span>
    <div>
        <div class="fourCells">
            <span>lastname</span><span>aaa</span><span>firstname</span><span>aaa</span></br>
            <span>speaker ID</span><span>aaa</span><span>speaker type</span><span>aaa</span></br>
        </div>
        <div class="twoCells">
            <span>Abstract ID</span><span>aaa</span></br>
            <span>Presentation Time</span><span>aaa</span></br>
            <span>Presentation Titile</span><span>aaa</span></br>
        </div>

        <div>Abstract</div><div>aaa</div>
        <div>Biography</div><div>aaa</div>
    </div>
</div>
</body>
</html>