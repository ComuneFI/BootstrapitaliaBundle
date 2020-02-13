BootstrapitaliaBundle
=============
Installazione:
-------------

- Aggiungere tramite composer:
```
composer require fi/bootstrapitaliabundle
```

- Registrare il bundle nel Kernel;
```
    new Fi\BootstrapitaliaBundle\FiBootstrapitaliaBundle(),
```
- Per vedere la demo aggiungere il routing:
```
bootstrapitalia:
    resource: "@BootstrapitaliaBundle/Resources/config/routing.yml"
    prefix:   /
```
E andare sul routing /BootstrapitaliaDemo/

