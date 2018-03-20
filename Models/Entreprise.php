<?php



/**
 * Entreprise
 */
class Entreprise
{
    /**
     * @var int
     */
    private $idEntreprise;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $salarie;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->salarie = new \Doctrine\Common\Collections\ArrayCollection();
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

    /**
     * Set nom.
     *
     * @param string $nom
     *
     * @return Entreprise
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
     * Add salarie.
     *
     * @param \salarie $salarie
     *
     * @return Entreprise
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
}
