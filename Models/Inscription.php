<?php



/**
 * Inscription
 */
class Inscription
{
    /**
     * @var int
     */
    private $idInscription;

    /**
     * @var \salarie
     */
    private $salarie;

    /**
     * @var \formation
     */
    private $formation;


    /**
     * Get idInscription.
     *
     * @return int
     */
    public function getIdInscription()
    {
        return $this->idInscription;
    }

    /**
     * Set salarie.
     *
     * @param \salarie|null $salarie
     *
     * @return Inscription
     */
    public function setSalarie(\salarie $salarie = null)
    {
        $this->salarie = $salarie;

        return $this;
    }

    /**
     * Get salarie.
     *
     * @return \salarie|null
     */
    public function getSalarie()
    {
        return $this->salarie;
    }

    /**
     * Set formation.
     *
     * @param \formation|null $formation
     *
     * @return Inscription
     */
    public function setFormation(\formation $formation = null)
    {
        $this->formation = $formation;

        return $this;
    }

    /**
     * Get formation.
     *
     * @return \formation|null
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
