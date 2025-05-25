<?php

namespace App;

use PhpLlm\McpSdk\Server\NotificationHandler\InitializedHandler;
use PhpLlm\McpSdk\Server\RequestHandler\InitializeHandler;
use PhpLlm\McpSdk\Server\RequestHandler\PingHandler;
use PhpLlm\McpSdk\Server\RequestHandler\PromptGetHandler;
use PhpLlm\McpSdk\Server\RequestHandler\PromptListHandler;
use PhpLlm\McpSdk\Server\RequestHandler\ResourceListHandler;
use PhpLlm\McpSdk\Server\RequestHandler\ResourceReadHandler;
use PhpLlm\McpSdk\Server\RequestHandler\ToolCallHandler;
use PhpLlm\McpSdk\Server\RequestHandler\ToolListHandler;

class Builder
{
    public static function buildRequestHandlers(): array
    {
        $promptManager = new PromptManager();
        $resourceManager = new ResourceManager();
        $toolManager = new ToolManager();

        return [
            new InitializeHandler(),
            new PingHandler(),
            new PromptListHandler($promptManager),
            new PromptGetHandler($promptManager),
            new ResourceListHandler($resourceManager),
            new ResourceReadHandler($resourceManager),
            new ToolCallHandler($toolManager),
            new ToolListHandler($toolManager),
        ];
    }

    public static function buildNotificationHandlers(): array
    {
        return [
            new InitializedHandler(),
        ];
    }
}
