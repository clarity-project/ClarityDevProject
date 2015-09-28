<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->redirectToRoute('clarity_yandex_oauth_token_request', array(
            'appName' => 'my_first_app',
            'scope' => 'main',
//            'device_id' => 'ios_id',
//            'device_name' => 'my_ios'
        ));
    }

    /**
     * @Route("/cached", name="cached")
     */
    public function cachedTokenAction()
    {
        $appToken = $this->get('clarity_yandex.oauth.service')->getCachedToken('my_first_app', 'main');

        die(var_dump($appToken));
    }

    /**
     * @Route("/finish", name="finish")
     */
    public function finishAction()
    {
        return $this->render('AppBundle:Default:finish.html.twig');
    }
}
