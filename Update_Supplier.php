     <!-- Bootstrap --> 
     <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">
   <?php
    include_once("connection.php");
	if(isset($_GET["id"]))
	 		{
				$id = $_GET["id"];
				$result = mysqli_query($conn, "SELECT * FROM supplier WHERE Su_ID='$id'");
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$su_id = $row['Su_ID'];
				$su_name = $row['Su_Name'];
                $su_address = $row['Su_Address'];
				$su_des = $row['Su_Des'];
			
	?>
<div class="container">
	<h2>Updating Product Supplier</h2>
			 	<form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Supplier ID(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Supplier ID" readonly 
								  value='<?php echo $su_id;?>'>
							</div>
					</div>	
				 <div class="form-group">
						    <label for="txtTen" class="col-sm-2 control-label">Supplier Name(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Supplier Name" 
								  value='<?php echo $su_name;?>'>
							</div>
					</div>
                    
                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Address(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtAddress" id="txtAddress" class="form-control" placeholder="Address" 
								  value='<?php echo $su_address;?>'>
							</div>
					</div>

                    <div class="form-group">
						    <label for="txtMoTa" class="col-sm-2 control-label">Description(*):  </label>
							<div class="col-sm-10">
								  <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Description" 
								  value='<?php echo $su_des;?>'>
							</div>
					</div>
                    
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						      <input type="submit"  class="btn btn-primary" name="btnUpdate" id="btnUpdate" value="Update"/>
                              <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='index.php?page=supplier_management'" />
                              	
						</div>
					</div>
				</form>
	</div>
    <?php
	if(isset($_POST["btnUpdate"]))
	{
		$id = $_POST["txtID"];
		$name = $_POST["txtName"];
        $address = $_POST["txtAddress"];
		$des = $_POST["txtDes"];
		$err="";
		if($name=="")
		{
			$err.="<li>Enter Supplier Name, please</li>";
		}
		if($err!="")
		{
			echo "<ul>$err</ul>";
		}
		else
		{
			$sq="Select * from supplier where Su_ID != '$id' and Su_Name='$name'";
			$result = mysqli_query($conn,$sq);
			if(mysqli_num_rows($result)==0)
			{
				mysqli_query($conn, "UPDATE supplier SET Su_Name = '$name', Su_Address = '$address', Su_Des='$des' WHERE Su_ID='$id'");
				echo '<meta http-equiv="refresh" content="0;URL=index.php?page=supplier_management"/>';
			}
			else
			{
				echo "<li>Duplicate supplier Name</li>";
			}
		}
	}
	?>


	<?php
    }
	else
	{
		echo '<meta http-equiv="refresh" content="0;URL=Supplier_Management.php"?>';
	}
    ?>
      