<!-- Partie 1 -->

<?php

    libxml_use_internal_errors(true);
    $content = file_get_contents("https://www.meteocity.com/france/lille-v2998324");
    $doc = new DomDocument();
    $doc->loadHTML($content);
    $xp = new domxpath($doc);
    foreach ($xp->query("//meta[@property='og:title']") as $el) {
        echo $el->getAttribute("content");
    }

?>



<!-- Partie 2 -->

<!-- Requete Drupal -->
Select * From node Where status = 1 And type = "page";


<!-- Requete Doctrine -->
Select * From c Where c.id IN (1, 2) or c.population > 1000;  

Je crois qu'il y avait des pieges dans la requete Doctrine.
Je pense qu'elle devrait s'écrire comme ça, 

$this->createQueryBuilder('c')
    ->andWhere('c.id IN(:ids)')
    ->setParameter('ids', [1, 2])
    ->orWhere('c.population > :population')
    ->setParameter('population', 1000)
    ->getQuery();


Est ce que je fais erreur ?




<!-- Partie 3 -->

echo $data->lorem;    Faux, on essai de naviguer dans un tableau comme si il s'agisait d'un objet.


echo $data[‘hello'] ?? 'world';    Faux, L'expression serait valide si la quote de l'index hello était une simple quote au lieu d'une back quote




<!-------------------------------------->

class Car extends Vehicle
{
    /**
     * {@inheritDoc}
     */
    private function describe(): string               Code valide mais la methode est inutilisable en dehors de la class car elle est en private.
    {
        return 'i am a car';
    }
}




<!-------------------------------------->

class Motorbike extends Vehicle
{
    /**
     * @return string
     */
    public function run(): string                     Code valide
    {
        return 'Vroooom';
    }
}