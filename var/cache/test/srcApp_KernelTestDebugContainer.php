<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container26DVbkV\srcApp_KernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container26DVbkV/srcApp_KernelTestDebugContainer.php') {
    touch(__DIR__.'/Container26DVbkV.legacy');

    return;
}

if (!\class_exists(srcApp_KernelTestDebugContainer::class, false)) {
    \class_alias(\Container26DVbkV\srcApp_KernelTestDebugContainer::class, srcApp_KernelTestDebugContainer::class, false);
}

return new \Container26DVbkV\srcApp_KernelTestDebugContainer([
    'container.build_hash' => '26DVbkV',
    'container.build_id' => 'ddc959f2',
    'container.build_time' => 1565004888,
], __DIR__.\DIRECTORY_SEPARATOR.'Container26DVbkV');