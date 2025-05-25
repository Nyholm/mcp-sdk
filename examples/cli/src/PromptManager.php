<?php

namespace App;

use PhpLlm\McpSdk\Capability\Prompt\CollectionInterface;
use PhpLlm\McpSdk\Capability\Prompt\PromptGet;
use PhpLlm\McpSdk\Capability\Prompt\PromptGetterInterface;

class PromptManager implements PromptGetterInterface, CollectionInterface
{
    private array $items;
    public function __construct(
    ){
        $this->items = [
            new ExamplePrompt(),
        ];
    }

    public function getMetadata(): array
    {
        return $this->items;
    }


    public function get(PromptGet $request): mixed
    {
        return 'foo';
    }
}
