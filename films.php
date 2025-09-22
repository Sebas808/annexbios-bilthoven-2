<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Agenda</title>
    <link rel="stylesheet" href="/annexbios-bilthoven-2/assets/css/films.css">
</head>

<body>
    <div id="films">
        <div id="head">
            <h2>FILM AGENDA</h2>
        </div>

        <div id="filters">
            <div class="filter-box">
                <input type="radio" name="filter" id="movies">
                <label for="movies">Films</label>
            </div>

            <div class="filter-box">
                <input type="radio" name="filter" id="thisweek">
                <label for="thisweek">Deze week</label>
            </div>

            <div class="filter-box">
                <input type="radio" name="filter" id="today">
                <label for="today">Vandaag</label>
            </div>

            <div class="filter-box">
                <input type="radio" name="filter" id="category">
                <label for="category">
                    Categorie
                    <img src="\annexbios-bilthoven-2\assets\img\arrow-down-sign-to-navigate (2).png" alt="arrow" class="arrow-icon">
                </label>
            </div>
        </div>
    </div>

    <div class="film-container">
        <?php

        $films = [
            [
                "titel" => "Film Titel 1",
                "release" => "",
                "beschrijving" => "Beschrijving van film 1...",
                "poster" => "https://m.media-amazon.com/images/I/71H4DWjnvbL.jpg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 2",
                "release" => "",
                "beschrijving" => "Beschrijving van film 2...",
                "poster" => "https://theposterdepot.com/cdn/shop/products/deadpool2ptr08201901_ed167c6b-48fa-43f0-a7a9-bdc094e37926_580x.jpg?v=1754777660",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 3",
                "release" => "",
                "beschrijving" => "Beschrijving van film 3...",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 4",
                "release" => "",
                "beschrijving" => "Beschrijving van film 4...",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 5",
                "release" => "",
                "beschrijving" => "Beschrijving van film 5...",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 6",
                "release" => "",
                "beschrijving" => "Beschrijving van film 6...",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 7",
                "release" => "",
                "beschrijving" => "Beschrijving van film 7...",
                "poster" => "https://m.media-amazon.com/images/I/71H4DWjnvbL.jpg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 8",
                "release" => "",
                "beschrijving" => "Beschrijving van film 8...",
                "poster" => "https://theposterdepot.com/cdn/shop/products/deadpool2ptr08201901_ed167c6b-48fa-43f0-a7a9-bdc094e37926_580x.jpg?v=1754777660",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 9",
                "release" => "",
                "beschrijving" => "Beschrijving van film 9...",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 10",
                "release" => "",
                "beschrijving" => "Beschrijving van film 10...",
                "poster" => "https://www.biosagenda.nl/poster/peter-rabbit_23747_140_0_90.jpg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 11",
                "release" => "",
                "beschrijving" => "Beschrijving van film 11...",
                "poster" => "https://www.vintagemovieposters.co.uk/wp-content/uploads/2020/04/IMG_4036-2-scaled.jpeg",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 12",
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
            echo '<p>Release: ' . $film["release"] . '</p>';
            echo '<p>' . $film["beschrijving"] . '</p>';
            echo '<a href="' . $film["link"] . '" class="button">Meer info & Tickets</a>';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>