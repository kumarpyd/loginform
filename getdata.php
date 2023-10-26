<?php
     $con=mysqli_connect("localhost", "root", "", "loginform");
			 $sql="select*from users";
			 $res=mysqli_query($con,$sql);
			 if($res)
			 {
				 echo 
				' <table class="table table-bordered">
					<thead>
					  <tr>
					   <th>ID</th>
						<th>Name</th>
						<th>Mobile</th>
						<th>Email</th>
					  </tr>
					</thead>';
					foreach($res as $row)
					{
						$id=$row['Uid'];
							$name=$row['Name'];
								$mobile=$row['Mobile'];
									$email=$row['Email'];
					    echo '
						<tbody>
						<tr>
							<td>'.$id.'</td>
							<td>' .$name.'</td>
							<td>'.$mobile.'</td>
							<td>'.$email.'</td>
						  </tr>
						</tbody>';
					}
					 echo ' </table>';
		
	}
?>