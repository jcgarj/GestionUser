<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(){
        return $this->render('AppBundle:Default:index.html.twig');
    }
    public function acercadeAction(){
        return $this->render('AppBundle:Default:acercade.html.twig');
    }
    public function serviciosAction(){
        return $this->render('AppBundle:Default:servicios.html.twig');
    }
    public function paquetesAction(){
        return $this->render('AppBundle:Default:paquetes.html.twig');
    }
    public function beneficiosAction(){
        return $this->render('AppBundle:Default:beneficios.html.twig');
    }
    public function soporteAction(){
        return $this->render('AppBundle:Default:soporte.html.twig');
    }
    public function noticiasAction(){
        return $this->render('AppBundle:Default:noticias.html.twig');
    }
    public function contactoAction(){
        return $this->render('AppBundle:Default:contacto.html.twig');
    }
    public function contactoEnviarAction(Request $request)
    {
        // Obtenemos los datos
        $nombre = $request->request->get('nombre');
        $correo = $request->request->get('correo');
        $telefono = $request->request->get('telefono');
        $empresa = $request->request->get('empresa');
        $asunto = $request->request->get('asunto');
        $mensaje = $request->request->get('mensaje');

        $to1 = "info@gestion.global";
        $to2 = "ventas@gestion.global";
        $to3 = "alexis.leon@icloud.com";
        $subject = $asunto;
        //$from = 'Sender <noreply@gestion.global.com>';
        $from = $correo;
        $body = $mensaje;

        $headers = "From: " .($from) . "\r\n";
        $headers .= "Reply-To: ".($from) . "\r\n";
        $headers .= "Return-Path: ".($from) . "\r\n";;
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

        mail($to1,$subject,$body,$headers);
        mail($to2,$subject,$body,$headers);
        mail($to3,$subject,$body,$headers);

        return $this->render('AppBundle:Default:contacto.html.twig', array('msj' => "Mensaje enviado correctamente!"));
    }
}
