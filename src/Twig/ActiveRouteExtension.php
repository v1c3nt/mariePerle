<?php

namespace App\Twig;

use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use Symfony\Component\HttpFoundation\RequestStack;

class ActiveRouteExtension extends AbstractExtension
{
    private $requestStack;
    
    public function __construct(RequestStack $requestStack)
    {
        $this->requestStack = $requestStack;
    }
   

    public function getFunctions(): array
    {
        return [
            new TwigFunction('ActiveRoute', [$this, 'activeRoute']),
        ];
    }

    public function activeRoute(String $activeRoute): string
    {
        $currentRoute = $this->requestStack->getCurrentRequest()->get('_route');

        return ($currentRoute === $activeRoute)? 'active' : '';
    }
}
