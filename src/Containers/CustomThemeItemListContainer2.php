<?php

namespace CustomTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class CustomThemeItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CustomTheme::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}