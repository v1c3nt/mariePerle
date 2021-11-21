<?php

namespace App\Controller\Admin;

use App\Entity\Photo;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PhotoCrudController extends AbstractCrudController
{
    private $photosDirectory;
    private $photosDisplay;
    
    public function __construct( string $photosDirectory, string $photosDisplay)
    {
        $this->photosDirectory = $photosDirectory;
        $this->photosDisplay = $photosDisplay;
    }

    public static function getEntityFqcn(): string
    {
        return Photo::class;
    }

    public function configureFields(string $pageName): iterable
    {
        if (Crud::PAGE_EDIT  == $pageName) {
            return [
                yield ImageField::new('url')->setUploadDir($this->photosDirectory)
                ->setBasePath($this->photosDisplay)->setRequired(false),
                yield TextField::new('alt'), 

            ];
        }

        return [
            yield ImageField::new('url')->setUploadDir($this->photosDirectory)
            ->setBasePath($this->photosDisplay),
            yield TextField::new('alt'),  
        ];
    }
    
    public function configureCrud(Crud $crud): Crud
    {
        return $crud
        ->setSearchFields(['name'])
        ;
    }


    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('alt')
        ;
    }

}
