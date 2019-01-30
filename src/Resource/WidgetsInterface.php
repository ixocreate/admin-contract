<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource\Widgets;


use Ixocreate\Contract\Admin\Resource\WidgetPosition\AboveCreateWidgetInterface;
use Ixocreate\Contract\Admin\Resource\WidgetPosition\AboveEditWidgetInterface;
use Ixocreate\Contract\Admin\Resource\WidgetPosition\AboveListWidgetInterface;
use Ixocreate\Contract\Admin\Resource\WidgetPosition\BelowCreateWidgetInterface;
use Ixocreate\Contract\Admin\Resource\WidgetPosition\BelowEditWidgetInterface;
use Ixocreate\Contract\Admin\Resource\WidgetPosition\BelowListWidgetInterface;

interface WidgetsInterface extends
    AboveCreateWidgetInterface,
    AboveEditWidgetInterface,
    AboveListWidgetInterface,
    BelowCreateWidgetInterface,
    BelowEditWidgetInterface,
    BelowListWidgetInterface
{
}
