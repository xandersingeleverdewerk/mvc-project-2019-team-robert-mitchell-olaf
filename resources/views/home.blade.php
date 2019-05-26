<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pretpark HappyLand</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('css/scss/home.scss')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<section class="information">
<h2>Informatie</h2>
    <p>
        Binnenkort wordt er nieuw pretpark gebouwd met de originele naam Pretpark HappyLand.
        In dit pretpark draait alles om lol maken en heel veel lachen.
        <span id="dots">...</span>
        <span id="more">
        Stap bijvoorbeeld in de coolste achtbanen of geniet van een rustig ritje in een familieattractie.
        Ook kun je tijdens het warme weer afkoelen in één van onze waterattracties. Is dit niet genoeg afkoeling?
            Dan kun je altijd bij één van onze ijskraampjes een lekker koud ijsje halen.
            In het park vind je ook allerlei restaurants waar je lekker kan eten met je vrienden en familie.
            Wanneer je het park verlaat wil je natuurlijk wel een leuk aandenken voor thuis hebben. Ook hiervoor hebben wij wat jij zoekt.
            Namelijk verschillende winkels verspreid over het park.
            </span>
    </p>
        <button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>
</section>

<script>
    function myFunction() {
        var dots = document.getElementById("dots");
        var moreText = document.getElementById("more");
        var btnText = document.getElementById("myBtn");

        if (dots.style.display === "none") {
            dots.style.display = "inline";
            btnText.innerHTML = "Read more";
            moreText.style.display = "none";
        } else {
            dots.style.display = "none";
            btnText.innerHTML = "Read less";
            moreText.style.display = "inline";
        }
    }
</script>

</body>
</html>