<?php
namespace App\Service;

class ChakraService
{
    private $chakra =  [
        'Racine (Muladahra)' => 1,
        'Centre d\'Energie (Hara)' => 2,
        'Plexus Solaire' => 3,
        'Coeur (Anahata)' => 4,
        'Gorge (Vishuddha)' => 5,
        'Troisième Oeil (Ajna)' => 6,
        'Coronal (Sahasrara)' => 7,
    ];

    public function getChakra()
    {
        return $this->chakra;
    }
}