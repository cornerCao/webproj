<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style>
	.searchResult{
		font: 20px "Arial";
		color: #888;
		margin: 70px auto;
		max-width: 500px;
	}
	.searchtable{
		width:100%;
	}
	.searchtable td{
		padding-top:20px;
	}
	#display{
		width:100%;
	}
	#display td,th{
		padding-top:20px;
	}
	#display th{
		font-size:20px;
	}
	</style>
</head>
<body>
<?$active="search";
include_once "helper/nav.php";
?>
<div class="searchResult">
<br>
<h1>General Search</h1>
    <div class="form-group">
				<table class="searchtable">
				<tr>
				<td style="width:30%">
				<select id="select" class="form-control">
				<option>Events</option>
				<option>Presentations</option>
				</select>
				</td>
                <td style="width:50%"><input type="text" id="keyword" class="form-control" placeholder="keyword or speaker's name"></td>
				<td style="width:40%"><button class="btn btn-default" onclick="getResult()"><i class="glyphicon glyphicon-search"></i></button></td>
				</tr>
				</table>
				<br>
				<table id="display">
</table>
                </div>
              
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script>
function getResult(){
	var postdata={'select':$("#select").find("option:selected").text(),'input':$("#keyword").val()};
	$.post("helper/getResult.php",postdata,function(data,status){
		$("#display").html(data);
	});
}
</script>
</body>
</html>