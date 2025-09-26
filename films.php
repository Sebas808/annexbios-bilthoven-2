<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Agenda</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="/annexbios-bilthoven-2/assets/css/films.css">
</head>

<body>
    <div id="films">
        <div id="head">
            <h2>FILM AGENDA</h2>
        </div>

        <div id="filters">
            <i class="fa-solid fa-sliders" style="color: #ffffff;"></i>
            <div class="filter-box">
                <input type="radio" name="filter" id="movies">
                <span>Films</span>
            </div>

            <div class="filter-box">
                <input type="radio" name="filter" id="thisweek">
                <span>Deze week</span>
            </div>

            <div class="filter-box">
                <input type="radio" name="filter" id="today">
                <span>Vandaag</span>
            </div>

            <div class="filter-box dropdown">
                <span id="dropdown-toggle">
                    Categorie
                    <img src="\annexbios-bilthoven-2\assets\img\arrow-down-sign-to-navigate (2).png" alt="arrow" class="arrow-icon">
                </span>
                <div class="dropdown-menu">
                    <label><input type="checkbox" value="actie"> Actie</label>
                    <label><input type="checkbox" value="comedy"> Comedy</label>
                    <label><input type="checkbox" value="drama"> Drama</label>
                    <label><input type="checkbox" value="horror"> Horror</label>
                </div>
            </div>
        </div>
    </div>

    <div class="film-container">
        <?php
        
        $apiKey = "uE5aGsO97OKkOAzSv8c6MsA3rk79IQdS";
        $url = "https://annexbios.gluwebsite.nl/admin/api/movies/get_movies.php";

        
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["api-key: " . $apiKey]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $response = curl_exec($ch);
        curl_close($ch);

        $data = json_decode($response, true);

        if ($data && isset($data['data'])) {
            $films = $data['data'];
        } else {
            $films = [];
            echo "<p style='color:white;'>Kon geen films ophalen van de API.</p>";
        }

        
        foreach ($films as $film) {
            echo '<div class="film">';
            echo '<img src="' . $film["poster"] . '" alt="Poster van ' . htmlspecialchars($film["title"]) . '">';
            echo '<h2>' . htmlspecialchars($film["title"]) . '</h2>';

            
            echo '<div class="rating">';
            $maxStars = 5;
            $rating = $film["stars"];
            for ($i = 1; $i <= $maxStars; $i++) {
                $percentage = min(max($rating - ($i - 1), 0), 1) * 100;
                echo '<span class="star-rating">';
                echo '<i class="fa-regular fa-star"></i>';
                echo '<span class="filled" style="width:' . $percentage . '%"><i class="fa-solid fa-star"></i></span>';
                echo '</span>';
            }
            echo '</div>';

            
            echo '<p>Release: ' . htmlspecialchars($film["release_date"]) . '</p>';
            echo '<p>' . htmlspecialchars($film["overview"]) . '</p>';

            
            echo '<a href="detail.php?id=' . $film["id"] . '" class="button">Meer info & Tickets</a>';
            echo '</div>';
        }
        ?>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const toggle = document.getElementById("dropdown-toggle");
            const menu = document.querySelector(".dropdown-menu");

            toggle.addEventListener("click", () => {
                menu.style.display = menu.style.display === "block" ? "none" : "block";
            });

            document.addEventListener("click", (e) => {
                if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                    menu.style.display = "none";
                }
            });
        });
    </script>
</body>
</html>
