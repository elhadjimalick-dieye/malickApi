<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBdfFAVa\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBdfFAVa/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBdfFAVa.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBdfFAVa\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerBdfFAVa\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'BdfFAVa',
    'container.build_id' => '13d87067',
    'container.build_time' => 1565004812,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBdfFAVa');
