<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource\Permission;

use Ixocreate\Contract\Admin\Resource\Permission;
use Ixocreate\Contract\Admin\UserInterface;

interface CanCreateInterface
{
    public function canCreate(UserInterface $user): bool;
}
