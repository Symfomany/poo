<?php

namespace App\Webservice;
use App\Webservice\AbstractDecorator;

/**
 * Class RenderInJson
 */
class RenderInChainable extends AbstractDecorator
{

    /**
     * render data as JSON
     *
     * @return mixed|string
     */
    public function renderProduct()
    {
        $output = $this->wrapped->renderProduct();

        return "<h3>". $output['title']  . "</h3> " . $output['prix'] . "€";
    }
}
