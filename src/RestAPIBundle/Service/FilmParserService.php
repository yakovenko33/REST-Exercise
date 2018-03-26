<?php

namespace RestAPIBundle\Service;

use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
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
        $client = new Client(['base_uri' =>  $this->serviceUrl]);

        $response = $client->request('GET', '/', [
            'query' =>
                [
                    'apikey' => 'dfb1f0ae',
                    't' => $titleFilm
                ]
        ]);

        $result = json_decode($response->getBody(), true);

        return $result;
    }

    public function addMoves(Film $film, $filmInfo)
    {

        $film->setTitle($filmInfo['Title']);
        $film->setYear($filmInfo['Year']);
        $film->setRated($filmInfo['Rated']);
        $film->setReleased($filmInfo['Released']);
        $film->setRuntime($filmInfo['Runtime']);
        $film->setGenre($filmInfo['Genre']);
        $film->setDirector($filmInfo['Director']);
        $film->setWriter($filmInfo['Writer']);
        $film->setActors($filmInfo['Actors']);
        $film->setPlot($filmInfo['Plot']);
        $film->setLanguage($filmInfo['Language']);
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

    public function findMoves(Film $film)
    {
        $repository = $product = $this->em->getRepository(Film::class);
        $findFilm = $repository->findOneBy(
            array('title' => $film->getTitle())
        );

        return $findFilm;

    }

}