<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource\Permission;

use Ixocreate\Contract\Admin\UserInterface;

interface CanViewInterface
{
    public function canView(UserInterface $user): bool;
}
