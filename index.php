<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="tabTitle">Accueil - GT Cars Institut By Alexander worldercraft</title>
    <?php require_once './private/php/base_import/head.php' ?>
</head>

<body>

    <!-- Espace pour le header -->
    <div class="py-lg-224 py-155"></div>

    <img src="serve_file.php?file=img/voiture.jpeg" alt="voiture de fond" id="background">
    <header class="position-fixed w-100">
        <?php require_once "private/php/base_import/header.php"; ?>
    </header>

    <main class="container bg-primary">
        <?php 
            $getNav = htmlspecialchars($_GET['getNav']); ?>

            <script>
                const tabTitle = document.getElementById('tabTitle');
            </script>

            <?php

            switch ($getNav) {
                case 'nettoyage': ?>
                    <!-- Script pour mettre le lien de la page en valeur -->
                    <script>
                        tabTitle.innerText = "Nettoyage - GT Cars Institut By Alexander worldercraft";
                        const getNavActive = document.getElementById('<?php echo $getNav; ?>');
                    </script>
                    <?php require_once 'private/php/centre/nettoyage.php';
                    break;
                case 'polissageLustrage': ?>
                    <!-- Script pour mettre le lien de la page en valeur -->
                    <script>
                        tabTitle.innerText = "Nettoyage - GT Cars Institut By Alexander worldercraft";
                        const getNavActive = document.getElementById('<?php echo $getNav; ?>');
                    </script>
                    <?php require_once 'private/php/centre/polissageLustrage.php';
                    break;
                case 'protectionCarrosserie': ?>
                    <!-- Script pour mettre le lien de la page en valeur -->
                    <script>
                        tabTitle.innerText = "Nettoyage - GT Cars Institut By Alexander worldercraft";
                        const getNavActive = document.getElementById('<?php echo $getNav; ?>');
                    </script>
                    <?php require_once 'private/php/centre/protectionCarrosserie.php';
                    break;
                case 'restaurationVehiculeDeCollection': ?>
                    <!-- Script pour mettre le lien de la page en valeur -->
                    <script>
                        tabTitle.innerText = "Nettoyage - GT Cars Institut By Alexander worldercraft";
                        const getNavActive = document.getElementById('<?php echo $getNav; ?>');
                    </script>
                    <?php require_once 'private/php/centre/remiseANeuf.php';
                    break;
                case 'restaurationVehiculeDeCollection': ?>
                    <!-- Script pour mettre le lien de la page en valeur -->
                    <script>
                        tabTitle.innerText = "Nettoyage - GT Cars Institut By Alexander worldercraft";
                        const getNavActive = document.getElementById('<?php echo $getNav; ?>');
                    </script>
                    <?php require_once 'private/php/centre/remiseANeuf.php';
                    break;
                case 'tarifs': ?>
                    <!-- Script pour mettre le lien de la page en valeur -->
                    <script>
                        tabTitle.innerText = "Nettoyage - GT Cars Institut By Alexander worldercraft";
                        const getNavActive = document.getElementById('<?php echo $getNav; ?>');
                    </script>
                    <?php require_once 'private/php/centre/tarifs.php';
                    break;
                            
                    default:
                        require_once 'private/php/centre/index.php';
                        break;
            }; ?>

            <script>
                getNavActive.setAttribute('class', 'nav-link active');
                getNavActive.setAttribute('aria-current', 'page active');
            </script>
            <?php
        ?>
    </main>

    <footer class="bg-danger">footer
        <?php require_once "private/php/base_import/footer.php"; ?>
    </footer>
</body>

</html>