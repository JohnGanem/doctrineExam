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
    private $films;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->films = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add film.
     *
     * @param \entreprise $film
     *
     * @return Salarie
     */
    public function addFilm(\entreprise $film)
    {
        $this->films[] = $film;

        return $this;
    }

    /**
     * Remove film.
     *
     * @param \entreprise $film
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFilm(\entreprise $film)
    {
        return $this->films->removeElement($film);
    }

    /**
     * Get films.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFilms()
    {
        return $this->films;
    }
}
