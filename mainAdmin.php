<?php
   include_once 'includes/mainad.inc.php';
   $query = " select * from users";
    $result = mysqli_query($conn,$query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Office</title>
    <link rel="stylesheet" href="mainAdmin.css">
</head>
<body>
<header>
    
    <nav class="navigation">
      <a href="#" class="navl">user list</a>
      <a href="edit.php" class="navl">Edit</a>
      <a href="admin_notice.php" class="navl">Add Notice</a>
      <a href="edit_notice.php" class="navl">Edit Notice</a>
      <a href="admin_request.php" class="navl">Requests</a>

      <form action="includes\logout.inc.php" method="post">
       <button type="submit" class="btnlogin-popup ">Log out</button>
      </form>
    
    </nav>
</header> 
<div class="container">
    
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table ">
                            <thead>
                            <tr>
                                <th> User ID </th>
                                <th> User Email </th>
                                <th> User Name </th>
                            </tr>
                            </thead>
                            <?php 
                                    
                                    while($row= mysqli_fetch_assoc($result))
                                    {
                                        $id=$row['id'];
                                        $email = $row['email'];
                                        $UserName = $row['username'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $email ?></td>
                                        <td><?php echo $UserName ?></td>
                                        
                                    </tr>        
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                    </div>
                </div>
            </div>
        </div>



</body>
</html>