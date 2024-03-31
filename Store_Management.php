<!-- Bootstrap -->
<?php 
        include_once("connection.php");
        if(isset($_GET["function"])=="del"){
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                mysqli_query($conn, "DELETE FROM store WHERE Sto_ID='$id'");
            }
        }
    ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script language="javascript">
        function deleteConfirm(){
            if(confirm("Are you sure to delete!")){
                return true;
            }
            else{
                return false;
            }
        }
    </script>
        <form name="frm" method="post" action="">
        <h1>Store Management</h1>
        <p>
        	<img src="images/add.png" alt="Thêm mới" width="16" height="16" border="0" /><a href="?page=add_store"> Add new
        </a></p>
        <table id="tableproduct" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Store ID</strong></th>
                    <th><strong>Store Name</strong></th>
                    <th><strong>Address</strong></th>
                    <th><strong>Staff</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>

			<tbody>
            <?php
				$No=1;
                $result = mysqli_query($conn, "SELECT * FROM store");
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
			?>
			<tr>
              <td ><?php echo $No; ?></td>
              <td ><?php echo $row["Sto_ID"]; ?></td>
              <td><?php echo $row["Sto_Name"]; ?></td>
              <td><?php echo $row["Sto_Address"]; ?></td>
              <td><?php echo $row["StaName"]; ?></td>
             <td align='center' class='cotNutChucNang'><a href="?page=store_management&&function=del&&id=<?php echo $row["Sto_ID"]; ?>"
             onclick="return deleteConfirm()">
             <img src='images/delete.png' border='0' /></a></td>
            </tr>
            <?php
                    $No++;
                }
                
			?>
			</tbody>
        
        </table>  

 </form>
