<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVsbSqxn\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVsbSqxn/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVsbSqxn.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVsbSqxn\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerVsbSqxn\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'VsbSqxn',
    'container.build_id' => '3b989c42',
    'container.build_time' => 1555131578,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVsbSqxn');