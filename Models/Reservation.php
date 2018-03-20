<?php



/**
 * Reservation
 */
class Reservation
{
    /**
     * @var int
     */
    private $idReservation;

    /**
     * @var \prof
     */
    private $prof;

    /**
     * @var \disponibilite
     */
    private $disponibilite;


    /**
     * Get idReservation.
     *
     * @return int
     */
    public function getIdReservation()
    {
        return $this->idReservation;
    }

    /**
     * Set prof.
     *
     * @param \prof|null $prof
     *
     * @return Reservation
     */
    public function setProf(\prof $prof = null)
    {
        $this->prof = $prof;

        return $this;
    }

    /**
     * Get prof.
     *
     * @return \prof|null
     */
    public function getProf()
    {
        return $this->prof;
    }

    /**
     * Set disponibilite.
     *
     * @param \disponibilite|null $disponibilite
     *
     * @return Reservation
     */
    public function setDisponibilite(\disponibilite $disponibilite = null)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite.
     *
     * @return \disponibilite|null
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }
}
