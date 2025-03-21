<?php

declare(strict_types=1);

namespace SmitBackend\PromptShield\Contracts;

/**
 * Interface InspectionRuleInterface
 *
 * @package SmitBackend\PromptShield
 */
interface InspectionRuleInterface
{
    public function execute(array $payload = []): mixed;
}
