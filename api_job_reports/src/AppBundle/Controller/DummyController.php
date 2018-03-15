<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
//DFM no he usado entity aun
use AppBundle\Entity\Usuario;

class DummyController extends FOSRestController
{
    public function getDummyAction()
    {	
		$dummyOutput = "TestDummyOutput";
        return $dummyOutput;
    }

    /**
     * Usando funciones predefinidas del repository
     */
    public function getDummy1Action()
    {	

        $repository = $this->getDoctrine()->getRepository(Usuario::class);

        $id = 48335209;
        // look for a single Product by its primary key (usually "id")
        $usuario = $repository->find($id);

        // // look for a single Product by name
        // $product = $repository->findOneBy(['name' => 'Keyboard']);
        // // or find by name and price
        // $product = $repository->findOneBy([
        //     'name' => 'Keyboard',
        //     'price' => 19.99,
        // ]);

        // // look for multiple Product objects matching the name, ordered by price
        // $products = $repository->findBy(
        //     ['name' => 'Keyboard'],
        //     ['price' => 'ASC']
        // );

        // // look for *all* Product objects
        // $products = $repository->findAll();
        return $usuario;
    }

    /**
     * Usando funciones custom del repository
     */
    public function getDummy2Action()
    {	
        $repository = $this->getDoctrine()->getRepository(Usuario::class);
        
        $param = 1;
        $usuarios = $repository->findAllTest($param);
        
        return $usuarios;
    }
}