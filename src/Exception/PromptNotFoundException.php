<?php

declare(strict_types=1);

namespace PhpLlm\McpSdk\Exception;

use PhpLlm\McpSdk\Capability\Prompt\PromptGet;

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
