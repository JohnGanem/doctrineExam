<?php



/**
 * Creneau
 */
class Creneau
{
    /**
     * @var int
     */
    private $idCreneau;

    /**
     * @var string
     */
    private $jourSemaine;

    /**
     * @var string
     */
    private $horaires;


    /**
     * Get idCreneau.
     *
     * @return int
     */
    public function getIdCreneau()
    {
        return $this->idCreneau;
    }

    /**
     * Set jourSemaine.
     *
     * @param string $jourSemaine
     *
     * @return Creneau
     */
    public function setJourSemaine($jourSemaine)
    {
        $this->jourSemaine = $jourSemaine;

        return $this;
    }

    /**
     * Get jourSemaine.
     *
     * @return string
     */
    public function getJourSemaine()
    {
        return $this->jourSemaine;
    }

    /**
     * Set horaires.
     *
     * @param string $horaires
     *
     * @return Creneau
     */
    public function setHoraires($horaires)
    {
        $this->horaires = $horaires;

        return $this;
    }

    /**
     * Get horaires.
     *
     * @return string
     */
    public function getHoraires()
    {
        return $this->horaires;
    }
}
