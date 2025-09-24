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
                "titel" => "Film Titel 1",
                "rating" => 2.6,
                "release" => "",
                "beschrijving" => "Beschrijving van film 1...",
                "poster" => "https://m.media-amazon.com/images/I/71H4DWjnvbL.jpg",
                "link" => "detail.php?id=1"
            ],
            [
                "titel" => "Film Titel 2",
                "rating" => 3,
                "release" => "",
                "beschrijving" => "Beschrijving van film 2...",
                "poster" => "https://theposterdepot.com/cdn/shop/products/deadpool2ptr08201901_ed167c6b-48fa-43f0-a7a9-bdc094e37926_580x.jpg?v=1754777660",
                "link" => "detail.php?id=0"
            ],
            [
                "titel" => "Film Titel 3",
                "rating" => 5,
                "release" => "",
                "beschrijving" => "Beschrijving van film 3...",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "detail.php?id=3"
            ],
            [
                "titel" => "Film Titel 4",
                "rating" => 3,
                "release" => "",
                "beschrijving" => "Beschrijving van film 4...",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "detail.php?id=2"
            ],
            [
                "titel" => "Film Titel 5",
                "rating" => 4,
                "release" => "",
                "beschrijving" => "Beschrijving van film 5...",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 6",
                "rating" => 4,
                "release" => "",
                "beschrijving" => "Beschrijving van film 6...",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 7",
                "rating" => 4,
                "release" => "",
                "beschrijving" => "Beschrijving van film 7...",
                "poster" => "https://m.media-amazon.com/images/I/71H4DWjnvbL.jpg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 8",
                "rating" => 4,
                "release" => "",
                "beschrijving" => "Beschrijving van film 8...",
                "poster" => "https://theposterdepot.com/cdn/shop/products/deadpool2ptr08201901_ed167c6b-48fa-43f0-a7a9-bdc094e37926_580x.jpg?v=1754777660",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 9",
                "rating" => 4,
                "release" => "",
                "beschrijving" => "Beschrijving van film 9...",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 10",
                "rating" => 4,
                "release" => "",
                "beschrijving" => "Beschrijving van film 10...",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 11",
                "rating" => 4,
                "release" => "",
                "beschrijving" => "Beschrijving van film 11...",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 12",
                "rating" => 4,
                "release" => "",
                "beschrijving" => "Beschrijving van film 12...",
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