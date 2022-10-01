<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Simon Weiß <sim.cdf@web.de>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\BookShelf\Tests\Unit\Controller;

use OCA\BookShelf\Controller\NoteApiController;

class NoteApiControllerTest extends NoteControllerTest {
	public function setUp(): void {
		parent::setUp();
		$this->controller = new NoteApiController($this->request, $this->service, $this->userId);
	}
}
