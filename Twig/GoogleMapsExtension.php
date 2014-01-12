<?php

namespace Oh\GoogleMapFormTypeBundle\Twig;

class GoogleMapsExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'google_maps_scripts'  => new \Twig_Filter_Method($this, 'renderGoogleMapsScripts'),
        );
    }

    public function renderGoogleMapsScripts()
    {
        return "aaaaa";
    }

    public function getName()
    {
        return 'google_maps_extension';
    }
}