<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource;

use Ixocreate\Contract\Admin\UserInterface;
use Ixocreate\Contract\Schema\BuilderInterface;

interface AdditionalSchemasInterface
{
    /**
     * @param BuilderInterface $builder
     * @param UserInterface $user
     * @return null|array
     */
    public function additionalSchemas(BuilderInterface $builder, UserInterface $user): array;
}
