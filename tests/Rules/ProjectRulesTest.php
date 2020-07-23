<?php

/*
 * This file is part of kubawerlos/php-cs-fixer-config.
 *
 * (c) 2020 Kuba Werłos
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Tests\Rules;

use PhpCsFixerConfig\Builder\Modifier\ProjectRulesModifier;
use PhpCsFixerConfig\Builder\Rules;
use PhpCsFixerConfig\Rules\ProjectRules;
use PHPUnit\Framework\TestCase;

/**
 * @covers \PhpCsFixerConfig\Rules\ProjectRules
 *
 * @internal
 */
final class ProjectRulesTest extends TestCase
{
    public function testRulesAreUpToDate(): void
    {
        $projectRules = new ProjectRules();

        $rules = new Rules();
        $rules->apply(new ProjectRulesModifier());

        self::assertSame(
            $rules->getRules(),
            $projectRules->getRules()
        );
    }
}
