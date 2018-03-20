<?php



/**
 * Salarie
 */
class Salarie
{
    /**
     * @var int
     */
    private $idSalarie;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $inscription;

    /**
     * @var \entreprise
     */
    private $entreprise;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->inscription = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nom.
     *
     * @param string $nom
     *
     * @return Salarie
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
     * Add inscription.
     *
     * @param \inscription $inscription
     *
     * @return Salarie
     */
    public function addInscription(\inscription $inscription)
    {
        $this->inscription[] = $inscription;

        return $this;
    }

    /**
     * Remove inscription.
     *
     * @param \inscription $inscription
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeInscription(\inscription $inscription)
    {
        return $this->inscription->removeElement($inscription);
    }

    /**
     * Get inscription.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInscription()
    {
        return $this->inscription;
    }

    /**
     * Set entreprise.
     *
     * @param \entreprise|null $entreprise
     *
     * @return Salarie
     */
    public function setEntreprise(\entreprise $entreprise = null)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise.
     *
     * @return \entreprise|null
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }
    /**
     * @var int
     */
    private $idEntreprise;


    /**
     * Set idEntreprise.
     *
     * @param int $idEntreprise
     *
     * @return Salarie
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get idEntreprise.
     *
     * @return int
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
}
