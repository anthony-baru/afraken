<?php
/**
 * This file is part of Parallel.
 * git: https://github.com/cheprasov/php-parallel
 *
 * (C) Alexander Cheprasov <cheprasov.84@ya.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Test;

use Parallel\Parallel;

class VersionTest extends \PHPUnit_Framework_TestCase {

    public function test_version() {
        chdir(__DIR__.'/../');
        $composer = json_decode(file_get_contents('./composer.json'), true);

        $this->assertSame(true, isset($composer['version']));
        $this->assertSame(
            Parallel::VERSION,
            $composer['version'],
            'Please, change version in composer.json'
        );

        $readme = file('./README.md');
        $this->assertSame(
            true,
            strpos($readme[0], 'Parallel v'.$composer['version']) > 0,
            'Please, change version in README.md'
        );

    }

}
