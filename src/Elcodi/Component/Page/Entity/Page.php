<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 */

namespace Elcodi\Component\Page\Entity;

use Elcodi\Component\Core\Entity\Traits\DateTimeTrait;
use Elcodi\Component\Core\Entity\Traits\EnabledTrait;
use Elcodi\Component\Core\Entity\Traits\IdentifiableTrait;
use Elcodi\Component\MetaData\Entity\Traits\MetaDataTrait;
use Elcodi\Component\Page\Entity\Interfaces\PageInterface;

/**
 * Class Page
 *
 * @author Cayetano Soriano <neoshadybeat@gmail.com>
 * @author Jordi Grados <planetzombies@gmail.com>
 * @author Damien Gavard <damien.gavard@gmail.com>
 * @author Berny Cantos <be@rny.cc>
 */
class Page implements PageInterface
{
    use
        IdentifiableTrait,
        MetaDataTrait,
        DateTimeTrait,
        EnabledTrait;

    /**
     * The path
     *
     * @var string
     */
    protected $path;

    /**
     * The title
     *
     * @var string
     */
    protected $title;

    /**
     * The content
     *
     * @var string
     */
    protected $content;

    /**
     * Get the path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set the path
     *
     * @param string $path The path
     *
     * @return $this Self object
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get the content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the content
     *
     * @param string $content The content
     *
     * @return $this Self object
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title
     *
     * @param string $title The title
     *
     * @return $this Self object
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }
}
