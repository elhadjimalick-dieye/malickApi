<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerD4nvGEs\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerD4nvGEs/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerD4nvGEs.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerD4nvGEs\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerD4nvGEs\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'D4nvGEs',
    'container.build_id' => 'a77bc06e',
    'container.build_time' => 1565970515,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerD4nvGEs');
