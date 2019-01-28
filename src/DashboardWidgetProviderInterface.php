<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin;

use Ixocreate\Admin\Entity\User;

interface DashboardWidgetProviderInterface
{
    /**
     * @param DashboardWidgetCollectorInterface $dashboardWidgetCollector
     * @param UserInterface $user
     */
    public function provide(DashboardWidgetCollectorInterface $dashboardWidgetCollector, UserInterface $user): void;
}
