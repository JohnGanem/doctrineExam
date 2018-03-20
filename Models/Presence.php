<?php



/**
 * Presence
 */
class Presence
{
    /**
     * @var int
     */
    private $idPresence;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $salarie;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $session;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->salarie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->session = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get idPresence.
     *
     * @return int
     */
    public function getIdPresence()
    {
        return $this->idPresence;
    }

    /**
     * Add salarie.
     *
     * @param \salarie $salarie
     *
     * @return Presence
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
     * Add session.
     *
     * @param \session $session
     *
     * @return Presence
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
