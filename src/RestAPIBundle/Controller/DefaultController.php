<?php

namespace RestAPIBundle\Controller;

use RestAPIBundle\Entity\Film;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use RestAPIBundle\Service\FilmParserService;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(Request $request)
    {
        /*$curl = curl_init();
        $url = 'http://www.omdbapi.com/';
        $data = [
            'apikey' => 'dfb1f0ae',
            't' => 'Blade Runner'
        ];

        $url = sprintf("%s?%s", $url, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, true);

        foreach($result as $value){
            print_r($value);
            echo '<br>';
        }
        exit;*/

        $film = new Film();
        $repository = $this->getDoctrine()->getRepository(Film::class);



        $form = $this->createFormBuilder($film)
            ->add('title', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $form = $form->getData();



            $product = $repository->findOneBy(['title' => $film->getTitle()]);






            if(is_null($product)){
                $move = $this->get('rest_api');
                $result = $move->searchMoves($film->getTitle());
                $move->addMoves($film, $result);

            }


        exit;
            return $this->render('RestAPIBundle:Default:index.html.twig', array(
                'form' => $form->createView(),
            ));
        }



        /*$example = 'Justice League';
        $repository = $this->getDoctrine()->getRepository(Film::class);
        $product = $repository->findOneBy(['title' => $example]);



        if(is_null($product)){
            $move = $this->get('rest_api');
            $result = $move->searchMoves($example);
            $move->addMoves($film, $result);
        }

        exit;*/


        /*foreach($result as $value){
            print_r($value);
            echo '<br>';
        }
        exit;*/



        return $this->render('RestAPIBundle:Default:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
