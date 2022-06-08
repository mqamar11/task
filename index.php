<?php
include 'model.php';
$product = new Model();
$product->massDelete();
?>

<!doctype html>
<html lang="en">

<head>
  <title>Product List</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .square {
      height: 200px;
      width: 300px;
      border: 2px solid;
    }
  </style>

</head>

<body>
  <form action="" method="post">
    <div class="container">
      <div class="row" style="padding-top: 6%;">
        <div class="col-6">
          <h2>Product List</h2>
        </div>
        <div class="col-6">
          <button type="submit" name="delete" class="btn btn-danger float-right ml-2">Mass Delete</button>
          <a href="create.php" class="btn btn-primary float-right mb-3">Add</a>
        </div>
      </div>
      <hr style="border: 1px solid;">

      <!-- Another Design -->

      <!-- <table class="table table-striped">
  <thead>
    <tr>
   <th> <input type="checkbox" id="checkAll" value=""></th>
      <th scope="col">#</th>
      <th scope="col"> Type</th>
      <th scope="col">Product Detail</th>
    </tr>
  </thead>
  <tbody>

  <?php
  // $model = new Model();
  // $rows = $model->fetch();
  // $i = 1;
  // if (!empty($rows)) {
  //   foreach ($rows as $row) {
  ?>
    <tr>
        <td><input type="checkbox" name="check[]" class="delete-checkbox" value="<?php echo $row['id']; ?>" id=""></td>
        <th><?php echo $i++; ?></th>
        <td><?php echo $row['type']; ?></td>
      <td>
      <li><?php echo $row['sku']; ?></li>
                  <li><?php echo $row['title']; ?></li>
                  <li><?php echo $row['price'] . " $"; ?></li>
                  <li>
                    <?php
                    // if ($row['type'] == 'Dvd') {
                    //   echo "Size: " .  $row['size'] . " MB";
                    // }
                    // if ($row['type'] == 'Book') {
                    //   echo "Weight: " . $row['weight'] . "KG";
                    // }
                    // if ($row['type'] == 'Furniture') {
                    //   echo "Dimension: " . $row['height'] . "x" . $row['width'] . "x" . $row['length'];
                    // }
                    ?>
                  </li>
      </td>
    </tr>
    <?php 
    // }} 
    ?>
  </tbody>
</table> 
 <hr style="border: 1px solid;"> -->

      <div class="row">

        <?php
        $model = new Model();
        $rows = $model->fetch();
        $i = 1;
        if (!empty($rows)) {
          foreach ($rows as $row) {
        ?>

            <div class="col-4" style="padding: 3%">
              <div class="square">
                <input type="checkbox" name="check[]" value="<?php echo $row['id']; ?>" class="delete-checkbox ml-3 mt-3">
                <div style="padding:40px; text-align:center;">
                  <!-- <ul> -->
                  <!-- <li> -->
                    <?php echo $row['sku']; ?> <br>
                  <!-- </li>
                  <li> -->
                    <?php echo $row['title']; ?> <br>
                  <!-- </li>
                  <li> -->
                    <?php echo $row['price'] . " $"; ?> <br>
                  <!-- </li>
                  <li> -->
                    <?php echo (!empty($row['size'])) ?  "Size: " .  $row['size'] . " MB" : ''; ?> 
                   <!-- </li>
                  <li> -->
                    <?php echo (!empty($row['weight'])) ?  "Weight: " .  $row['weight'] . " KG" : ''; ?> 
                   <!-- </li>
                  <li> -->
                  <?php echo (!empty($row['height']) && !(empty($row['width'])) && (!empty($row['length']))) ? "Dimension: " . $row['height'] . "x" . $row['width'] . "x" . $row['length'] : ''; ?> 
                    <!-- </li> -->
                  <!-- <li>
                    <?php
                    // if ($row['type'] == 'Dvd') {
                    //   echo "Size: " .  $row['size'] . " MB";
                    // }
                    // if ($row['type'] == 'Book') {
                    //   echo "Weight: " . $row['weight'] . "KG";
                    // }
                    // if ($row['type'] == 'Furniture') {
                    //   echo "Dimension: " . $row['height'] . "x" . $row['width'] . "x" . $row['length'];
                    // }
                    ?>
                  </li> 
                  </ul> -->
                </div>
              </div>
            </div>

        <?php }
        }  ?>
      </div>

    </div>
  </form>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <script>
    $("#checkAll").click(function () {
				$('input:checkbox').not(this).prop('checked', this.checked);
			});
  </script>

</body>

</html>