<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource\Action;

use Ixocreate\Contract\Admin\Resource\Action;
use Ixocreate\Contract\Admin\UserInterface;

interface CreateActionAwareInterface
{
    public function createAction(UserInterface $user): string;
}
