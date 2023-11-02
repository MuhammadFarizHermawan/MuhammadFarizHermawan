<!DOCTYPE html>
<html>

<head>
    <style>
        /* Customize the navigation bar */
        .navbar {
            background-color: #007BFF;
        }

        /* Style the profile picture */
        .profile-picture {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            border-radius: 50%;
        }

        /* Style the main content */
        main {
            padding: 20px;
        }

        /* Add padding to the submit button */
        .btn-primary {
            padding: 10px 20px;
        }
    </style>
    <title>Create</title>

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
                    <li class="nav-item"><a class="nav-link" href="create.php">Create</a></li>
                    <li class="nav-item"><a class="nav-link" href="list.php">List</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <main class="container mt-5">

        </form>
        <form action="PHP/createrps.php" method="POST">
            <h5 class="px-2 pt-2 fw-bold text-center">Buat RPS Baru</h5>
            <div class="form-group p-2 mx-auto">
                <div class="row">
                    <div class="col">
                        <label for="matkul" class="form-label">Matkul</label>
                        <input type="text" name="matkul" id="matkul" class="form-control mb-2"
                            placeholder="Masukkan nama Matkul">
                    </div>
                    <div class="col">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control mb-2"
                            placeholder="Masukkan Deskripsi">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi1" class="form-label">Materi 1</label>
                        <input type="text" name="materi1" id="materi1" class="form-control mb-2"
                            placeholder="Masukkan materi 1">
                    </div>
                    <div class="col">
                        <label for="materi2" class="form-label">Materi 2</label>
                        <input type="text" name="materi2" id="materi2" class="form-control mb-2"
                            placeholder="Masukkan materi 2">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi3" class="form-label">Materi 3</label>
                        <input type="text" name="materi3" id="materi3" class="form-control mb-2"
                            placeholder="Masukkan materi 3">
                    </div>
                    <div class="col">
                        <label for="materi4" class="form-label">Materi 4</label>
                        <input type="text" name="materi4" id="materi4" class="form-control mb-2"
                            placeholder="Masukkan materi 4">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi5" class="form-label">Materi 5</label>
                        <input type="text" name="materi5" id="materi5" class="form-control mb-2"
                            placeholder="Masukkan materi 5">
                    </div>
                    <div class="col">
                        <label for="materi6" class="form-label">Materi 6</label>
                        <input type="text" name="materi6" id="materi6" class="form-control mb-2"
                            placeholder="Masukkan materi 6">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi7" class="form-label">Materi 7</label>
                        <input type="text" name="materi7" id="materi7" class="form-control mb-2"
                            placeholder="Masukkan materi 7">
                    </div>
                    <div class="col">
                        <label for="materi8" class="form-label">Materi 8</label>
                        <input type="text" name="materi8" id="materi8" class="form-control mb-2"
                            placeholder="Masukkan materi 8">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi9" class="form-label">Materi 9</label>
                        <input type="text" name="materi9" id="materi9" class="form-control mb-2"
                            placeholder="Masukkan materi 9">
                    </div>
                    <div class="col">
                        <label for="materi10" class="form-label">Materi 10</label>
                        <input type="text" name="materi10" id="materi10" class="form-control mb-2"
                            placeholder="Masukkan materi 10">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi11" class="form-label">Materi 11</label>
                        <input type="text" name="materi11" id="materi11" class="form-control mb-2"
                            placeholder="Masukkan materi 11">
                    </div>
                    <div class="col">
                        <label for="materi12" class="form-label">Materi 12</label>
                        <input type="text" name="materi12" id="materi12" class="form-control mb-2"
                            placeholder="Masukkan materi 12">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="materi13" class="form-label">Materi 13</label>
                        <input type="text" name="materi13" id="materi13" class="form-control mb-2"
                            placeholder="Masukkan materi 13">
                    </div>
                    <div class="col">
                        <label for="materi14" class="form-label">Materi 14</label>
                        <input type="text" name="materi14" id="materi14" class="form-control mb-2"
                            placeholder="Masukkan materi 14">
                    </div>
                </div>
            </div>
            </div>
            <button name="daftar" type="submit" class="btn btn-primary ">SUBMIT</i></button>
        </form>
    </main>

</body>

</html>