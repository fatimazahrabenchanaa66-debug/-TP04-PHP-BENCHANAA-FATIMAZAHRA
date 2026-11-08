<?php

class Personne
{
    
    public string $nom;
    public string $prenom;


    private string $dateNaissance;
    private string $villeNaissance;
    private string $cin;

    
    public function __construct(
        string $nom = "",
        string $prenom = "",
        string $dateNaissance = "2000-01-01",
        string $villeNaissance = "",
        string $cin = ""
    ) {
        echo "Création " . __CLASS__ . PHP_EOL;

        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->villeNaissance = $villeNaissance;
        $this->cin = $cin;
    }

    
    public function getName(): string
    {
        return $this->prenom . " " . $this->nom;
    }

  
    private function getAge(): int
    {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();

        return $aujourdhui->diff($dateNaissance)->y;
    }

   
    public function afficher(): void
    {
        echo "Nom complet : " . $this->getName() . PHP_EOL;
        echo "Ville de naissance : " . $this->villeNaissance . PHP_EOL;
        echo "Âge : " . $this->getAge() . " ans" . PHP_EOL;
    }

   
    public function __destruct()
    {
        echo "Détruire " . __CLASS__ . PHP_EOL;
    }

    
    public static function depuisTableau(array $data): Personne
    {
        return new Personne(
            $data['nom'] ?? '',
            $data['prenom'] ?? '',
            $data['dateNaissance'] ?? '2000-01-01',
            $data['villeNaissance'] ?? '',
            $data['cin'] ?? ''
        );
    }
}



$p1 = new Personne();

echo PHP_EOL;


$p2 = new Personne(
    "Benali",
    "Ali",
    "2004-05-10",
    "Marrakech",
    "AB123456"
);

$p2->afficher();

echo PHP_EOL;


$data = [
    'nom' => 'Alaoui',
    'prenom' => 'Sara',
    'dateNaissance' => '2002-08-15',
    'villeNaissance' => 'Casablanca',
    'cin' => 'CD654321'
];

$p3 = Personne::depuisTableau($data);

$p3->afficher();

echo PHP_EOL . "Fin du script." . PHP_EOL;

?>