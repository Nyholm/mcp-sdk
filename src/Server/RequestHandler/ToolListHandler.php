<?php

declare(strict_types=1);

namespace PhpLlm\McpSdk\Server\RequestHandler;

use PhpLlm\McpSdk\Capability\Tool\CollectionInterface;
use PhpLlm\McpSdk\Capability\Tool\MetadataInterface;
use PhpLlm\McpSdk\Message\Request;
use PhpLlm\McpSdk\Message\Response;

final class ToolListHandler extends BaseRequestHandler
{
    public function __construct(
        private readonly CollectionInterface $collection,
    ) {
    }

    public function createResponse(Request $message): Response
    {
        return new Response($message->id, [
            'tools' => array_map(function (MetadataInterface $tool) {
                $inputSchema = $tool->getInputSchema();

                return [
                    'name' => $tool->getName(),
                    'description' => $tool->getDescription(),
                    'inputSchema' => [] === $inputSchema ? [
                        'type' => 'object',
                        '$schema' => 'http://json-schema.org/draft-07/schema#',
                    ] : $inputSchema,
                ];
            }, $this->collection->getMetadata()),
        ]);
    }

    protected function supportedMethod(): string
    {
        return 'tools/list';
    }
}
