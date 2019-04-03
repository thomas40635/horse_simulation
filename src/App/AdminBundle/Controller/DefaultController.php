<?php

namespace App\AdminBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * Matches /
     *
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/", name="index")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {

        return $this->render('@AppAdmin/Default/index.html.twig');
    }

    /**
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("phpmyadmin", name="redirectPhpMyAdmin")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectPhpMyAdminAction()
    {
        $localhost_address = "http://".$_SERVER['SERVER_NAME']."/phpmyadmin";
        return $this->redirect($localhost_address);
    }

    /**
     * Matches /start
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/start", name="start")
     */
    public function StartServerAction()
    {
        $messages = shell_exec("/www/html/scripts/start-server.bash");
        if($messages == null){
            $messages = "La commande ne fonctionne pas.";
        }
        return $this->redirectToRoute('server', array(
            'messages' => $messages
        ));
    }

    /**
     * Matches /stop
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/stop", name="stop")
     */
    public function StopServerAction()
    {
        $messages = shell_exec("/www/html/scripts/stop-server.bash");
        if($messages == null){
            $messages = "La commande ne fonctionne pas.";
        }
        return $this->redirectToRoute('server', array(
            'messages' => $messages
        ));
    }

    /**
     * Matches /reload
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/reload", name="reload")
     */
    public function ReloadServerAction()
    {
        $messages = shell_exec("/www/html/scripts/reload-server.bash");
        if($messages == null){
            $messages = "La commande ne fonctionne pas.";
        }
        return $this->redirectToRoute('server', array(
            'messages' => $messages
        ));
    }

    /**
     * Matches /showprocess
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/showprocess", name="showprocess")
     */
    public function ShowProcessAction()
    {
        $messages = shell_exec("/www/html/scripts/show-process.bash");
        if($messages == null){
            $messages = "La commande ne fonctionne pas.";
        }
        return $this->render('@AppAdmin/Default/showprocess.html.twig', array(
            'list' => $messages
        ));
    }

    /**
     * Matches /killprocess
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/killprocess", name="killprocess")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function KillProcessAction(Request $request)
    {
        $messages = shell_exec("/www/html/scripts/show-process.bash ".$request->get('process'));
        if($messages == null){
            $messages = "La commande ne fonctionne pas.";
        }
        return $this->render('@AppAdmin/Default/killprocess.html.twig', array(
            'message' => $messages
        ));
    }

    /**
     * Matches /server
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/server", name="server")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ServerAction(Request $request)
    {
        $messages = $request->get('messages');
        return $this->render('@AppAdmin/Default/server.html.twig', array(
            'messages' => $messages
        ));
    }

    /**
     * Matches /statistic
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/statistic", name="statistic")
     */
    public function StatisticAction()
    {
        $messages = shell_exec("/www/html/scripts/surveillance-statistique.bash");
        if($messages == null){
            $messages = "La commande ne fonctionne pas.";
        }
        return $this->render('@AppAdmin/Default/showprocess.html.twig', array(
            'list' => $messages
        ));
    }

    /**
     * Matches /diagnostic
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/diagnostic", name="diagnostic")
     */
    public function DiagnosticAction()
    {
        $messages = shell_exec("/www/html/scripts/surveillance-diagnostic.bash");
        if($messages == null){
            $messages = "La commande ne fonctionne pas.";
        }
        return $this->render('@AppAdmin/Default/showprocess.html.twig', array(
            'list' => $messages
        ));
    }

    /**
     * Matches /surveillance
     * @Security("has_role('ROLE_ADMIN')")
     * @Route("/surveillance", name="surveillance")
     */
    public function SurveillanceAction()
    {
        return $this->render('@AppAdmin/Default/surveillance.html.twig');
    }

}
