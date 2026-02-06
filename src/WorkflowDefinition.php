<?php

declare(strict_types=1);

namespace Smartbees\WorkflowModeration;

final class WorkflowDefinition
{
    public const WORKFLOW_ID = 'smartbees_content';

    /**
     * @return string[]
     */
    public static function states(): array
    {
        return ['draft', 'review', 'published'];
    }

    /**
     * @return string[]
     */
    public static function transitions(): array
    {
        return ['create_draft', 'submit_for_review', 'request_changes', 'publish'];
    }
}
