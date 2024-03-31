<!-- Bootstrap --> 
<link rel="stylesheet" type="text/css" href="style.css"/>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/bootstrap.min.css">


    <script language="javascript">
        function deleteConfirm(){
                if(confirm("Are you sure to delete!"))
                    {
                        return true;
                    }
                else{
                    return false;
                }
                
            }
             </script>
             <?php
                include_once ("connection.php");
                if(isset($_GET["function"])=="del"){
                    if(isset($_GET["id"])){
                        $id =$_GET["id"];
                        mysqli_query($conn,"DELETE FROM supplier WHERE Su_ID ='$id'");
                    }
                }

            ?>
        <form name="frm" method="post" action="">
        <h1>Supplier Management</h1>
        <p>
        <img src="images/add.png" alt="Add new" width="16" height="16" border="0" /> <a href="?page=add_supplier"> Add</a>
        </p>
        <table id="tablecategory" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th><strong>No.</strong></th>
                    <th><strong>Supplier Name</strong></th>
                    <th><strong>Supplier Address</strong></th>
                     <th><strong>Description</strong></th>
                    <th><strong>Edit</strong></th>
                    <th><strong>Delete</strong></th>
                </tr>
             </thead>
             
             

			<tbody>
            <?php
                $No=1;
                $result = mysqli_query($conn, "SELECT * FROM supplier");
                while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
                {
            ?>
			<tr>
              <td class="cotCheckBox"><?php echo $No; ?></td>
              <td><?php echo $row["Su_Name"]; ?></td>
              <td><?php echo $row["Su_Address"]; ?></td>
              <td><?php echo $row["Su_Des"]; ?></td>
              <td style='text-align:center'><a href="?page=update_supplier&&id=<?php echo $row["Su_ID"]; ?>">
              <img src='images/edit.png' border='0' /></a></td>

              <td style="text-align:center"><a href="?page=supplier_management&&function=del&&id=<?php echo $row["Su_ID"]; ?>"
               onclick="return deleteConfirm()">
               <img src="./images/delete.png" border='0' ></a></td>
            </tr>
            <?php
                $No++;
                }
                ?>
		
			</tbody>
        </table>  
        
        
        <!--Add new , delete all (button)-->
        <div class="row" style="background-color:#FFF"><!--Function button-->
            <div class="col-md-12">
            	
            </div>
        </div><!--Function button-->
 </form>
