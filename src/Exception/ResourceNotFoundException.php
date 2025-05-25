<?php

declare(strict_types=1);

namespace PhpLlm\McpSdk\Exception;

use PhpLlm\LlmChain\Chain\Toolbox\ExecutionReference;
use PhpLlm\LlmChain\Model\Response\ToolCall;
use PhpLlm\McpSdk\Capability\Resource\ResourceRead;

final class ResourceNotFoundException extends \RuntimeException implements NotFoundExceptionInterface
{
    public ?ResourceRead $readRequest = null;

    public static function create(ResourceRead $request): self
    {
        $exception = new self(sprintf('Resource not found for uri: "%s"', $request->uri));
        $exception->readRequest = $request;

        return $exception;
    }
}
