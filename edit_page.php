
<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="css/form.css">   
    
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

  <?php include"setup.php";
    print_r($_GET);
    $pageID= $_GET["id"];
?>
    
    
</head>
    <body>

   
   <?php 
    $sql = "SELECT * FROM pages where id = $pageID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
       while($row = $result->fetch_assoc()) {
      print_r($row); #debugging 
        
        $pageID=$row["id"]; 
        $title1=$row["title1"];
           $para1=$row["para1"];
        $img1=$row["img1"];
  ?>     


    <?php
  }
    } else {
        echo "0 results";
    }
$conn->close();
      
    ?>

        
        <form action="edit_action_page.php" method="post" >
    <div class="row">
      <div class="col-25">
        <label for="pagenum">Page Number</label>
      </div>
      <div class="col-75">
    <?php print $pageID ?>
          <input type="hidden" id="pageID" name="pageID" value= "<?php print $pageID ?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="title1">Title One</label>
      </div>
      <div class="col-75">
        <input type="text" id="title1" name="title1" value="<?php print $title1 ?>">
      </div>
    </div>
            
            
            <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="NZ">NZ</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="para1">Paragraph 1</label>
      </div>
      <div class="col-75">
        <textarea id="para1" name="para1" style="height:200px"><?php print $para1 ?></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="image1">Image One</label>
      </div>
      <div class="col-75">
        <input type="text" id="image1" name="image1" value="<?php print $img1 ?>">
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>

</body>
</html>



