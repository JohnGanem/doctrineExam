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
    /**
     * @var int
     */
    private $idProf;

    /**
     * @var int
     */
    private $idDisponibilite;


    /**
     * Set idProf.
     *
     * @param int $idProf
     *
     * @return Reservation
     */
    public function setIdProf($idProf)
    {
        $this->idProf = $idProf;

        return $this;
    }

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
     * Set idDisponibilite.
     *
     * @param int $idDisponibilite
     *
     * @return Reservation
     */
    public function setIdDisponibilite($idDisponibilite)
    {
        $this->idDisponibilite = $idDisponibilite;

        return $this;
    }

    /**
     * Get idDisponibilite.
     *
     * @return int
     */
    public function getIdDisponibilite()
    {
        return $this->idDisponibilite;
    }
}
