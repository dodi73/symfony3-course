<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDs5eanp\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDs5eanp/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDs5eanp.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDs5eanp\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerDs5eanp\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Ds5eanp',
    'container.build_id' => '94f9f5a0',
    'container.build_time' => 1516374495,
));
