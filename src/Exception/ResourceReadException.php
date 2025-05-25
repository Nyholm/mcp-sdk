<?php

declare(strict_types=1);

namespace PhpLlm\McpSdk\Exception;

use PhpLlm\LlmChain\Model\Response\ToolCall;
use PhpLlm\McpSdk\Capability\Resource\ResourceRead;

final class ResourceReadException extends \RuntimeException implements ExceptionInterface
{
    public ?ResourceRead $readRequest = null;

    public static function executionFailed(ResourceRead $readRequest, \Throwable $previous): self
    {
        $exception = new self(sprintf('Reading resource "%s" failed with error: %s', $readRequest->uri, $previous->getMessage()), previous: $previous);
        $exception->readRequest = $readRequest;

        return $exception;
    }
}
