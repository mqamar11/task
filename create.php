<!doctype html>
<html lang="en">

<head>
  <title>Product Add</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    .field {
      display: none;
    }
  </style>

</head>

<body>

  <div class="container mt-4">
    <div class="row" style="padding-top: 6% ;">
      <div class="col">
        <h2>Product Add</h2>
      </div>
      <div class="col">
        <a href="index.php" class="btn btn-info float-right mb-3">Cancel</a>
      </div>
    </div>
    <hr style="border: 1px solid;">
    <?php
    include 'model.php';
    $model = new Model();
    $insert = $model->insert();
    ?>
    <form id="product_form" action="" method="post">
      <div class="form-group" style="padding-top: 22px;">
        <label for="sku">SKU</label>
        <input type="text" name="sku" class="form-control" id="sku" placeholder="Enter SKU">
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="title" class="form-control" id="name" placeholder="Enter Name">
      </div>
      <div class="form-group">
        <label for="price">Price ($)</label>
        <input type="text" name="price" class="form-control" id="price" placeholder="Enter Price">
      </div>
      <div class="form-group">
        <label for="productTye">Type Switcher</label>
        <select name="type" class="form-control" id="productType">
          <option value="Dvd" id="dvd">DVD</option>
          <option value="Book" id="book">Book</option>
          <option value="Furniture" id="furniture">Furniture</option>
        </select>
      </div>
      <div class="form-group dvd" id="dvd-field">
        <label for="size">Size (MB)</label>
        <input type="text" name="size" class="form-control" id="size" placeholder="Enter Size">
      </div>
      <div class="form-group field" id="book-field">
        <label for="weight">Weight (KG)</label>
        <input type="text" name="weight" class="form-control" id="weight" placeholder="Enter Weight">
      </div>
      <div class="form-group field furniture">
        <label for="height">Height (CM)</label>
        <input type="text" name="height" class="form-control" id="height" placeholder="Enter Height">
      </div>
      <div class="form-group field furniture">
        <label for="width">Width (CM)</label>
        <input type="text" name="width" class="form-control" id="width" placeholder="Enter Width">
      </div>
      <div class="form-group field furniture">
        <label for="length">Length (CM)</label>
        <input type="text" name="length" class="form-control" id="length" placeholder="Enter Length">
      </div>
      <div class="dvd" id="dvd-p">
        <p id="dvd-p"> “Please, provide size in MB”</p>
      </div>
      <div class="field" id="book-p">
        <p id="">“Please, provide weight in KG”</p>
      </div>
      <div class="field" id="furniture-p">
        <p id=""> “Please, provide dimensions in CM"</p>
      </div>
      <button type="submit" name="submit" id="save" class="btn btn-primary mb-4">Save</button>
    </form>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    $('#productType').change(function() {
      var selection = $('#productType').val();
      $('.field').hide();
      $('.dvd').hide();
      switch (selection) {
        case 'Dvd':
          $('#dvd-field').show();
          $('#dvd-p').show();
          break;
        case 'Book':
          $('#book-field').show();
          $('#book-p').show();
          break;
        case 'Furniture':
          $('.furniture').show();
          $('#furniture-p').show();
          break;
      }
    });
  </script>
</body>

</html>