<?php

namespace Users\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersBlockController extends Controller
{
    public function loginAction()
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        if ($usr == "anon."){
            return $this->render('UsersBundle:Blocks:loginblock.html.twig', array(
                'error' => null));
        }else{
            $avatarstr= $this->get('security.token_storage')->getToken()->getUser()->getAvatar();
            if ($avatarstr != '') {
                $avatarId = $avatarstr->getId();
                $em = $this->getDoctrine()->getManager();
                $avatarrow = $em->getRepository('UsersBundle:Avatar')->find($avatarId);
                $avatar = $avatarrow->getPath();
            } else {
                $avatar = 'default';
            }
            return $this->render('UsersBundle:Blocks:loginblock.html.twig', array(
                'error' => null,
                'user' => $usr,
                'avatar' => $avatar));
        }
    }

    public function donateAction()
    {
        return $this->render('UsersBundle:Blocks:donateblock.html.twig');
    }

    public function statsAction()
    {
        return $this->render('UsersBundle:Blocks:statsblock.html.twig');
    }

    public function membersonlineAction()
    {
        return $this->render('UsersBundle:Blocks:membersonlineblock.html.twig');
    }

    public function membersonline24Action()
    {
        return $this->render('UsersBundle:Blocks:membersonline24block.html.twig');
    }

    public function membercpmenuAction($url)
    {
        $routeName = $url;
        return $this->render('UsersBundle:Blocks:membercpmenublock.html.twig', array('routename' => $routeName));
    }
}