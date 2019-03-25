<?php
/**
 * Created by PhpStorm.
 * User: hp
 * Date: 25/03/2019
 * Time: 20:36
 */

namespace App\Controller;


use App\Entity\Structure;
use App\Repository\StructureRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StructureController extends AbstractController
{
    /**
     * @var StructureRepository
     */
    private $repository;

    /**
     * @Route("/structure/add", name="add_structure")
     * @return Response
     */
    public function add(StructureRepository $repository):Response
    {
        /**
        $structure = new Structure();
        $structure->setSigle('CCSD')
            ->setUrl('www.ccsd.cnrs.fr')
            ->setPays('France');
        $em = $this->getDoctrine()->getManager();
        $em->persist($structure);
        $em->flush();

        return $this->render('/structures/add.html.twig',[
           'structure' => 'structures'
        ]);

         */
        $structures = $this->getDoctrine()
            ->getRepository(Structure::class)
            ->findCountry();
        dump($structures);
        if (!$structures) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        return $this->render('/structures/country.html.twig', [
            'structures' =>$structures
        ]);
    }


}