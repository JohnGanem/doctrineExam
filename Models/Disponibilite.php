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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $session;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->session = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Add session.
     *
     * @param \session $session
     *
     * @return Disponibilite
     */
    public function addSession(\session $session)
    {
        $this->session[] = $session;

        return $this;
    }

    /**
     * Remove session.
     *
     * @param \session $session
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeSession(\session $session)
    {
        return $this->session->removeElement($session);
    }

    /**
     * Get session.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSession()
    {
        return $this->session;
    }
}
