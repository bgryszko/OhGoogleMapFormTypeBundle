<?php

namespace Oh\GoogleMapFormTypeBundle\Twig;

class GoogleMapsExtension extends \Twig_Extension
{
    public function getFunctions()
    {
        return array(
            'google_maps_scripts'  => new \Twig_Function_Method($this, 'renderGoogleMapsScripts', array('needs_environment' => true, 'is_safe' => array('html')))
        );
    }

    public function renderGoogleMapsScripts(\Twig_Environment $environment, $formFiled)
    {

    	return $environment->render('OhGoogleMapFormTypeBundle:Form:scripts.html.twig', $formFiled->vars);

    }
    
    public function getName()
    {
        return 'google_maps_extension';
    }
}