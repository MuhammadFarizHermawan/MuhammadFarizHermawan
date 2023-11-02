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
    <title>dashboard</title>

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


   
    <div class="col-25 ps ">
       <div class=" d-flex flex-column align-items-center">
        <H3>Perkuliahan</H3>
        <div class="input-group flex-nowrap w-25 mb-3">
          <span class="input-group-text"></span>
          <input type="text" class="form-control" placeholder="Search" >
          <span class="input-group-text"></span>
        </div>
        <div class="card w-75 flex-row justify-content-between px-5 mb-3">
          <div> 
            <p class="my-0">Program Studi</p>
            <p class="my-0">Mata Kuliah</p>
            <p class="my-0">Semester-2023</p>
          </div>
          <div class="justify-content-start">
            <a class="btn btn-primary mt-4 mb-3" href="view_rps.php">Lihat rps</a>
          </div>
        </div>
        <div class="card w-75 flex-row justify-content-between px-5 mb-3">
          <div> 
            <p class="my-0">Program Studi</p>
            <p class="my-0">Mata Kuliah</p>
            <p class="my-0">Semester-2023</p>
          </div>
          <div class="justify-content-start">
            <a class="btn btn-primary mt-4 mb-3" href="view_rps.php">Lihat rps</a>
          </div>
        </div>
        <div class="card w-75 flex-row justify-content-between px-5 mb-3">
          <div> 
            <p class="my-0">Program Studi</p>
            <p class="my-0">Mata Kuliah</p>
            <p class="my-0">Semester-2023</p>
          </div>
          <div class="justify-content-start">
            <a class="btn btn-primary mt-4 mb-3" href="view_rps.php">Lihat rps</a>
          </div>
        </div>
        <div class="card w-75 flex-row justify-content-between px-5 mb-3">
          <div> 
            <p class="my-0">Program Studi</p>
            <p class="my-0">Mata Kuliah</p>
            <p class="my-0">Semester-2023</p>
          </div>
          <div class="justify-content-start">
            <a class="btn btn-primary mt-4 mb-3" href="view_rps.php">Lihat rps</a>
          </div>
        </div>

      </div>
</body>

</html>