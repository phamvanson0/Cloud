    <!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
<?php
		include_once("connection.php");
		if (isset($_POST["btnAdd"])) {
			$id = $_POST["txtID"];
			$name = $_POST["txtName"];
			$address = $_POST["txtAddress"];
            $product =$_POST["ProductList"];
			$qty = $_POST["txtQty"];
			$staff = $_POST["txtStaName"];

			$err = "";
			if ($id == "") {
				$err .= "<li>Enter shop ID,please</li>";
			}
			if ($name == "") {
				$err .= "<li>Enter shop Name,please</li>";
			}
            if ($address == "") {
				$err .= "<li>Enter shop Address,please</li>";
			}
            if ($producte == "0") {
				$err .= "<li>Choose product name,please</li>";
			}
			if ($err != "") {
				echo "<ul>$err</ul>";
			} else {
				$id = htmlspecialchars(mysqli_real_escape_string($conn,$id));
				$name = htmlspecialchars(mysqli_real_escape_string($conn,$name));
				$address = htmlspecialchars(mysqli_real_escape_string($conn,$address));
				$staff = htmlspecialchars(mysqli_real_escape_string($conn,$staff));

				$sq = "Select * from store where Sto_ID='$id' or Sto_Name='$name'";
				$result = mysqli_query($conn, $sq);
				if (mysqli_num_rows($result) == 0) {
					mysqli_query($conn, "INSERT INTO store(Sto_ID,Sto_Name,Sto_Address,StaName) VALUES ('$id', '$name', '$address', '$staff')");
					echo '<meta http-equiv="refresh" content="0;URL=?page=store_management"/>';
				} else {
					echo "<li>Duplicate store ID or Name</li>";
				}
			}
		}
		?>
<div class="container">
	<h2>Adding new Store</h2>

	 	<form id="frmProduct" name="frmProduct" method="post" enctype="multipart/form-data" action="" class="form-horizontal" role="form">
				<div class="form-group">
					<label for="txtTen" class="col-sm-2 control-label">Store ID(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Store ID" value=''/>
							</div>
				</div> 
				<div class="form-group"> 
					<label for="txtTen" class="col-sm-2 control-label">Store Name(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Store Name" value=''/>
							</div>
                </div>
				<div class="form-group"> 
					<label for="txtTen" class="col-sm-2 control-label">Store Address(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtAddress" id="txtAddress" class="form-control" placeholder="Store Address" value=''/>
							</div>
                </div>   

				<div class="form-group"> 
					<label for="txtTen" class="col-sm-2 control-label">Performance Staff(*):  </label>
							<div class="col-sm-10">
							      <input type="text" name="txtStaName" id="txtStaName" class="form-control" placeholder="Performance Staff" value=''/>
							</div>
                </div>
                        
				<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnAdd" id="btnAdd" value="Add new"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=store_management'" />
                              	
						</div>
				</div>
			</form>
</div>