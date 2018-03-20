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
    private $entreprise;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $inscription;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entreprise = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add entreprise.
     *
     * @param \entreprise $entreprise
     *
     * @return Salarie
     */
    public function addEntreprise(\entreprise $entreprise)
    {
        $this->entreprise[] = $entreprise;

        return $this;
    }

    /**
     * Remove entreprise.
     *
     * @param \entreprise $entreprise
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeEntreprise(\entreprise $entreprise)
    {
        return $this->entreprise->removeElement($entreprise);
    }

    /**
     * Get entreprise.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntreprise()
    {
        return $this->entreprise;
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
}
