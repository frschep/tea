<?php
namespace OliverKlee\Tea\Tests;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

/**
 * Test case.
 *
 * @author Oliver Klee <typo3-coding@oliverklee.de>
 */
class TestimonialRepositoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \OliverKlee\Tea\Domain\Model\Testimonial
	 */
	protected $subject;

	/**
	 * @var \TYPO3\CMS\Extbase\Object\ObjectManagerInterface|\PHPUnit_Framework_MockObject_MockObject
	 */
	protected $objectManager = NULL;

	protected function setUp() {
		$this->objectManager = $this->getMock('TYPO3\CMS\Extbase\Object\ObjectManagerInterface');

		$this->subject = new \OliverKlee\Tea\Domain\Repository\TestimonialRepository($this->objectManager);
	}

	protected function tearDown() {
		unset($this->subject, $this->objectManager);
	}

	/**
	 * @test
	 * @return void
	 */
	public function canBeInstantiated() {
		$this->assertNotNull(
			$this->subject
		);
	}
}