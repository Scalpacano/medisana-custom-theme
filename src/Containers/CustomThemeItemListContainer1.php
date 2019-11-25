<?php

namespace CustomTheme\Containers;

use Plenty\Plugin\Templates\Twig;

class CustomThemeItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CustomTheme::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}