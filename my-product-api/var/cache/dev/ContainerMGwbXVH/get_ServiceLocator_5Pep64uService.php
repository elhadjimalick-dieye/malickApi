<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.5Pep64u' shared service.

return $this->privates['.service_locator.5Pep64u'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'compteBancaire' => ['privates', '.errored..service_locator.5Pep64u.App\\Entity\\CompteBancaire', NULL, 'Cannot autowire service ".service_locator.5Pep64u": it references class "App\\Entity\\CompteBancaire" but no such service exists.'],
], [
    'compteBancaire' => 'App\\Entity\\CompteBancaire',
]);
