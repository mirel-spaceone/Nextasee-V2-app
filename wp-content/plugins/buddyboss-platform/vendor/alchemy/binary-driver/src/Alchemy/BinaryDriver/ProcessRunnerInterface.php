<?php

/*
 * This file is part of Alchemy\BinaryDriver.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace BuddyBossPlatform\Alchemy\BinaryDriver;

use BuddyBossPlatform\Alchemy\BinaryDriver\Exception\ExecutionFailureException;
use BuddyBossPlatform\Psr\Log\LoggerAwareInterface;
use SplObjectStorage;
use BuddyBossPlatform\Symfony\Component\Process\Process;
interface ProcessRunnerInterface extends LoggerAwareInterface
{
    /**
     * Executes a process, logs events
     *
     * @param Process          $process
     * @param SplObjectStorage $listeners    Some listeners
     * @param Boolean          $bypassErrors Set to true to disable throwing ExecutionFailureExceptions
     *
     * @return string The Process output
     *
     * @throws ExecutionFailureException in case of process failure.
     */
    public function run(Process $process, SplObjectStorage $listeners, $bypassErrors);
}
