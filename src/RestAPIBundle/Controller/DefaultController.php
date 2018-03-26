<?php

namespace RestAPIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use RestAPIBundle\Service\FilmParserService;
use Symfony\Component\HttpFoundation\Request;
use GuzzleHttp\Client;
use RestAPIBundle\Entity\Film;
use RestAPIBundle\Form\SearchType;
use Symfony\Component\Form\FormError;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        $film = new Film();

        $filmParse = $this->container->get('rest_api');

        $form = $this->createForm(SearchType::class, $film);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $filmExist = $filmParse->findMoves($film);

            if($filmExist){
                return $this->render('RestAPIBundle:Default:film.html.twig', array(
                    'form' => $form->createView(),
                    'film' => $filmExist,
                ));
            }

            $result = $filmParse->searchMoves($film->getTitle());

            if($result['Response']  === 'False' ){
                $form->addError(new FormError('Такого фильма не существует!'));
                return $this->render('RestAPIBundle:Default:index.html.twig', array(
                    'form' => $form->createView(),
                ));
            }

            $filmExist = $filmParse->addMoves($film, $result);

            return $this->render('RestAPIBundle:Default:film.html.twig', array(
                'form' => $form->createView(),
                'film' => $filmExist,
            ));
        }



        return $this->render('RestAPIBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
