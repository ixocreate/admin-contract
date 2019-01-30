<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource\WidgetPosition;

use Ixocreate\Contract\Admin\DashboardWidgetCollectorInterface;
use Ixocreate\Admin\Entity\User;
use Ixocreate\Contract\Admin\UserInterface;
use Ixocreate\Contract\Admin\Widget\WidgetCollectorInterface;

interface BelowEditWidgetInterface
{
    public function receiveBelowEditWidgets(UserInterface $user, WidgetCollectorInterface $widgetCollector, string $id): void;
}
