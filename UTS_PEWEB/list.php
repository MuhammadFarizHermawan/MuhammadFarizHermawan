<!DOCTYPE html>
<html>

<head>
    <style>
        .profile-picture {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border-radius: 50%;
        }
    </style>
    <title>list</title>

    <!-- Add Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Add Bootstrap JavaScript and jQuery for interactive components -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <img src="PLZ.png" alt="Profile Picture" class="profile-picture">
                    </li>
                    <li class="nav-item"><a class="nav-link" href="dasboard.php"><strong>22.01.4831</strong></a></li>
                    <li class="nav-item"><a class="nav-link" href="dasboard.php">Muhammad Fariz Hermawan</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="create.php">Add</a></li>
                    <li class="nav-item"><a class="nav-link" href="list.php">List</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>


    <main>
        <div class="card container-fluid p-2">

            <h5 class="px-2 pt-2 pb-2 fw-bold">LIST DATA </h5>
            <table class="table">
                <thead class="table">
                    <tr>
                        <th>No</th>
                        <th>Matkul</th>
                        <th>Deskripsi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('php/dbconfig.php');

                    // Fetch data from the database
                    $sql = "SELECT * FROM matkuldb";
                    $result = mysqli_query($connect, $sql);
                    $nomor = 1;

                    if (!$result) {
                        die("Query failed: " . mysqli_error($connect));
                    }

                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td>
                                <?php echo $nomor; ?>
                            </td>
                            <td>
                                <?php echo $row['matkul']; ?>
                            </td>
                            <td>
                                <?php echo $row['deskripsi']; ?>
                            </td>

                            <?php
                            echo "<td>";
                            echo "<div class='btn-group'>";
                            echo "<a href='edit.php?matkul=" . $row['matkul'] . "' class='btn btn-primary'>EDIT</a>";
                            echo "<a href='php/delform.php?matkul=" . $row['matkul'] . "' class='btn btn-danger'>DELETE</a>";
                            echo "</div>";
                            echo "</td>";
                            ?>


                        </tr>
                        <?php
                        $nomor++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>

</body>

</html>