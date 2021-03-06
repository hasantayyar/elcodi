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

namespace Elcodi\Component\User\Entity;

use Elcodi\Component\User\Entity\Abstracts\AbstractUser;
use Elcodi\Component\User\Entity\Interfaces\AdminUserInterface;

/**
 * Class AdminUser
 */
class AdminUser extends AbstractUser implements AdminUserInterface
{
    /**
     * Admin User roles
     *
     * @return string[] Roles
     */
    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }
}
