<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annex Bios Bilthoven</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>
    <?php include 'includes/h1.php'; ?>

    <div class="header_picture">
        <img class="hopen"        src="header_afbeelding.jpg" alt="header">

        <div class="header-content">
            <div class="overlay-text">
                <p class="big-text">WELKOM BIJ ANNEX BIOS BILTHOVEN</p>
                <p class="small-text">
                    Ontdek de magie van film in een gezellige, moderne bioscoop.
                    Van de nieuwste blockbusters tot bijzondere arthousefilms, bij ons beleef je elke voorstelling op een unieke manier.
                    Kom binnen, ontspan en geniet van een onvergetelijke bioscoopervaring
                </p>
                <button class="bekijk_button"  onclick="document.getElementById('films-agenda').scrollIntoView({ behavior: 'smooth'});"    >Bekijk de draaiende films</button>
            </div>

            <div class="nieuw-blok">
                <div class="deur_naast_kaart">

                    <div class="kaart-column">
                        <img src="assets/img/maps.png" class="map">
                        <div class="paars-blok">
                            <p>📍 Rijksstraatweg 42</p>
                            <p>📍 3223 KA Hellevoetsluis</p>
                            <p>📞 Bel ons: +31 6 12345678</p>
                            <h3>Bereikbaarheid</h3>
                            <p>
                                Annex Bios in Bilthoven is makkelijk te bereiken. Met de auto is er voldoende parkeergelegenheid in de buurt.
                                Ook fietsers kunnen hun fiets veilig stallen bij de bioscoop.
                                Het openbaar vervoer stopt dichtbij, en het treinstation Bilthoven is op korte afstand.
                            </p>
                        </div>
                    </div>

                    <div class="deur-column">
                        <img src="assets/img/foto.png" class="deur" alt="deur-foto">
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div style="background-color: black;" id="films-agenda">
        <?php include 'films.php' ?>
    </div>



    <?php
    include 'includes/footer.php';
    ?>


</body>

</html>