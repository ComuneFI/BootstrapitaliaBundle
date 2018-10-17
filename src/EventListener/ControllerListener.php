<?php

namespace Fi\BootstrapitaliaBundle\EventListener;

use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;
use Fi\BootstrapitaliaBundle\Twig\Extension\BootstrapitaliaExtension;

class ControllerListener
{
    protected $extension;

    public function __construct(BootstrapitaliaExtension $extension)
    {
        $this->extension = $extension;
    }

    public function onKernelController(FilterControllerEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST === $event->getRequestType()) {
            $this->extension->setController($event->getController());
        }
    }
}
