<?php

namespace App;

use PhpLlm\McpSdk\Capability\Prompt\CollectionInterface;
use PhpLlm\McpSdk\Capability\Prompt\PromptGet;
use PhpLlm\McpSdk\Capability\Prompt\PromptGetterInterface;

class PromptManager implements PromptGetterInterface, CollectionInterface
{
    public function getMetadata(): array
    {
        return [];
    }

    public function get(PromptGet $request): mixed
    {
        return 'foo';
    }
}
