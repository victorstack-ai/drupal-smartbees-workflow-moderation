<?php

declare(strict_types=1);

namespace Smartbees\WorkflowModeration\Tests\Unit;

use PHPUnit\Framework\TestCase;
use Smartbees\WorkflowModeration\WorkflowDefinition;
use Symfony\Component\Yaml\Yaml;

final class WorkflowConfigTest extends TestCase
{
    private function loadConfig(): array
    {
        $path = __DIR__ . '/../../config/install/workflows.workflow.smartbees_content.yml';
        $this->assertFileExists($path);

        return Yaml::parseFile($path);
    }

    public function testWorkflowConfigMetadata(): void
    {
        $config = $this->loadConfig();

        $this->assertSame('smartbees_content', $config['id']);
        $this->assertSame('Smartbees Content Workflow', $config['label']);
        $this->assertSame('content_moderation', $config['type']);
        $this->assertSame('draft', $config['type_settings']['default_moderation_state']);
        $this->assertContains('content_moderation', $config['dependencies']['module']);
    }

    public function testWorkflowStatesAndTransitions(): void
    {
        $config = $this->loadConfig();
        $states = array_keys($config['type_settings']['states']);
        $transitions = array_keys($config['type_settings']['transitions']);

        $this->assertSame(WorkflowDefinition::states(), $states);
        $this->assertSame(WorkflowDefinition::transitions(), $transitions);
    }
}
