<?php

abstract class AbstractController
{

	private $sku, $title, $price, $size, $height, $width, $length, $weight;
	abstract public function insert();
	abstract public function massDelete();
}

class Model extends AbstractController
{

	private $server   = "localhost";
	private $userName = "root";
	private $password = '';
	private $db       = "task";
	private $conn;

	public function __construct()
	{
		try {

			$this->conn = new mysqli($this->server, $this->userName, $this->password, $this->db);
		} catch (Exception $e) {
			echo "connection failed" . $e->getMessage();
		}
	}

	public function insert()
	{
		if (isset($_POST['submit'])) {
			
			if (isset($_POST['sku']) && isset($_POST['title']) && isset($_POST['price']) && isset($_POST['type']) ) {
				// if (!empty($_POST['title']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address']) ) {
					// die('here');
				$sku    = $_POST['sku'];
				$title  = $_POST['title'];
				$price  = $_POST['price'];
				$type   = $_POST['type'];
				$size   = $_POST['size'];
				$weight = $_POST['weight'];
				$height = $_POST['height'];
				$width  = $_POST['width'];
				$length = $_POST['length'];

				$query  = "INSERT INTO products (sku,title,price,type,size,weight,height,width,length) VALUES ('$sku','$title','$price','$type', '$size', '$weight', '$height', '$width', '$length')";
				if ($sql = $this->conn->query($query)) {
					// echo "<script>alert('records added successfully');</script>";
					echo "<script>window.location.href = 'index.php';</script>";
					// }else{
					// 	echo "<script>alert('failed');</script>";
					// 	echo "<script>window.location.href = 'index.php';</script>";
					// }

				}
				// else{
				// 	echo "<script>alert('empty');</script>";
				// 	echo "<script>window.location.href = 'index.php';</script>";
				// }
			}
		}
	}

	public function fetch()
	{
		$data = null;
		$query = "SELECT * FROM products";
		if ($sql = $this->conn->query($query)) {
			while ($row = mysqli_fetch_assoc($sql)) {
				$data[] = $row;
			}
		}
		return $data;
	}

	public function massDelete()
	{
		if (isset($_POST['delete'])) {
			if (isset($_POST['check'])) {
				// die('here');
				foreach ($_POST['check'] as $deleteid) {

					$deleteProduct = "DELETE from products WHERE id=" . $deleteid;
					mysqli_query($this->conn, $deleteProduct);
				}
			}
			echo "<script>window.location.href = 'index.php';</script>";
		}
	}
}


?>



 <!-- <script>
    $('#productType').change(function () {
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
  </script> -->