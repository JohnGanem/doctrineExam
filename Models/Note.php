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
     * @var \salarie
     */
    private $salarie;

    /**
     * @var \session
     */
    private $session;


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
     * Set salarie.
     *
     * @param \salarie|null $salarie
     *
     * @return Note
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
     * Set session.
     *
     * @param \session|null $session
     *
     * @return Note
     */
    public function setSession(\session $session = null)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session.
     *
     * @return \session|null
     */
    public function getSession()
    {
        return $this->session;
    }
}
