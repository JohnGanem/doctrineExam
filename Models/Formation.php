<?php



/**
 * Formation
 */
class Formation
{
    /**
     * @var int
     */
    private $idFormation;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var int
     */
    private $nbHeure;


    /**
     * Get idFormation.
     *
     * @return int
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Formation
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

    /**
     * Set nbHeure.
     *
     * @param int $nbHeure
     *
     * @return Formation
     */
    public function setNbHeure($nbHeure)
    {
        $this->nbHeure = $nbHeure;

        return $this;
    }

    /**
     * Get nbHeure.
     *
     * @return int
     */
    public function getNbHeure()
    {
        return $this->nbHeure;
    }
}
