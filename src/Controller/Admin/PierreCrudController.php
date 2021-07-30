<?php

namespace App\Controller\Admin;

use App\Entity\Pierre;
use App\Service\ChakraService;
use App\Service\CouleurService;
use App\Service\FormeService;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;

class PierreCrudController extends AbstractCrudController
{
    private $chakras;
    private $couleurs;
    private $formes;
    
    public function __construct(ChakraService $chakra, CouleurService $couleur, FormeService $forme)
    {
        $this->chakras = $chakra->getChakra();
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
            ChoiceField::new('chakra')->setChoices($this->chakras),
            ChoiceField::new('couleur')->setChoices($this->couleurs),
            //TODO ajouter les vertus une fois créer
            IntegerField::new('diametre'),
        ];
    }
}
