<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace BuddyBossPlatform\FFMpeg\Driver;

use BuddyBossPlatform\Alchemy\BinaryDriver\AbstractBinary;
use BuddyBossPlatform\Alchemy\BinaryDriver\Configuration;
use BuddyBossPlatform\Alchemy\BinaryDriver\ConfigurationInterface;
use BuddyBossPlatform\Alchemy\BinaryDriver\Exception\ExecutableNotFoundException as BinaryDriverExecutableNotFound;
use BuddyBossPlatform\FFMpeg\Exception\ExecutableNotFoundException;
use BuddyBossPlatform\FFMpeg\Exception\RuntimeException;
use BuddyBossPlatform\Psr\Log\LoggerInterface;
class FFMpegDriver extends AbstractBinary
{
    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'ffmpeg';
    }
    /**
     * Creates an FFMpegDriver.
     *
     * @param LoggerInterface     $logger
     * @param array|Configuration $configuration
     *
     * @return FFMpegDriver
     */
    public static function create(LoggerInterface $logger = null, $configuration = array())
    {
        if (!$configuration instanceof ConfigurationInterface) {
            $configuration = new Configuration($configuration);
        }
        $binaries = $configuration->get('ffmpeg.binaries', array('avconv', 'ffmpeg'));
        if (!$configuration->has('timeout')) {
            $configuration->set('timeout', 300);
        }
        try {
            return static::load($binaries, $logger, $configuration);
        } catch (BinaryDriverExecutableNotFound $e) {
            throw new ExecutableNotFoundException('Unable to load FFMpeg', $e->getCode(), $e);
        }
    }
    /**
     * Get ffmpeg version.
     *
     * @return string
     * @throws RuntimeException
     */
    public function getVersion()
    {
        \preg_match('#version\\s(\\S+)#', $this->command('-version'), $version);
        if (!isset($version[1])) {
            throw new RuntimeException('Cannot to parse the ffmpeg version!');
        }
        return $version[1];
    }
}
