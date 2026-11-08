<?php

class Personne
{
    
    public $nom;
    public $prenom;

   
    private $dateNaissance;
    private $villeNaissance;
    private $cin;

    
    public function __construct($nom, $prenom, $dateNaissance, $villeNaissance, $cin)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->villeNaissance = $villeNaissance;
        $this->cin = $cin;
    }

    
    public function getName()
    {
        return $this->prenom . " " . $this->nom;
    }

   
    private function getAge()
    {
        $dateNaissance = new DateTime($this->dateNaissance);
        $aujourdhui = new DateTime();

        return $aujourdhui->diff($dateNaissance)->y;
    }
}

?>
<?php

$p1 = new Personne(
    "Benchanaa",
    "Fatima Zahra",
    "21-07-2007",
    "Marrakech",
    "EE2520871"
);

echo $p1->getName();
echo 

