<?php

declare(strict_types=1);

namespace PhpLlm\McpSdk\Capability\Resource;

final readonly class ReadRequest
{
    public function __construct(
        public string $id,
        public string $uri,
    ) {
    }
}
