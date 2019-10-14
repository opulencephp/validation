<?php

/**
 * Opulence
 *
 * @link      https://www.opulencephp.com
 * @copyright Copyright (C) 2019 David Young
 * @license   https://github.com/opulencephp/Opulence/blob/master/LICENSE.md
 */

declare(strict_types=1);

namespace Opulence\Validation\Rules;

/**
 * Defines the email rule
 */
final class EmailRule implements IRule
{
    /**
     * @inheritdoc
     */
    public function getSlug(): string
    {
        return 'email';
    }

    /**
     * @inheritdoc
     */
    public function passes($value, array $allValues = []): bool
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}
