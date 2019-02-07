<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource\Schema;

use Ixocreate\Contract\Admin\UserInterface;
use Ixocreate\Contract\Schema\BuilderInterface;
use Ixocreate\Contract\Schema\SchemaInterface;

interface UpdateSchemaAwareInterface
{
    public function updateSchema(BuilderInterface $builder, UserInterface $user): SchemaInterface;
}
