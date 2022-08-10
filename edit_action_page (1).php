<?php
    #print_r($_POST);
    $pageID= $_POST["pageID"];
    $title1= $_POST["title1"];
    $para1 = addslashes($_POST["para1"]);
    $image1 = $_POST["image1"];
 #   print"This is page $pagenum. on this page will be this title <b>$title1</b>";
    
    include"setup.php"; #connect to the database
    #insert needs the field names (no quotes) and the values (variables with quotes)
    $sql = "UPDATE pages set title1='$title1', para1='$para1',image1='$image1' where id= '$pageID'";
#print $sql;

if ($conn->query($sql) === TRUE) { # this executes the insert and tests if it works
  #echo "record $pageID updated successfully";
    header("Location: admin.php"); #redirect to the admin page if succesful edit and update
die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;# this shows any error for debugging
}

$conn->close();# this closes the connectionto database
    ?>