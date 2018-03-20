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
    
    public function getSessionFromSalarie($id_salarie){
        $queryBuilder = $this->_em->createQueryBuilder();

        $query = $queryBuilder->select('f')
            ->from('Note', 'f')
            ->where('n.id_salarie = :id_salarie')
            ->setParameter('id_salarie', $id_salarie);

        $query = $queryBuilder->getQuery();

        $results = $query->getResult();

        return $results;
    }
    /**
     * @var int
     */
    private $idSalarie;


    /**
     * Set idSalarie.
     *
     * @param int $idSalarie
     *
     * @return Note
     */
    public function setIdSalarie($idSalarie)
    {
        $this->idSalarie = $idSalarie;

        return $this;
    }

    /**
     * Get idSalarie.
     *
     * @return int
     */
    public function getIdSalarie()
    {
        return $this->idSalarie;
    }
    /**
     * @var int
     */
    private $idSession;


    /**
     * Set idSession.
     *
     * @param int $idSession
     *
     * @return Note
     */
    public function setIdSession($idSession)
    {
        $this->idSession = $idSession;

        return $this;
    }

    /**
     * Get idSession.
     *
     * @return int
     */
    public function getIdSession()
    {
        return $this->idSession;
    }
}
