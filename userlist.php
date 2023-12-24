<?php
include "connection.php";




$query = "SELECT * FROM `user`";

$data = mysqli_query($check,$query);
include "header1.php";

?>
    <div class="container">
        <h1 class="text-center mt-4">All user DATA</h1>
        <br><br><br>
        <!-- Bootstrap Table -->
        <table class="table table-striped  table-responsive m-auto">
            <thead class="table-dark">
                <tr class="text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody class="text-center fw-semibold">

                <?php
            while ($newData = mysqli_fetch_assoc($data)) {?>

                <tr>
                    <td><?php echo $newData['id'];?></td>
                    <td><?php echo $newData['name'];?></td>
                    <td><?php echo $newData['username'];?></td>
                    <td><?php echo $newData['password'];?></td>
                    <td><a href="userDel.php?id=<?php echo $newData['id']?>">delete</a></td>
                
                </tr>

                <?php
            }
            ?>


                <!-- Add more rows as needed -->
            </tbody>
        </table>

    </div>
        </div>

    </body>

</html>


