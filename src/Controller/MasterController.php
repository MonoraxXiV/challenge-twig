<?php

namespace App\Controller;

use App\Services\Capitalize;
use App\Entity\Logger;
use App\Services\master;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class MasterController extends AbstractController
{

    private $master;
    private $session;

    /**
     * MasterController constructor.
     * @param string $message
     * @param $master
     */
    public function __construct(Capitalize $transform, SessionInterface $session)
    {

        $this->master = new master(new Logger(), $transform);

        $this->session = $session;
    }

    /**
     * @Route("/learning", name="learning")
     */
    public function index(): Response
    {
        return $this->render('learning/index.html.twig', [
            'controller_name' => 'MasterController',
        ]);
    }

    /**
     * @Route("/text", name="textTransform")
     */

    //if isset to handle the lack of input
    public function textTransform()
    {
        if (isset($_POST['input'])) {
            return $this->render('learning/textTransform.html.twig', [
                'message' => $this->master->log($_POST['input'])
            ]);
        }else{
            return $this->render('learning/textTransform.html.twig', [
                'message' => 'hello world!']);
        }

    }

    public function changeText()
    {
        $sessionText = $this->session->get('sessionText', 'hello World!');
        return $this->render('learning/textChange.html.twig', ['name' => $sessionText]);
    }
}
