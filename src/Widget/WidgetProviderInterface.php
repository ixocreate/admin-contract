<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Widget;

use Ixocreate\Contract\Admin\UserInterface;

interface WidgetProviderInterface
{
    /**
     * @param WidgetCollectorInterface $widgetCollector
     * @param UserInterface $user
     */
    public function provide(WidgetCollectorInterface $widgetCollector, UserInterface $user): void;
}
