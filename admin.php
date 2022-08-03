
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>

</head>
    <body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Page</th>
    <th>Title1</th>
    <th>Img1</th>
  </tr>
    <?php include("setup.php");
    
    $sql = "SELECT * FROM pages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
       while($row = $result->fetch_assoc()) {
      #print_r($row); #debugging 
        
        $pageID=$row["id"]; 
        $title1=$row["title1"];
        $img1=$row["img1"];
  ?>     

  <tr>
    <td><?php print "$pageID"; ?></td>
    <td><?php print "$title1"; ?></td>
    <td><?php print "$img1"; ?></td>
  </tr>
    <?php
  }
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>
</table>

</body>
</html>



