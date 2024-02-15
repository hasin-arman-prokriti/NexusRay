<?php
@include "config.php";
session_start();
$user_id = $_SESSION['user_id'];
$user_details_query = "SELECT * FROM user_game WHERE user_id = '$user_id'";
$result = mysqli_query($connect, $user_details_query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="dashboard.css">
    <title>Dashboard</title>

</head>

<body>
    <header>
        <aside>
            <h1>NexusRay</h1>
            <div class="action">
                <div class="searchBx">
                    <a href="#"><i class="bi bi-search"></i></a>
                    <input type="text" placeholder="Search People">
                </div>
            </div>
            <div class="Friends">
                <h2><i class="bi bi-person-fill"></i> Friends</h2>
                <div class="cards">
                    <div class="card">
                        <div class="img_bx">
                            <img src="AZN.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Zaber</h3>
                            <p>Playing Splinter Cell Conviction</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="SH.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Shahriar</h3>
                            <p>Playing Batman Arkhan City</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="IAM.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Iftekhar</h3>
                            <p>Playing Doom Eternal</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="HAP.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Prokriti</h3>
                            <p>Playing Red Dead Redemption</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="AIR.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Rami</h3>
                            <p>Playing GTA V</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="80245310_530033820921459_2858103733928067072_n.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Junaid</h3>
                            <p>Playing The Last of Us</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="275605827_3173848496225221_5720520885148982364_n.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Safaur</h3>
                            <p>Playing Assassin's Creed II</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img_bx">
                            <img src="293723573_5411096005577676_8819121898548162682_n.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3>Muntakim</h3>
                            <p>Playing Fortnite</p>
                        </div>
                    </div>
                </div>
            </div>

        </aside>
        <article>
            <nav>
                <a href="checkout.php">

                    <button>
                        Checkout
                        <i class="bi-cart-fill me-1"></i>
                         </button>
                </a>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="products.php">Store</a></li>
                    <li><a href="Tournament/tournament.php">Tournament</a></li>
                    <li><a href="streaming.php">Stream</a></li>
                </ul>
                <?php $stmt = mysqli_prepare($connect, "SELECT * FROM user WHERE user_id = ?");
                mysqli_stmt_bind_param($stmt, "i", $user_id);
                mysqli_stmt_execute($stmt);
                $r = mysqli_stmt_get_result($stmt);
                $row = mysqli_fetch_assoc($r);
                $pic = $row['image_url']; ?>
                <img src="<?php echo $pic; ?>" width="35" height="35" style="margin-right: 5px; margin-left: 15px;"
                    class="user-profile" onclick="toggleMenu()">
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="user-info">
                        <img src="315316320_3330293953906778_9197244363286089419_n.jpg" alt="">
                        <h4>Md Rakibul Islam</h4>
                    </div>
                    <hr>
                    <a href="#" class="sub-menu-link">
                        <p>Edit Profile</p>
                        <span>></span>
                    </a>
                    <a href="#" class="sub-menu-link">
                        <p>Settings</p>
                        <span>></span>
                        <a href="#" class="sub-menu-link">
                            <p>Logout</p>
                            <span>></span>
                        </a>
                </div>
            </nav>
            

            <div class="games">
            <h1 style="color: white">Welcome <?php echo $row['name'] ;?> !</h1>
                <h4>Game Library</h4>

                <div class="cardBx">

                    <?php
                    while ($game_id = mysqli_fetch_assoc($result)):
                        $id = $game_id['game_id'];
                        $query = "SELECT * FROM nexusray.games WHERE game_id = '$id'";
                        $game = mysqli_query($connect, $query);
                        $game = mysqli_fetch_assoc($game);
                        $game_name = $game['name'];
                        $game_image = $game['image_url'];
                        ?>

                        <div class="card" data-item="pc">
                            <img src="<?php echo $game_image; ?>" alt="">
                            <div class="content">
                                <h5>
                                    <?php echo $game_name; ?>
                                </h5>
                                <div class="progress-line"><span></span></div>
                                <div class="info">
                                    <a href="#">Play</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>


                </div>
            </div>


        </article>
    </header>
    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

</body>

</html>