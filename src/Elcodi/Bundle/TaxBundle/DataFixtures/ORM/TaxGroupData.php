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

namespace Elcodi\Bundle\TaxBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;

use Elcodi\Bundle\CoreBundle\DataFixtures\ORM\Abstracts\AbstractFixture;
use Elcodi\Component\Tax\Factory\TaxGroupFactory;

/**
 * Class TaxGroupData
 */
class TaxGroupData extends AbstractFixture
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        /**
         * @var ObjectManager   $taxGroupObjectManager
         * @var TaxGroupFactory $taxGroupFactory
         */
        $taxGroupObjectManager = $this->get('elcodi.object_manager.tax_group');
        $taxGroupFactory = $this->get('elcodi.factory.tax_group');

        $andorranTaxes = $taxGroupFactory->create();
        $andorranTaxes
            ->setName('andorran-taxes')
            ->setDescription('All andorran taxes');

        $taxGroupObjectManager->persist($andorranTaxes);
        $this->addReference('tax-group-andorran', $andorranTaxes);

        $taxGroupObjectManager->flush();
    }
}
