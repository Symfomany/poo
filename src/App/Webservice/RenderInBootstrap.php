<?php

namespace App\Webservice;
use App\Webservice\AbstractDecorator;

/**
 * Class RenderInJson
 */
class RenderInBootstrap extends AbstractDecorator
{

    /**
     * render data as JSON
     *
     * @return mixed|string
     */
    public function renderProduct()
    {
        $output = $this->wrapped->renderProduct();
        dump($output);

        return "<div class='alert alert-success'>{$output}</div>";
    }
}
