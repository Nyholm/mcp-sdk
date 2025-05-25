<?php

namespace PhpLlm\McpSdk\Capability\Prompt;

use PhpLlm\McpSdk\Exception\PromptNotFoundException;
use PhpLlm\McpSdk\Exception\PromptGetException;

interface PromptGetterInterface
{
    /**
     * @throws PromptGetException if the prompt execution fails
     * @throws PromptNotFoundException  if the prompt is not found
     */
    public function get(PromptGet $request): mixed;
}