<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMZj8sD3\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMZj8sD3/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerMZj8sD3.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerMZj8sD3\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerMZj8sD3\App_KernelDevDebugContainer([
    'container.build_hash' => 'MZj8sD3',
    'container.build_id' => 'b2a364b3',
    'container.build_time' => 1694518649,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMZj8sD3');