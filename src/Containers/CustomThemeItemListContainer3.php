<?php

namespace CustomTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class CustomThemeItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CustomTheme::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}