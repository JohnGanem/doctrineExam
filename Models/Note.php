<?php



/**
 * Note
 */
class Note
{
    /**
     * @var int
     */
    private $idNote;

    /**
     * @var float
     */
    private $note;

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
     * Get idNote.
     *
     * @return int
     */
    public function getIdNote()
    {
        return $this->idNote;
    }

    /**
     * Set note.
     *
     * @param float $note
     *
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Add salarie.
     *
     * @param \salarie $salarie
     *
     * @return Note
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
     * @return Note
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
