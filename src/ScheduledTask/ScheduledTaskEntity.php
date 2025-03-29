<?php

declare(strict_types=1);

namespace ITB\ShopwareSdkEntity\ScheduledTask;

use ITB\ShopwareSdkDataCore\Entity\Entity;

/**
 * Shopware Entity Mapping Class.
 *
 * This class is generated dynamically following SW entities schema
 */
class ScheduledTaskEntity extends Entity
{
    public ?int $defaultRunInterval = null;

    public ?\DateTimeInterface $lastExecutionTime = null;

    public ?string $name = null;

    public ?\DateTimeInterface $nextExecutionTime = null;

    public ?int $runInterval = null;

    public ?string $scheduledTaskClass = null;

    public ?string $status = null;
}
