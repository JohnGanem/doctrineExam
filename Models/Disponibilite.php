<?php



/**
 * Disponibilite
 */
class Disponibilite
{
    /**
     * @var int
     */
    private $idDisponibilite;

    /**
     * @var \DateTime
     */
    private $creneauDisponible;


    /**
     * Get idDisponibilite.
     *
     * @return int
     */
    public function getIdDisponibilite()
    {
        return $this->idDisponibilite;
    }

    /**
     * Set creneauDisponible.
     *
     * @param \DateTime $creneauDisponible
     *
     * @return Disponibilite
     */
    public function setCreneauDisponible($creneauDisponible)
    {
        $this->creneauDisponible = $creneauDisponible;

        return $this;
    }

    /**
     * Get creneauDisponible.
     *
     * @return \DateTime
     */
    public function getCreneauDisponible()
    {
        return $this->creneauDisponible;
    }
}
