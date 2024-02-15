<?php
$conn = mysqli_connect("localhost", "root", "", "nexusray");
$user_id = $_SESSION['user_id'];

$stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE user_id = ?");
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);
$pic = $row['image_url'];

?>

<nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #0e4759;">
    <!-- Navbar Brand-->
    <a class="navbar-brand" href="index.php">NexusRay</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../games.php">Games</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../products.php">Store</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../streaming.php">Streaming</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tournament.php">Tournaments</a>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <a herf='dashboard.php'>
            <img src="<?php echo $pic; ?>" width="35" height="35" style="margin-right: 5px; margin-left: 15px;">
        </a>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../dashboard.php">Dashboard</a></li>
                    <li><a class="dropdown-item" href="#!">Settings</a></li>
                    <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="http://localhost/hostel_management/logout.php">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
</nav>

<script>
    function toggleDropdown() {
        var dropdownMenu = document.getElementById("dropdownMenu");
        if (dropdownMenu.style.display === "none") {
            dropdownMenu.style.display = "block";
        } else {
            dropdownMenu.style.display = "none";
        }
    }
</script>