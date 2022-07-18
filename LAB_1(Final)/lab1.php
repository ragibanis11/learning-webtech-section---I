<html>
<head>
	
	<title>User list</title>
</head>
<body>
		
		<br>
		<table border="1">
			<tr>
				
				
				<th>ID</th>
                <th>NAME</th>
				<th>PASSWORD</th>
				<th>EMAIL</th>
			
			</tr>

			<?php 

    $conn = mysqli_connect('localhost', 'root' , '', 'webtech');

     if($conn){
        echo "Success";
        echo "<br>";
     }else{
       echo "DB Error...";
     }

    $sql = "select * from users";
    $result = mysqli_query($conn, $sql);
    
    $row= mysqli_fetch_assoc($result)
        
    
?>
			<tr>
				<th><?=$row["Id"]?></th>
				<th><?=$row["Name"]?></th>
				<th><?=$row["Password"]?></th>
				<th><?=$row["Email"]?></th>
				
				
			</tr>
			<?php
					
				
			?>
		</table>
</body>
</html>