<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource;

use Ixocreate\Contract\Admin\UserInterface;

interface DefaultValueInterface
{
    /**
     * @param UserInterface $user
     * @return array
     */
    public function defaultValues(UserInterface $user): array;
}
