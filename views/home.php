<!-- <div class="search">
      <h2>Search</h2>
      <form method="POST">
      <input type="text" name="stock">
      <input type="submit" value="submit">
      </form>
</div> -->

<style>

    .box
    {    
        background-color: yellow;
        height: 200px;
        width: 200px;
        float: left;
        margin: 20px;
        border-radius: 50%;
    }
    .a
    {
        background-image: 
          conic-gradient(red, yellow, green);
    }
  
    
</style>



<div class='table'>
  <?php echo "<h1>Total Number Of Your Good: ".$numOfGood[0]['COUNT']."</h1>" ?>
  <?php echo "<h2>Number Of Your Import Good: ".$numOfImport[0]['COUNT']."</h2>" ?>
  <?php echo "<h2>Number Of Your Export Good: ".$numOfExport[0]['COUNT']."</h2>" ?>
  
<hr class="solid">
  <?php echo "<h1>Total Number Of Your Partner: ".$numOfPartner."</h1>" ?>


</div>
<div class="table">
        <h2>Stock Data</h2>
        <!-- <div class="pie" data-start="0" data-value="30"></div>
<div class="pie highlight" data-start="30" data-value="30"></div>
<div class="pie" data-start="60" data-value="40"></div>
<div class="pie big" data-start="100" data-value="260"></div> -->
        <!-- <table border="1">
        <tbody><tr><td>Name</td><td>Type</td><td>Status</td><td>Description</td></tbody>
        <?php
          foreach($good as $key=>$good){
            echo '<tr><td>'.$good['name'].'</td><td>'.$good['type'].'</td><td>'.$good['status'].'</td>
            <td>'.$good['description'].'</td></tr>
            ';
          }
        ?>
        </table> -->

        <!-- <div class="box a"></div> -->


</div> 


