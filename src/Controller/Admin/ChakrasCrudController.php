<?php

namespace App\Controller\Admin;

use App\Entity\Chakras;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class ChakrasCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chakras::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
        ];
    }
    
}
