<?php
            include_once('config/dbconnect.php');

        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kannur Bombers FC</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/uistyle.css">
</head>

<body>

    <!-- Header -->
    <header>
        <div class="logo">
            <h5>Welcome to Kannur Bombers FC</h5>
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#players">Players</a></li>
                <li><a href="#table">Points Table</a></li>
                <li><a href="#highlights">Highlights</a></li>
                <li><a href="#tickets">Buy Tickets</a></li>
            </ul>
        </nav>
        <div class="search-login">
            <input type="text" placeholder="Search...">
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Kannur Bombers FC</h1>
    </section>
    <section class="sponsors">
        <h2>Our Sponsors</h2>
        <div class="sponsor-logos">
            <?php
      $sql="SELECT * from sponsers";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
            <div class="sponsor">
                <img src='<?='admin/'.substr($row["logo"],1)?>' alt='<?=$row["name"]?>'>
            </div>
            <?php
            $count=$count+1;
           
        }
    }
    ?>
        </div>
    </section>

    <!-- News Section -->
    <section class="news" id="news">
        <?php
      $sql="SELECT * from club_news";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
        <div class="news-card">
            <div class="news-content">
                <h2><?=$row["title"]?></h2>
                <p><?=$row["content"]?></p>
            </div>
        </div>
        <?php
            $count=$count+1;
           
        }
    }
    ?>
    </section>

    <!-- Players Section -->
    <section class="players" id="players">
        <h2 style="margin-bottom: 16px;">Meet the Players</h2>
        <div class="player-cards">
            <?php
      $sql="SELECT * from players";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
            <div class="player-card">
                <img src='<?='admin/'.substr($row["image"],1)?>' alt="Player 1">
                <h3><?=$row["name"]?></h3>
                <p><?=$row["position"]?></p>
            </div>
            <?php
            $count=$count+1;
           
        }
    }
    ?>
        </div>
    </section>

    <!-- Points Table Section -->
    <section class="points-table" id="table">
        <h2>Points Table</h2>
        <table>
            <thead>
                <tr>
                    <th>Position</th>
                    <th>Team</th>
                    <th>Played</th>
                    <th>Won</th>
                    <th>Drawn</th>
                    <th>Lost</th>
                    <th>Points</th>
                </tr>
            </thead>
            <tbody>
                <?php
     $sql = "SELECT * FROM points_table ORDER BY points DESC, goal_difference DESC";
     $result = $conn->query($sql);
     $count = 1;
     
     if ($result->num_rows > 0) {
         while ($row = $result->fetch_assoc()) {
     ?>
             <tr>
                 <td><?=$count?></td>
                 <td><?=$row["team_name"]?></td>
                 <td><?=$row["matches_played"]?></td>
                 <td><?=$row["wins"]?></td>
                 <td><?=$row["draws"]?></td>
                 <td><?=$row["losses"]?></td>
                 <td><?=$row["points"]?></td>
             </tr>
     <?php
             $count++;
         }
     }
     
    ?>
                           </tbody>
        </table>
    </section>
    <!-- Highlights Section -->
    <section class="highlights" id="highlights">
        <h2 style="margin-bottom: 16px;">Match Highlights</h2>
        <div class="highlights-cards">
            <?php
      $sql="SELECT * from club_highlights ORDER BY highlights_id DESC LIMIT 2";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
            <div>
                <iframe src='<?=$row["url"]?>' width="560" height="315" allowtransparency="true"
                    frameborder="0"></iframe>
            </div>
            <?php
            $count=$count+1;
           
        }
    }
    ?>
        </div>
    </section>



    <!-- Buy Tickets Section -->
    <section class="buy-tickets" id="tickets">
        <h2>Buy Tickets</h2>
        <p>Reserve your spot for the next thrilling match!</p>
        <form action="#" method="POST" class="ticket-form">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="match">Select Match:</label>
                <select id="match" name="match" required>
                    <option value="match1">Kannur Bombers FC vs Rivals</option>
                    <option value="match2">Kannur Bombers FC vs Team B</option>
                    <option value="match3">Kannur Bombers FC vs Team C</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Number of Tickets:</label>
                <input type="number" id="quantity" name="quantity" min="1" max="10" required>
            </div>
            <button type="submit" class="ticket-btn">Buy Now</button>
        </form>
    </section>


    <!-- Footer -->
    <footer>
        <div class="footer-links">
            <ul>
                <li><a href="./assets/txt/Kannur_Bombers_FC_Privacy_Policy.txt">Privacy Policy</a></li>
                <li><a href="./assets/txt/Kannur_Bombers_FC_Terms_of_Use.txt">Terms of Use</a></li>
            </ul>
        </div>
        <div class="social-media">
            <a href="https://www.facebook.com/login/"><img class="smlogo"
                    src="./assets/img/5296499_fb_facebook_facebook logo_icon.jpg" height="20" width="20"
                    alt="Facebook"></a>
            <a href="https://twitter.com/login"><img class="smlogo" src="./assets/img/Twitter X Icon.png" height="20"
                    width="20" alt="Twitter"></a>
            <a href="https://www.secure.instagram.com/accounts/login/?next=%2Fharianbanten.co.id%2F&source=desktop_nav"><img
                    class="smlogo" src="./assets/img/5296765_camera_instagram_instagram logo_icon.png" height="20"
                    width="20" alt="Instagram"></a>
        </div>
        <p>&copy; 2024 Kannur Bombers FC</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $('.player-cards').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 3,
            autoplay: true,
            autoplaySpeed: 2000,
            arrows: false
        });
    });
    </script>
</body>

</html>