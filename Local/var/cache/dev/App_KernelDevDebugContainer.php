<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container04fbywN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container04fbywN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container04fbywN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container04fbywN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container04fbywN\App_KernelDevDebugContainer([
    'container.build_hash' => '04fbywN',
    'container.build_id' => 'eea23d8d',
    'container.build_time' => 1717876862,
], __DIR__.\DIRECTORY_SEPARATOR.'Container04fbywN');
