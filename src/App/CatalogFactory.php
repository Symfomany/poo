<?php

namespace App;

/**
 * Class CatalogFactory.
 */
class CatalogFactory
{

    /**
     * @param $entity
     * @return mixed
     */
    public static function create($entity)
    {

        switch (ucfirst($entity)){
            case 'Category':
                $obj = new \App\Category();
                break;
            case 'Product':
                $obj = new \App\Product();
                break;
            case 'Declinaisons':
                $obj = new \App\Declinaisons();
                break;
            case 'User':
                $obj = new \App\User();
                break;
            default:
                throw new \Exception ('Entité dans le catalogue inconnue');
        }

        return $obj;
    }

}
