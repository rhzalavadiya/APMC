<?php
			$con=mysqli_connect('localhost','root','','APMC');
			$sql="select * from pro";
			if($result=mysqli_query($con,$sql))
		    {
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_array($result))
					{ 
						$s="DELETE FROM pro where pid=$_GET[t1]";
						$r=mysqli_query($con,$s);
					}
					if ($r>0) 
						{
							echo "<h3>  Delete successfully!</h3>";
						} 
						else 
						{
							echo "<h3>Fail</h3>";
						}
				}
			}
?>