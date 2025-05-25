<?php

declare(strict_types=1);

namespace PhpLlm\McpSdk\Exception;


use PhpLlm\McpSdk\Capability\Tool\ToolCall;

final class ToolNotFoundException extends \RuntimeException implements NotFoundExceptionInterface
{
    public ?ToolCall $toolCall = null;

    public static function create(ToolCall $toolCall): self
    {
        $exception = new self(sprintf('Tool not found for call: "%s"', $toolCall->name));
        $exception->toolCall = $toolCall;

        return $exception;
    }
}
