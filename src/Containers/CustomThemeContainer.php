<?php
namespace CustomTheme\Containers;
use Plenty\Plugin\Templates\Twig;

class CustomThemeContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CustomTheme::Stylesheet');
    }
}
