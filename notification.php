<?php
	 include "includes/header.php";
	// header file included
	
 ?>
	 <?php
			if(isset($_GET['delid'])){
				$delid = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['delid']);
				$delquery="DELETE FROM savelist where bid = '$delid' limit 1";   //Delete query added
				$delreslt= mysqli_query($con,$delquery);

			} 
?>


						<?php
						$counts=0;
			$userid=Session::get('userId');
			$sql="SELECT * FROM  books order by bid DESC "; //select query
			$result = mysqli_query($con,$sql);
			
			?>
	
	
	<section class="bgwhite p-t-55 p-b-65">

<div class="card " style="text-align:center;">
	<div class="card-body">
	<table class="table table-striped">
    <thead>
      <tr>
        <th style="text-align:center;">Serial</th>
        <th style="text-align:center;">Book Name</th>
		<th style="text-align:center;">Author Name</th>
		<th style="text-align:center;">Author Name</th>
       
      </tr>
    </thead>
	<tbody>
<?php
    if(!empty($result)){
							
		while($row = mysqli_fetch_array( $result )){  
			$counts++;
			$book = $row['bookname'];
			$author= $row['author'];
			$bid = $row['bid'];
			?>
			/* fetched information from database
		           Variable added */
    
      <tr>
        <td><?php  echo $counts  ?></td>
        <td><?php  echo $book  ?></td>
		<td><?php  echo $author  ?></td>
		<td style="color:blue;">Hello! This book is new!</td> 
	      
       
      </tr>
      
   
  <?php
			
		}
	}
   ?>
    </tbody>
  </table>
 
</div>
</div>
		
  
  
   <a href="?action=logout" class="btn btn-danger">Logout</a> //logout button
</section>

	
	<!-- Footer -->
	<?php
     include "includes/footer.php";
	 
?>
	
