<?php

declare(strict_types=1);

namespace PhpLlm\McpSdk\Exception;

use PhpLlm\LlmChain\Chain\Toolbox\ExecutionReference;
use PhpLlm\LlmChain\Model\Response\ToolCall;
use PhpLlm\McpSdk\Capability\Prompt\PromptGet;
use PhpLlm\McpSdk\Capability\Resource\ResourceRead;

final class PromptNotFoundException extends \RuntimeException implements NotFoundExceptionInterface
{
    public ?PromptGet $promptGet = null;

    public static function create(PromptGet $promptGet): self
    {
        $exception = new self(sprintf('Resource not found for uri: "%s"', $promptGet->name));
        $exception->promptGet = $promptGet;

        return $exception;
    }
}
