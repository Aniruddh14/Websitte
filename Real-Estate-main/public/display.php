
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    <link href="css/comman.css" rel="stylesheet" />
    <link href="css/home.css" rel="stylesheet" />
</head>
<body>
            <div id="fourth" class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="table-primary">>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Duty</th>
                    <th scope="col">Phone No.</th>
                    </tr>
                </thead>
                <tbody>

                <?php
                        $db_hostname = "127.0.0.1";
                        $db_username = "root";
                        $db_password = "";
                        $db_name = "website";

                        $conn = mysqli_connect ($db_hostname, $db_username, $db_password, $db_name);
                        if (!$conn){
                            echo "Connection failed".mysqli_connect_error();
                            exit;
                        }
                        $selectquery = "select * from workers";
                        $query = mysqli_query($conn,$selectquery);
                        $num = mysqli_num_rows($query);


                        while($res = mysqli_fetch_array($query)){
                            ?>

                            <tr>
                            <th scope="row"><?php echo $res['workerid']; ?></th>
                            <td><?php echo $res['name']; ?></td>
                            <td><?php echo $res['duty']; ?></td>
                            <td><?php echo $res['phone']; ?></td>
                            </tr>
                            <?php
                        }
                        ?>
                </tbody>
                </table>
            </div>
</body>
</html>