<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.W25uajM' shared service.

return $this->privates['.service_locator.W25uajM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'compteBancaireRepository' => ['privates', 'App\\Repository\\CompteBancaireRepository', 'getCompteBancaireRepositoryService.php', true],
], [
    'compteBancaireRepository' => 'App\\Repository\\CompteBancaireRepository',
]);
