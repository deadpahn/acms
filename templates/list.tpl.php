<?php
if(isset($tableData) || $tableData == NULL){
    //redirect to 404
    die("404 page not found, please go back.");
}  
?>

<div class="container">
  <h2><?php echo $tableData['name'];?> <a class="btn btn-success btn-md" href="add.php?table=testtable" role="button">Add New</a></h2>  
  <table class="table table-condensed">
    <thead>
      <tr>
          <?php
          foreach($tableData['headers'] as $header){
              echo "<th>{$header}</th>";
          }
          
          echo "<th>EDIT</th>";
          echo "<th>DELETE</th>";
          ?>
      </tr>
    </thead>
    <tbody>
         <?php
          foreach($tableData['entries'] as $entries){
              echo "<tr>";
              foreach($entries as $key => $value){
                  echo "<td>{$value}</td>";
              }
              echo "<td><a href=\"edit.php?id=test\"><span class=\"glyphicon glyphicon-pencil\" aria-hidden=\"true\"></span></a></td>";
              echo "<td><a href=\"delete.php?id=test\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span></a></td>";
              echo "</tr>";
          }     
          ?> 
    </tbody>
  </table>
<?php //pagination?>
 <ul class="pagination">
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
</ul>
</div>
