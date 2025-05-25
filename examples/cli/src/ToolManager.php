<?php

namespace App;

use PhpLlm\McpSdk\Capability\Tool\CollectionInterface;
use PhpLlm\McpSdk\Capability\Tool\ToolCall;
use PhpLlm\McpSdk\Capability\Tool\ToolExecutorInterface;

class ToolManager implements ToolExecutorInterface, CollectionInterface
{
    public function getMetadata(): array
    {
        return [];
    }

    public function execute(ToolCall $toolCall): mixed
    {
        return 'bar';
    }
}
