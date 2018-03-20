<?php



/**
 * Entreprise
 */
class Entreprise
{
    /**
     * @var int
     */
    private $idEntreprise;

    /**
     * @var string
     */
    private $nom;


    /**
     * Get idEntreprise.
     *
     * @return int
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Entreprise
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
}
