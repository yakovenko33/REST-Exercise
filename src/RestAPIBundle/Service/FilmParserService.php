<?php

namespace RestAPIBundle\Service;

use Doctrine\ORM\EntityManager;
use RestAPIBundle\Entity\Film;

class FilmParserService
{
    private $serviceUrl;
    private $apikey;
    private $em;

    function __construct($serviceUrl, $apiKey, EntityManager $em )
    {
        $this->serviceUrl = $serviceUrl;
        $this->apikey = $apiKey;
        $this->em = $em;
    }

    public function searchMoves($titleFilm)
    {
        $data = [
            'apikey' => 'dfb1f0ae',
            't' => $titleFilm
        ];

        $curl = curl_init();
        $this->serviceUrl = sprintf("%s?%s", $this->serviceUrl, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, $this->serviceUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, true);

        return $result;
    }

    public function addMoves(Film $film, $filmInfo)
    {

        $film->setTitle($filmInfo['Title']);
        $film->setYear($filmInfo['Year']);
        $film->setRated($filmInfo['Rated']);
        $film->setRealeased($filmInfo['Released']);
        $film->setRuntime($filmInfo['Runtime']);
        $film->setGenre($filmInfo['Genre']);
        $film->setDirector($filmInfo['Director']);
        $film->setWriter($filmInfo['Writer']);
        $film->setActors($filmInfo['Actors']);
        $film->setPlot($filmInfo['Plot']);
        $film->setLangauge($filmInfo['Language']);
        $film->setCountry($filmInfo['Country']);
        $film->setAwards($filmInfo['Awards']);
        $film->setPoster($filmInfo['Poster']);
        $film->setImdbRating($filmInfo['imdbRating']);
        $film->setImdbVotes($filmInfo['imdbVotes']);
        $film->setImdbID($filmInfo['imdbID']);
        $film->setType($filmInfo['Type']);
        $film->setDvd($filmInfo['DVD']);
        $film->setBoxoffice($filmInfo['BoxOffice']);
        $film->setWebsite($filmInfo['Website']);

        $this->em->persist($film);
        $this->em->flush();

        return $film;
    }


}