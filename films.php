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

        $films = [
            [
                "titel" => "JURASSIC WORLD: 
FALLEN KINGDOM ",
                "rating" => 2.6,
                "release" => "7-06-2018",
                "beschrijving" => "Welkom in Jurassic World: Fallen 
Kingdom! Favoriete personages 
keren terug in dit 3D actie-
spektakel.",
                "poster" => "https://m.media-amazon.com/images/I/71H4DWjnvbL.jpg",
                "link" => "detail.php?id=1"
            ],
            [
                "titel" => "DEADPOOL 2",
                "rating" => 3,
                "release" => "17-05-2018",
                "beschrijving" => "Na het overleven van een bijna 
fatale runderaanval, worstelt een 
misvormde cafetaria-kok (Wade 
Wilson) om zijn droom",
                "poster" => "https://theposterdepot.com/cdn/shop/products/deadpool2ptr08201901_ed167c6b-48fa-43f0-a7a9-bdc094e37926_580x.jpg?v=1754777660",
                "link" => "detail.php?id=0"
            ],
            [
                "titel" => "SOLO:
A STAR WARS STORY",
                "rating" => 5,
                "release" => "23-05-2018",
                "beschrijving" => "Een compleet nieuw avontuur uit 
een ‘galaxy far, far away’, dat het 
verhaal vertelt over het verleden 
van de iconische smokkelaar, ",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "detail.php?id=3"
            ],
            [
                "titel" => "PIETER KONIJN",
                "rating" => 3,
                "release" => "28-03-2018",
                "beschrijving" => "Verfilming van Beatrix Potter’s 
tijdloze verhaal over een eigenwijs 
konijn dat probeert de moestuin 
van een boer binnen te dringen.",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "detail.php?id=2"
            ],
            [
                "titel" => "SOLO:
A STAR WARS STORY",
                "rating" => 4,
                "release" => "23-05-2018",
                "beschrijving" => "Een compleet nieuw avontuur uit 
een ‘galaxy far, far away’, dat het 
verhaal vertelt over het verleden 
van de iconische smokkelaar, ",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "PIETER KONIJN",
                "rating" => 4,
                "release" => "28-03-2018",
                "beschrijving" => "Verfilming van Beatrix Potter’s 
tijdloze verhaal over een eigenwijs 
konijn dat probeert de moestuin 
van een boer binnen te dringen.",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "#"
            ],
            [
                "titel" => "JURASSIC WORLD: 
FALLEN KINGDOM",
                "rating" => 4,
                "release" => "7-06-2018",
                "beschrijving" => "Welkom in Jurassic World: Fallen 
Kingdom! Favoriete personages 
keren terug in dit 3D actie-
spektakel.",
                "poster" => "https://m.media-amazon.com/images/I/71H4DWjnvbL.jpg",
                "link" => "#"
            ],
            [
                "titel" => "DEADPOOL 2",
                "rating" => 4,
                "release" => "17-05-2018",
                "beschrijving" => "Na het overleven van een bijna 
fatale runderaanval, worstelt een 
misvormde cafetaria-kok (Wade 
Wilson) om zijn droom",
                "poster" => "https://theposterdepot.com/cdn/shop/products/deadpool2ptr08201901_ed167c6b-48fa-43f0-a7a9-bdc094e37926_580x.jpg?v=1754777660",
                "link" => "#"
            ],
            [
                "titel" => "SOLO:
A STAR WARS STORY",
                "rating" => 4,
                "release" => "23-05-2018",
                "beschrijving" => "Een compleet nieuw avontuur uit 
een ‘galaxy far, far away’, dat het 
verhaal vertelt over het verleden 
van de iconische smokkelaar,",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "PIETER KONIJN",
                "rating" => 4,
                "release" => "28-03-2018",
                "beschrijving" => "Verfilming van Beatrix Potter’s 
tijdloze verhaal over een eigenwijs 
konijn dat probeert de moestuin 
van een boer binnen te dringen.",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "#"
            ],
            [
                "titel" => "SOLO:
A STAR WARS STORY",
                "rating" => 4,
                "release" => "23-05-2018",
                "beschrijving" => "Een compleet nieuw avontuur uit 
een ‘galaxy far, far away’, dat het 
verhaal vertelt over het verleden 
van de iconische smokkelaar, ",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "PIETER KONIJN",
                "rating" => 4,
                "release" => "28-03-2018",
                "beschrijving" => "Verfilming van Beatrix Potter’s 
tijdloze verhaal over een eigenwijs 
konijn dat probeert de moestuin 
van een boer binnen te dringen.",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "#"
            ],


        ];


        foreach ($films as $index => $film) {
            echo '<div class="film" id="film' . ($index + 1) . '">';
            echo '<img src="' . $film["poster"] . '" alt="Poster van ' . $film["titel"] . '">';
            echo '<h2>' . $film["titel"] . '</h2>';
            echo '<div class="rating">';

            echo '<div class="rating">';
            $maxStars = 5;
            $rating = $film["rating"];

            for ($i = 1; $i <= $maxStars; $i++) {
                $percentage = min(max($rating - ($i - 1), 0), 1) * 100;
                echo '<span class="star-rating">';
                echo '<i class="fa-regular fa-star"></i>';
                echo '<span class="filled" style="width:' . $percentage . '%"><i class="fa-solid fa-star"></i></span>';
                echo '</span>';
            }
            echo '</div>';



            echo '</div>';
            echo '<p>Release: ' . $film["release"] . '</p>';
            echo '<p>' . $film["beschrijving"] . '</p>';
            echo '<a href="' . $film["link"] . '" class="button">Meer info & Tickets</a>';
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