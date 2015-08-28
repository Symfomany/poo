<?php

namespace App\Webservice;
use App\Webservice\AbstractDecorator;

/**
 * Class RenderInJson
 */
class RenderInBold extends AbstractDecorator
{

    /**
     * render data as JSON
     *
     * @return mixed|string
     */
    public function renderProduct()
    {
        $output = $this->wrapped->renderProduct();

        return "<strong>{$output}</strong>";
    }
}
