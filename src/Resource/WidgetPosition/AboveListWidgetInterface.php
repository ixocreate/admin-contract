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

interface AboveListWidgetInterface
{
    public function receiveAboveListWidgets(UserInterface $user, WidgetCollectorInterface $widgetCollector): void;
}