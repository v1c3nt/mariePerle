<?php

namespace App\Controller\Admin;

use App\Entity\Pierre;
use App\Service\FormeService;
use App\Service\ChakraService;
use App\Service\CouleurService;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PierreCrudController extends AbstractCrudController
{
    private $couleurs;
    private $formes;
    
    public function __construct(CouleurService $couleur, FormeService $forme)
    {
        $this->couleurs = $couleur->getCouleur();
        $this->formes = $forme->getForme();
    }

    public static function getEntityFqcn(): string
    {
        return Pierre::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('nom'),
            ChoiceField::new('forme')->setChoices($this->formes),
            AssociationField::new('chakras'),
            ChoiceField::new('couleur')->setChoices($this->couleurs),
            IntegerField::new('diametre'),
            AssociationField::new('vertus'),
        ];
    }
    
    public function configureActions(Actions $actions): Actions
    {
        $toHome = Action::new('home')->displayAsLink()->linkToRoute('articles');
        return $actions
            ->add(Crud::PAGE_INDEX, $toHome)
        ;
    }
}

