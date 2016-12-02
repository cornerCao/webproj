<?php
//upload
$target_dir = "uploads/";
$message = "";
$target_files = $_FILES["fileToUpload"]["name"];
//var_dump(count($target_files));
for($i=0;$i<count($target_files);$i++){
    $target_file = $target_dir . basename($target_files[$i]);
    $uploadOk = 1;
    $fileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
// Check file size
    else if ($_FILES["fileToUpload"]["size"][$i] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
// Allow certain file formats
    else if($fileType != "csv"&&$fileType != "CSV") {
        echo "Sorry, only csv files are allowed.";
        $uploadOk = 0;
    }
// Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
//        continue;
        exit;
// if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"][$i], $target_file)) {
            $message .= "The file ". basename( $target_files[$i]). " has been uploaded.</br>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
}
}
import();

header("Location: ./conference.php");
exit;

function import()
{
    include_once "helper/connect.php";
    $file = fopen("uploads/Events_CSV.csv", "r");
    $i = 0;
    while (!feof($file)) {
        $data = fgetcsv($file);
        if ($data[0]) $temp1[$i] = $data;
        $i += 1;
    }
    fclose($file);
    $last = "";
    for ($i = 1; $i < count($temp1); $i++) {
        $info = $temp1[$i];
        if ($info[5] == "") $info[5] = $last;
        else $last = $info[5];
        $sql = "insert into events(eventID,date,beginTime,endTime,title,venue) values('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]');";
        $res = mysql_query($sql) or die(mysql_error());
        if (mysql_error()) {
            echo "failed!";
        }
    }
    $file = fopen("uploads/AuthorsAbstracts.csv", "r");
    $i = 0;
    while (!feof($file)) {
        $data = fgetcsv($file);
        if ($data[0]) $temp2[$i] = $data;
        $i += 1;
    }
    fclose($file);
    for ($i = 1; $i < count($temp2); $i++) {
        $info = $temp2[$i];
        $sql = "insert into authorsabstracts(abstractID,authorID,lastname,firstname,type) values('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]');";
        mysql_query($sql) or die(mysql_error());
        if (mysql_error()) {
            echo "failed!";
        }
    }
    $file = fopen("uploads/PresentationCSV.csv", "r");
    $i = 0;
    while (!feof($file)) {
        $data = fgetcsv($file);
        if ($data[0]) $temp3[$i] = $data;
        $i += 1;
    }
    fclose($file);
    for ($i = 1; $i < count($temp3); $i++) {
        $info = $temp3[$i];
        if ($info[1] == "keynote") {
            $sql = "select eventID from events where LOWER(title)=LOWER('keynote session') and date='$info[10]' and '$info[8]'>=beginTime and '$info[9]'<=endTime;";
            $res = mysql_query($sql) or die(mysql_error());
            $ID = mysql_fetch_array($res);
            $event = $ID[0];
        } else if ($info[1] == "parallel") {
            echo "haha";
            $sql = "select eventID from events where LOWER(title)=LOWER('parallel sessions') and date='$info[10]' and '$info[8]'>=beginTime and '$info[9]'<=endTime;";
            $res = mysql_query($sql) or die(mysql_error());
            $ID = mysql_fetch_array($res);
            $event = $ID[0];
        }
        $sql = "insert into presentation(abstractID,type,title,speakerID,beginTime,endTime,date,biography,eventID,abstract) values('$info[0]','$info[1]','$info[2]','$info[5]','$info[8]','$info[9]','$info[10]','$info[11]','$event','$info[12]');";
        mysql_query($sql) or die(mysql_error());
        if (mysql_error()) {
            echo "failed!";
        }
        $sql = "update authorsabstracts set speakerPhoto='$info[6]',speakerAffiliation='$info[7]' where authorID='$info[5]';";
        mysql_query($sql) or die(mysql_error());
        if (mysql_error()) {
            echo "failed!";
        }
    }
}
?>
