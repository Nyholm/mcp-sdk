<?php

namespace App;

use PhpLlm\McpSdk\Capability\Resource\CollectionInterface;
use PhpLlm\McpSdk\Capability\Resource\ResourceRead;
use PhpLlm\McpSdk\Capability\Resource\ResourceReaderInterface;

class ResourceManager implements CollectionInterface, ResourceReaderInterface
{
    public function getMetadata(): array
    {
        return [];
    }

    public function read(ResourceRead $request): mixed
    {
        return 'foo';
    }
}
