<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BOURLON CHANDON GANEM</title>
    </head>
    <body>
        <?php
        require_once './bootstrap.php';
        $queryBuilder = $entityManager->createQueryBuilder();
        $id_salarie = 2;

        $query = $queryBuilder->select('f')
                ->from('Note', 'f')
                ->where('f.idSalarie = :id_salarie')
                ->setParameter('id_salarie', $id_salarie);

        $query = $queryBuilder->getQuery();

        $results = $query->getResult();




        $note = new Note;


        var_dump($results);

//
//        $genre->getNom();
//        $distributeur->getNom();
//        //var_dump($film);
//
//        echo "<br><br>";
//
//        // liste film du genre Science fiction
//        $genre = $entityManager->find('\Genre', 2);
//        $filmG = $genre->getFilms();
//
//        echo $genre->getNom();
//        echo " comporte " . count($filmG) . " films";
//        echo "<br>";
//        // var_dump($filmG);
//
//        echo "<br><br>";
//
//        // liste film du distributeurs rezo Film
//        $distributeur = $entityManager->find('\Distributeur', 4);
//        $filmsD = $distributeur->getFilms();
//        echo $distributeur->getNom();
//        echo " comporte " . count($filmsD) . " films";
//        echo "<br>";
//        // var_dump($filmsD);
//
//        $fonction = $entityManager->find('\Fonction', 3);
//        $personne = $fonction->getPersonne();
//        echo "La fonction " . $fonction->getNom() . " est occupée par " . count($personne) . " employes";
//
//        $personne = $entityManager->find("\Personne", 145);
//        $fonctions = $personne->getFonction();
//        echo "<br>La personne " . $personne->getNom() . " occupe  " . count($fonctions) . " fonctions";
        ?>
    </body>
</html>
