<?php
declare(strict_types=1);

namespace Zalas\PHPUnit\DependencyInjection\Tests\Symfony\TestCase;

use PHPUnit\Framework\TestCase;
use Zalas\PHPUnit\DependencyInjection\Symfony\TestCase\KernelServiceContainer;

class IncompleteKernelServiceContainerTest extends TestCase
{
    use KernelServiceContainer;

    public function test_it_initializes_the_container_by_booting_the_symfony_kernel()
    {
        $this->expectException(\RuntimeException::class);

        $this->createContainer();
    }
}
