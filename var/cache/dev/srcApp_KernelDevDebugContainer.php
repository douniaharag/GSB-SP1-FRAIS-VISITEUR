<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container7kerkzA\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container7kerkzA/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container7kerkzA.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container7kerkzA\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \Container7kerkzA\srcApp_KernelDevDebugContainer([
    'container.build_hash' => '7kerkzA',
    'container.build_id' => '53c91d65',
    'container.build_time' => 1615473562,
], __DIR__.\DIRECTORY_SEPARATOR.'Container7kerkzA');
