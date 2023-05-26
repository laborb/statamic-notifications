<?php

namespace Laborb\StatamicNotifications\Handlers;

class AssetUploadedHandler {
    public function info($data) {
        return '**' . $data[0]->asset->path . '** to container **' . $data[0]->asset->container->handle . '**';
    }
}
