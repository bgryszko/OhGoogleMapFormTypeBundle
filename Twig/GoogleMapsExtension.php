<?
namespace Oh\GoogleMapFormTypeBundle\Twig;

class GoogleMapsExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_Filter_Method('google_maps_scripts', array($this, 'renderGoogleMapsScripts')),
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