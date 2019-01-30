<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource\WidgetPosition;

use Ixocreate\Contract\Admin\UserInterface;
use Ixocreate\Contract\Admin\Widget\WidgetCollectorInterface;

interface BelowCreateWidgetInterface
{
    public function receiveBelowCreateWidgets(UserInterface $user, WidgetCollectorInterface $widgetCollector): void;
}