<?php

declare(strict_types=1);

namespace PhpLlm\McpSdk\Exception;

use PhpLlm\McpSdk\Capability\Prompt\PromptGet;

final class PromptGetException extends \RuntimeException implements ExceptionInterface
{
    public ?PromptGet $promptGet = null;

    public static function executionFailed(PromptGet $promptGet, \Throwable $previous): self
    {
        $exception = new self(sprintf('Reading resource "%s" failed with error: %s', $promptGet->name, $previous->getMessage()), previous: $previous);
        $exception->promptGet = $promptGet;

        return $exception;
    }
}
