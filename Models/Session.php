<?php



/**
 * Session
 */
class Session
{
    /**
     * @var int
     */
    private $idSession;

    /**
     * @var string
     */
    private $duree;

    /**
     * @var float
     */
    private $prix;

    /**
     * @var string|null
     */
    private $compteRendu;

    /**
     * @var \salle
     */
    private $salle;

    /**
     * @var \disponibilite
     */
    private $disponibilite;

    /**
     * @var \prof
     */
    private $prof;

    /**
     * @var \formation
     */
    private $formation;


    /**
     * Get idSession.
     *
     * @return int
     */
    public function getIdSession()
    {
        return $this->idSession;
    }

    /**
     * Set duree.
     *
     * @param string $duree
     *
     * @return Session
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree.
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set prix.
     *
     * @param float $prix
     *
     * @return Session
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix.
     *
     * @return float
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set compteRendu.
     *
     * @param string|null $compteRendu
     *
     * @return Session
     */
    public function setCompteRendu($compteRendu = null)
    {
        $this->compteRendu = $compteRendu;

        return $this;
    }

    /**
     * Get compteRendu.
     *
     * @return string|null
     */
    public function getCompteRendu()
    {
        return $this->compteRendu;
    }

    /**
     * Set salle.
     *
     * @param \salle|null $salle
     *
     * @return Session
     */
    public function setSalle(\salle $salle = null)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle.
     *
     * @return \salle|null
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set disponibilite.
     *
     * @param \disponibilite|null $disponibilite
     *
     * @return Session
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
     * Set prof.
     *
     * @param \prof|null $prof
     *
     * @return Session
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
     * Set formation.
     *
     * @param \formation|null $formation
     *
     * @return Session
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
    /**
     * @var int
     */
    private $idSalle;

    /**
     * @var int
     */
    private $idDisponibilite;

    /**
     * @var int
     */
    private $idProf;

    /**
     * @var int
     */
    private $idFormation;


    /**
     * Set idSalle.
     *
     * @param int $idSalle
     *
     * @return Session
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;

        return $this;
    }

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
     * Set idDisponibilite.
     *
     * @param int $idDisponibilite
     *
     * @return Session
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

    /**
     * Set idProf.
     *
     * @param int $idProf
     *
     * @return Session
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
     * Set idFormation.
     *
     * @param int $idFormation
     *
     * @return Session
     */
    public function setIdFormation($idFormation)
    {
        $this->idFormation = $idFormation;

        return $this;
    }

    /**
     * Get idFormation.
     *
     * @return int
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }
}
