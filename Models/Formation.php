<?php



/**
 * Formation
 */
class Formation
{
    /**
     * @var int
     */
    private $idFormation;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var int
     */
    private $nbHeure;

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
     * Get idFormation.
     *
     * @return int
     */
    public function getIdFormation()
    {
        return $this->idFormation;
    }

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Formation
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom.
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set nbHeure.
     *
     * @param int $nbHeure
     *
     * @return Formation
     */
    public function setNbHeure($nbHeure)
    {
        $this->nbHeure = $nbHeure;

        return $this;
    }

    /**
     * Get nbHeure.
     *
     * @return int
     */
    public function getNbHeure()
    {
        return $this->nbHeure;
    }

    /**
     * Add session.
     *
     * @param \session $session
     *
     * @return Formation
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
    /**
     * @var \prof
     */
    private $prof;


    /**
     * Set prof.
     *
     * @param \prof|null $prof
     *
     * @return Formation
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
}
