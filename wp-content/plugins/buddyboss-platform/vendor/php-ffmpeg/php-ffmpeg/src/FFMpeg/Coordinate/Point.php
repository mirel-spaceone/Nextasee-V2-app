<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace BuddyBossPlatform\FFMpeg\Coordinate;

class Point
{
    private $x;
    private $y;
    public function __construct($x, $y, $dynamic = \false)
    {
        if ($dynamic) {
            $this->x = $x;
            $this->y = $y;
        } else {
            $this->x = (int) $x;
            $this->y = (int) $y;
        }
    }
    /**
     * @return integer
     */
    public function getX()
    {
        return $this->x;
    }
    /**
     * @return integer
     */
    public function getY()
    {
        return $this->y;
    }
}
