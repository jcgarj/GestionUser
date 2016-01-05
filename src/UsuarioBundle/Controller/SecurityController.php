<?php
namespace Usuario\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use UsuarioBundle\Entity\usuario;
use UsuarioBundle\Form\usuarioType;
 
class SecurityController extends Controller
{
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
 
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }
         $em = $this->getDoctrine()->getManager();

            return $this->render('UsuarioBundle:Security:login.html.twig',
                array(
                    'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                    'error'         => $error,
                )
            );
    }

}

