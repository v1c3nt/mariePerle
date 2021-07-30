<?php

namespace App\Controller\Admin;

use App\Entity\Vertu;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class VertuCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Vertu::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
        ];
    }
    
}
