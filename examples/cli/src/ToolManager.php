<?php

namespace App;

use PhpLlm\McpSdk\Capability\Tool\CollectionInterface;
use PhpLlm\McpSdk\Capability\Tool\ToolCall;
use PhpLlm\McpSdk\Capability\Tool\ToolExecutorInterface;
use PhpLlm\McpSdk\Exception\ToolNotFoundException;

class ToolManager implements ToolExecutorInterface, CollectionInterface
{
    private array $items;

    public function __construct(
    ) {
        $this->items = [
            new ExampleTool(),
        ];
    }

    public function getMetadata(): array
    {
        return $this->items;
    }

    public function execute(ToolCall $toolCall): mixed
    {
        foreach ($this->items as $tool) {
            if ($toolCall->name === $tool->getName()) {
                return $tool->__invoke(...$toolCall->arguments);
            }
        }

        throw ToolNotFoundException::create($toolCall);
    }
}
