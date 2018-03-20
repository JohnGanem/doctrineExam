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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $salarie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $formation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->salarie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->formation = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add salarie.
     *
     * @param \salarie $salarie
     *
     * @return Inscription
     */
    public function addSalarie(\salarie $salarie)
    {
        $this->salarie[] = $salarie;

        return $this;
    }

    /**
     * Remove salarie.
     *
     * @param \salarie $salarie
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSalarie(\salarie $salarie)
    {
        return $this->salarie->removeElement($salarie);
    }

    /**
     * Get salarie.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSalarie()
    {
        return $this->salarie;
    }

    /**
     * Add formation.
     *
     * @param \formation $formation
     *
     * @return Inscription
     */
    public function addFormation(\formation $formation)
    {
        $this->formation[] = $formation;

        return $this;
    }

    /**
     * Remove formation.
     *
     * @param \formation $formation
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFormation(\formation $formation)
    {
        return $this->formation->removeElement($formation);
    }

    /**
     * Get formation.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFormation()
    {
        return $this->formation;
    }
}
