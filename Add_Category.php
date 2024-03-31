     <!-- Bootstrap --> 
	<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<title>Adding Category</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .form-box {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        #btnAdd, #btnIgnore {
            transition: transform 0.3s;
        }
        #btnAdd:hover, #btnIgnore:hover {
            transform: scale(1.1);
        }
    </style>
</head>
	    
	<?php
	include_once("connection.php");
	if(isset($_POST["btnAdd"]))
	{
			$id = $_POST["txtID"];
			$name = $_POST["txtName"];
			$des = $_POST["txtDes"];
			$err="";
			if($id==""){
				$err.="<li>Enter Category ID, please</li>";
			}
			if($name==""){
				$err.="<li>Enter Category Name, please</li>";
			}
			if($err!=""){
				echo "<ul>$err</ul>";
			}
			else{
				$id = htmlspecialchars(mysqli_real_escape_string($conn, $id));
				$name = htmlspecialchars(mysqli_real_escape_string($conn, $name));
				$des = htmlspecialchars(mysqli_real_escape_string($conn, $des));
				$sq="SELECT * from category where CAT_ID='$id' or CAT_Name='$name'";
				$result = mysqli_query($conn,$sq);
				if(mysqli_num_rows($result)==0)
				{
					mysqli_query($conn, "INSERT INTO category (Cat_ID, Cat_Name, Cat_Des) VALUES ('$id','$name','$des')");
					echo '<meta http-equiv="refresh" content="0;URL=index.php?page=category_management"/>';
				}
				else
				{
					echo "<li>Duplicate category ID or Name</li>";
				}
			}
	}
	?>

<body>
<div class="container">
    <div class="form-box">
        <h2>Adding Category</h2>
        <form id="form1" name="form1" method="post" action="" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="txtID" class="col-sm-2 control-label">Category ID(*):</label>
                <div class="col-sm-10">
                    <input type="text" name="txtID" id="txtID" class="form-control" placeholder="Category ID" value='<?php echo isset($_POST["txtID"])?($_POST["txtID"]):"";?>'>
                </div>
            </div>
            <div class="form-group">
                <label for="txtName" class="col-sm-2 control-label">Category Name(*):</label>
                <div class="col-sm-10">
                    <input type="text" name="txtName" id="txtName" class="form-control" placeholder="Category Name" value='<?php echo isset($_POST["txtName"])?($_POST["txtName"]):"";?>'>
                </div>
            </div>
            <div class="form-group">
                <label for="txtDes" class="col-sm-2 control-label">Description(*):</label>
                <div class="col-sm-10">
                    <input type="text" name="txtDes" id="txtDes" class="form-control" placeholder="Description" value='<?php echo isset($_POST["txtDes"])?($_POST["txtDes"]):"";?>'>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <input type="submit" class="btn btn-primary" name="btnAdd" id="btnAdd" value="Add new"/>
                    <input type="button" class="btn btn-primary" name="btnIgnore"  id="btnIgnore" value="Ignore" onclick="window.location='?page=category_management'" />
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>