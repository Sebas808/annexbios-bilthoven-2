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
            <form action="">
                <div id="filters">
                    <div class="input">
                        <input type="radio" name="filter" id="movies">
                        <label for="movies">Films</label>
                    </div>
                    <div class="input">
                        <input type="radio" name="filter" id="thisweek">
                        <label for="thisweek">Deze week</label>
                    </div>
                    <div class="input">
                        <input type="radio" name="filter" id="today">
                        <label for="today">Vandaag</label>
                    </div>
                    <div class="input">
                        <input type="radio" name="filter" id="category">
                        <label for="category">Categorie</label>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="film-container">
        <?php
        
        $films = [
            [
                "titel" => "Film Titel 1",
                "release" => "",
                "beschrijving" => "Beschrijving van film 1...",
                "poster" => "#",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 2",
                "release" => "",
                "beschrijving" => "Beschrijving van film 2...",
                "poster" => "#",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 3",
                "release" => "",
                "beschrijving" => "Beschrijving van film 3...",
                "poster" => "#",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 4",
                "release" => "",
                "beschrijving" => "Beschrijving van film 3...",
                "poster" => "#",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 5",
                "release" => "",
                "beschrijving" => "Beschrijving van film 3...",
                "poster" => "#",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 6",
                "release" => "",
                "beschrijving" => "Beschrijving van film 3...",
                "poster" => "#",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 7",
                "release" => "",
                "beschrijving" => "Beschrijving van film 3...",
                "poster" => "#",
                "link" => "#"
            ],
            [
                "titel" => "Film Titel 8",
                "release" => "",
                "beschrijving" => "Beschrijving van film 3...",
                "poster" => "#",
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
