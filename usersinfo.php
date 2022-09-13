<?php 
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>

<link rel="stylesheet" href="usersinfo.css">

<nav class="nav">
<h1>SPARK'S BANK</h1> 
</nav>

<div class="container">
        <h2>User Info</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="tablee">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">Id</th> 
                            <th scope="col" class="text-center">Name</th>
                            <th scope="col" class="text-center">E-Mail</th>
                            <th scope="col" class="text-center">Balance</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div> 

<?php include('footer.php'); ?>
</body>
</html>
