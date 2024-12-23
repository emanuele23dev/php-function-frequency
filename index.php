<!doctype html>
<html lang="en">

<head>
    <title>Php Function Frequency</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <link rel="icon" href="./Elephpant.svg">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <nav
            class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand ms-3" href="#"><img class="elephant" src="./Elephpant.svg" alt="logo-php"></a>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Frequency</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" aria-current="page">Php Doc <span class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input
                        class="form-control me-sm-2"
                        type="text"
                        placeholder="Search" />
                    <button class="btn btn-outline-light my-2 my-sm-0 me-3" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>

    </header>

    <main>

        <h1 class="text-center mt-5 mb-4">Function Frequency</h1>

        <div class="text-center mt-5">
            <?php

            function freq_max_cardio($nome_atleta, $eta_atleta)
            {
                $max_cardio = 220 - $eta_atleta;

                return $max_cardio;
            }

            $dati_emanuele = freq_max_cardio("Emanuele", 37);

            $testo = "<p>L'atleta Emanuele ha una frequenza cardiaca massima di $dati_emanuele bpm.</p>";

            echo str_replace('Emanuele', 'Alvaruccio', $testo);
            echo '<img class="ecg" src="./ecg.jpg" alt="">'
            ?>
        </div>



    </main>

    <footer>
        <div class='d-flex align-items-center justify-content-center'>
            <img class="elephant" src="./Elephpant.svg" alt="logo-php">
            <p><strong>Php</strong> 2024</p>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>