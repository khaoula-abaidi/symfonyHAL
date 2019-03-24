<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 23/03/2019
 * Time: 20:06
 */

namespace App\Controller;


use App\Entity\Document;
use App\Repository\DocumentRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{


    /**
     * @Route("/", name ="home")
     * @param DocumentRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     */
 public function index(DocumentRepository $repository)
 {
    $document = $repository->findAll();
     /**
      * Ajout d'un document
      * $document = new Document();
     $document->setIdHal('hal-00445283')
              ->setTypedocument('Article dans une revue')
                ->setDoi('10/DFfgfgfg')
               ->setOrcid('13/DDFDF')
              ->setTitre('OLIGOMERS OF VINYL PHOSPHONIC ACID OBTAINED BY RADICAL POLYMERIZATION IN THE PRESENCE OF HALOGENATED CHAIN TRANSFER AGENT')
              ->setResume('Two haloin isg to a new VPA macromonomer. Hence, VPA telomers were syn1800 to 6700 g/mol.');
       $em = $this->getDoctrine()->getManager();
       $em->persist($document);
       $em->flush();
      */

     /**
    $repositiory = $this->getDoctrine()->getRepository(Document::class);
    dump($repositiory);
      */
     return  $this->render('home.html.twig',[
         'documents' => $document
     ]);
 }
}