<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * Matches /
     *
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render('@AppAdmin/Default/index.html.twig');
    }

    /**
     * Matches /start
     *
     * @Route("/start", name="start")
     */
    public function StartServerAction()
    {
        $messages = shell_exec("/etc/rc.d/init.d/mysql start");
        return $this->redirectToRoute('server', array(
            'messages' => $messages
        ));
    }

    /**
     * Matches /stop
     *
     * @Route("/stop", name="stop")
     */
    public function StopServerAction()
    {
        $messages = shell_exec("/etc/rc.d/init.d/mysql stop");
        return $this->redirectToRoute('server', array(
            'messages' => $messages
        ));
    }

    /**
     * Matches /reload
     *
     * @Route("/reload", name="reload")
     */
    public function ReloadServerAction()
    {
        $messages = shell_exec("/etc/rc.d/init.d/mysql reload");
        return $this->redirectToRoute('server', array(
            'messages' => $messages
        ));
    }

    /**
     * Matches /server
     *
     * @Route("/server", name="server")
     */
    public function ServerAction(Request $request)
    {
        $messages = $request->get('messages');
        return $this->render('@AppAdmin/Default/server.html.twig', array(
            'messages' => $messages
        ));
    }
}
