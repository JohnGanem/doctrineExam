<?php



/**
 * Prof
 */
class Prof
{
    /**
     * @var int
     */
    private $idProf;

    /**
     * @var string
     */
    private $nom;


    /**
     * Get idProf.
     *
     * @return int
     */
    public function getIdProf()
    {
        return $this->idProf;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Prof
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
