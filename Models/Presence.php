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
     * @var \salarie
     */
    private $salarie;

    /**
     * @var \session
     */
    private $session;


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
     * Set salarie.
     *
     * @param \salarie|null $salarie
     *
     * @return Presence
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
     * @return Presence
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
