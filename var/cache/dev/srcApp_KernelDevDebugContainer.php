<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWvn9UPe\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWvn9UPe/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWvn9UPe.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWvn9UPe\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerWvn9UPe\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'Wvn9UPe',
    'container.build_id' => 'd3375814',
    'container.build_time' => 1604668474,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWvn9UPe');
