# Smartbees Workflow Moderation

Drupal module that ships a ready-to-use content moderation workflow for teams that want a simple Draft → Review → Published loop.

## What this module provides

- Workflow ID: `smartbees_content`
- States: Draft, In Review, Published
- Transitions: Create Draft, Submit for review, Request changes, Publish

## Requirements

- Drupal 10 or 11
- Modules: Content Moderation, Workflows

## Install

1. Copy this module into `modules/custom/smartbees_workflow_moderation`.
2. Enable the module.
3. Go to `Configuration → Workflow → Workflows` and edit **Smartbees Content Workflow**.
4. Assign the workflow to the content types you want to moderate.
5. Update permissions for roles that should use each transition.

## Notes

- The workflow is delivered via config install (`config/install/workflows.workflow.smartbees_content.yml`).
- You can extend this by adding additional states or transitions in the workflow UI.

## Development

- `composer install`
- `vendor/bin/phpcs`
- `vendor/bin/phpunit`
