<?php 
 
class database {
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "pos_shop";
    var $conn;

    function __construct() {
        $this->conn = new mysqli($this->host, $this->uname, $this->pass, $this->db);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

	function tampil_data() {
        if (isset($_GET['kata_cari'])) {
            $kata_cari = $_GET['kata_cari'];

        $query = "SELECT product_categories.category_name AS nama_kategori, products.*, product_categories.id AS category_id
                  FROM products
                  INNER JOIN product_categories ON product_categories.id = products.category_id
                  WHERE 
                  product_name LIKE '%" . $kata_cari . "%' OR
                  category_name LIKE '%" . $kata_cari . "%' OR
                  description LIKE '%" . $kata_cari . "%' OR
                  price LIKE '%" . $kata_cari . "%' OR
                  stock LIKE '%" . $kata_cari . "%'
                  ORDER BY products.id ASC";
        } else {
          $query = "SELECT product_categories.category_name AS nama_kategori, products.*, product_categories.id AS category_id
                    FROM products
                    INNER JOIN product_categories ON product_categories.id = products.category_id
                    ORDER BY products.id ASC";
        }
	    $result = $this->conn->query($query);


	    if (!$result) {
	        die("Query Error: " . $this->conn->error);
	    }

	    $hasil = array();

	    while ($d = $result->fetch_assoc()) {
	        $hasil[] = $d;
	    }

	    return $hasil;
	}

	function input($product_name, $category_id, $description, $price, $stock, $image) {
	    $query = "INSERT INTO products (product_name, category_id, description, price, stock, image) VALUES (?, ?, ?, ?, ?, ?)";
	    $stmt = $this->conn->prepare($query);
	    $stmt->bind_param("sissis", $product_name, $category_id, $description, $price, $stock, $image);

	    try {
	        $stmt->execute();
	    } catch (Exception $e) {
	        die("Query Error: " . $e->getMessage());
	    }
	}

	function hapus($id) {
	    $query = "DELETE FROM products WHERE id = '$id'";
	    $result = $this->conn->query($query);

	    if (!$result) {
	        die("Query Error: " . $this->conn->error);
	    }
	}

	function hapus_user($id) {
	    $query = "DELETE FROM users WHERE id = '$id'";
	    $result = $this->conn->query($query);

	    if (!$result) {
	        die("Query Error: " . $this->conn->error);
	    }
	}

	function edit($id){
	    $query = "SELECT * FROM products WHERE id = ?";
	    $stmt = $this->conn->prepare($query);
	    $stmt->bind_param("i", $id);
	    $stmt->execute();
	    $result = $stmt->get_result();
	    
	    $hasil = array();
	    while ($d = $result->fetch_assoc()) {
	        $hasil[] = $d;
	    }
	    return $hasil;
	}

	 
	function update($id, $product_name, $category_id, $description, $price, $stock, $image){
	    $query = "UPDATE products SET product_name=?, category_id=?, description=?, price=?, stock=?, image=? WHERE id=?";
	    $stmt = $this->conn->prepare($query);
	    $stmt->bind_param("sissisi", $product_name, $category_id, $description, $price, $stock, $image, $id);
	    $stmt->execute();
	}


	function tampil_data_user() {
        if (isset($_GET['kata_cari_user'])) {
            $kata_cari_user = $_GET['kata_cari_user'];

        	$query = "SELECT user_groups.group_name AS nama_posisi, users.*, user_groups.id AS group_id FROM users INNER JOIN user_groups ON user_groups.id = users.group_id WHERE 
                      name LIKE '%" . $kata_cari_user . "%' OR
                      email LIKE '%" . $kata_cari_user . "%' OR
                      phone_number LIKE '%" . $kata_cari_user . "%'";
	        } else {
	        	$query = "SELECT user_groups.group_name AS nama_posisi, users.*, user_groups.id AS group_id FROM users INNER JOIN user_groups ON user_groups.id = users.group_id ORDER BY id ASC";
	        }

	    	$result = $this->conn->query($query);


		    if (!$result) {
		        die("Query Error: " . $this->conn->error);
		    }

		    $hasil = array();

		    while ($d = $result->fetch_assoc()) {
		        $hasil[] = $d;
		    }

		    return $hasil;
	}
}
?>