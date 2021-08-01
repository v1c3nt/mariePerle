<?php
namespace App\Service;

class ChakraService
{
    private $chakra =  [
        'Racine (Muladahra)' => 'Racine (Muladahra)',
        'Centre d\'Energie (Hara)' => 'Centre d\'Energie (Hara)',
        'Plexus Solaire' => 'Plexus Solaire',
        'Coeur (Anahata)' => 'Coeur (Anahata)',
        'Gorge (Vishuddha)' => 'Gorge (Vishuddha)',
        'Troisième Oeil (Ajna)' => 'Troisième Oeil (Ajna)',
        'Coronal (Sahasrara)' => 'Coronal (Sahasrara)' ,
    ];

    public function getChakras()
    {
        return $this->chakra;
    }
}