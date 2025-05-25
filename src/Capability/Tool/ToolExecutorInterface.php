<?php

namespace PhpLlm\McpSdk\Capability\Tool;

use PhpLlm\McpSdk\Exception\ToolExecutionException;
use PhpLlm\McpSdk\Exception\ToolNotFoundExceptionInterface;

interface ToolExecutorInterface
{
    /**
     * @throws ToolExecutionException if the tool execution fails
     * @throws ToolNotFoundExceptionInterface  if the tool is not found
     */
    public function execute(ToolCall $toolCall): mixed;
}
