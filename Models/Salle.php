<?php



/**
 * Salle
 */
class Salle
{
    /**
     * @var int
     */
    private $idSalle;

    /**
     * @var string
     */
    private $nomSalle;

    /**
     * @var string
     */
    private $emplacement;


    /**
     * Get idSalle.
     *
     * @return int
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * Set nomSalle.
     *
     * @param string $nomSalle
     *
     * @return Salle
     */
    public function setNomSalle($nomSalle)
    {
        $this->nomSalle = $nomSalle;

        return $this;
    }

    /**
     * Get nomSalle.
     *
     * @return string
     */
    public function getNomSalle()
    {
        return $this->nomSalle;
    }

    /**
     * Set emplacement.
     *
     * @param string $emplacement
     *
     * @return Salle
     */
    public function setEmplacement($emplacement)
    {
        $this->emplacement = $emplacement;

        return $this;
    }

    /**
     * Get emplacement.
     *
     * @return string
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }
}
