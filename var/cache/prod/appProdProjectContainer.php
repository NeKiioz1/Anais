<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOcqp1nc\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOcqp1nc/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerOcqp1nc.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerOcqp1nc\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerOcqp1nc\appProdProjectContainer([
    'container.build_hash' => 'Ocqp1nc',
    'container.build_id' => 'e62bfd27',
    'container.build_time' => 1614865747,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOcqp1nc');
