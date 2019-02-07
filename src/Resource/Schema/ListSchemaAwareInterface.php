<?php
/**
 * @link https://github.com/ixocreate
 * @copyright IXOCREATE GmbH
 * @license MIT License
 */

declare(strict_types=1);

namespace Ixocreate\Contract\Admin\Resource\Schema;

use Ixocreate\Contract\Admin\UserInterface;
use Ixocreate\Contract\Schema\Listing\ListSchemaInterface;

interface ListSchemaAwareInterface
{
    public function listSchema(UserInterface $user): ListSchemaInterface;
}
