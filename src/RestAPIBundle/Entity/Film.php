<?php

namespace RestAPIBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="RestAPIBundle\Repository\FilmRepository")
 */
class Film
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=70)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer")
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="rated", type="string", length=30)
     */
    private $rated;

    /**
     * @var string
     *
     * @ORM\Column(name="released", type="string", length=50)
     */
    private $released;

    /**
     * @var string
     *
     * @ORM\Column(name="runtime", type="string", length=15)
     */
    private $runtime;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=200)
     */
    private $genre;

    /**
     * @var string
     *
     * @ORM\Column(name="director", type="string", length=120)
     */
    private $director;

    /**
     * @var string
     *
     * @ORM\Column(name="writer", type="string", length=200)
     */
    private $writer;

    /**
     * @var string
     *
     * @ORM\Column(name="actors", type="string", length=200)
     */
    private $actors;

    /**
     * @var string
     *
     * @ORM\Column(name="plot", type="text")
     */
    private $plot;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=100, nullable=true)
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=100, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="awards", type="string", length=80, nullable=true)
     */
    private $awards;

    /**
     * @var string
     *
     * @ORM\Column(name="poster", type="string", length=255, nullable=true)
     */
    private $poster;

    /**
     * @var int
     *
     * @ORM\Column(name="metascore", type="integer", nullable=true)
     */
    private $metascore;

    /**
     * @var string
     *
     * @ORM\Column(name="imdbRating", type="string", length=11)
     */
    private $imdbRating;

    /**
     * @var string
     *
     * @ORM\Column(name="imdbVotes", type="string", length=20)
     */
    private $imdbVotes;

    /**
     * @var string
     *
     * @ORM\Column(name="imdbID", type="string", length=25)
     */
    private $imdbID;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=40)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="dvd", type="string", length=50, nullable=true)
     */
    private $dvd;

    /**
     * @var string
     *
     * @ORM\Column(name="boxOffice", type="string", length=30)
     */
    private $boxOffice;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=80, nullable=true)
     */
    private $website;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Film
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set year
     *
     * @param integer $year
     * @return Film
     */
    public function setYear($year)
    {
        $this->year = $year;

        return $this;
    }

    /**
     * Get year
     *
     * @return integer 
     */
    public function getYear()
    {
        return $this->year;
    }

    /**
     * Set rated
     *
     * @param string $rated
     * @return Film
     */
    public function setRated($rated)
    {
        $this->rated = $rated;

        return $this;
    }

    /**
     * Get rated
     *
     * @return string 
     */
    public function getRated()
    {
        return $this->rated;
    }

    /**
     * Set released
     *
     * @param string $released
     * @return Film
     */
    public function setReleased($released)
    {
        $this->released = $released;

        return $this;
    }

    /**
     * Get released
     *
     * @return string 
     */
    public function getReleased()
    {
        return $this->released;
    }

    /**
     * Set runtime
     *
     * @param string $runtime
     * @return Film
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return string 
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Film
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set director
     *
     * @param string $director
     * @return Film
     */
    public function setDirector($director)
    {
        $this->director = $director;

        return $this;
    }

    /**
     * Get director
     *
     * @return string 
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * Set writer
     *
     * @param string $writer
     * @return Film
     */
    public function setWriter($writer)
    {
        $this->writer = $writer;

        return $this;
    }

    /**
     * Get writer
     *
     * @return string 
     */
    public function getWriter()
    {
        return $this->writer;
    }

    /**
     * Set actors
     *
     * @param string $actors
     * @return Film
     */
    public function setActors($actors)
    {
        $this->actors = $actors;

        return $this;
    }

    /**
     * Get actors
     *
     * @return string 
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * Set plot
     *
     * @param string $plot
     * @return Film
     */
    public function setPlot($plot)
    {
        $this->plot = $plot;

        return $this;
    }

    /**
     * Get plot
     *
     * @return string 
     */
    public function getPlot()
    {
        return $this->plot;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Film
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Film
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set awards
     *
     * @param string $awards
     * @return Film
     */
    public function setAwards($awards)
    {
        $this->awards = $awards;

        return $this;
    }

    /**
     * Get awards
     *
     * @return string 
     */
    public function getAwards()
    {
        return $this->awards;
    }

    /**
     * Set poster
     *
     * @param string $poster
     * @return Film
     */
    public function setPoster($poster)
    {
        $this->poster = $poster;

        return $this;
    }

    /**
     * Get poster
     *
     * @return string 
     */
    public function getPoster()
    {
        return $this->poster;
    }

    /**
     * Set metascore
     *
     * @param integer $metascore
     * @return Film
     */
    public function setMetascore($metascore)
    {
        $this->metascore = $metascore;

        return $this;
    }

    /**
     * Get metascore
     *
     * @return integer 
     */
    public function getMetascore()
    {
        return $this->metascore;
    }

    /**
     * Set imdbRating
     *
     * @param string $imdbRating
     * @return Film
     */
    public function setImdbRating($imdbRating)
    {
        $this->imdbRating = $imdbRating;

        return $this;
    }

    /**
     * Get imdbRating
     *
     * @return string 
     */
    public function getImdbRating()
    {
        return $this->imdbRating;
    }

    /**
     * Set imdbVotes
     *
     * @param string $imdbVotes
     * @return Film
     */
    public function setImdbVotes($imdbVotes)
    {
        $this->imdbVotes = $imdbVotes;

        return $this;
    }

    /**
     * Get imdbVotes
     *
     * @return string 
     */
    public function getImdbVotes()
    {
        return $this->imdbVotes;
    }

    /**
     * Set imdbID
     *
     * @param string $imdbID
     * @return Film
     */
    public function setImdbID($imdbID)
    {
        $this->imdbID = $imdbID;

        return $this;
    }

    /**
     * Get imdbID
     *
     * @return string 
     */
    public function getImdbID()
    {
        return $this->imdbID;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Film
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set dvd
     *
     * @param string $dvd
     * @return Film
     */
    public function setDvd($dvd)
    {
        $this->dvd = $dvd;

        return $this;
    }

    /**
     * Get dvd
     *
     * @return string 
     */
    public function getDvd()
    {
        return $this->dvd;
    }

    /**
     * Set boxOffice
     *
     * @param string $boxOffice
     * @return Film
     */
    public function setBoxOffice($boxOffice)
    {
        $this->boxOffice = $boxOffice;

        return $this;
    }

    /**
     * Get boxOffice
     *
     * @return string 
     */
    public function getBoxOffice()
    {
        return $this->boxOffice;
    }

    /**
     * Set website
     *
     * @param string $website
     * @return Film
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }
}
