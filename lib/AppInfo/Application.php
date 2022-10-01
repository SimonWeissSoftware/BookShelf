<?php
declare(strict_types=1);
// SPDX-FileCopyrightText: Simon Weiß <sim.cdf@web.de>
// SPDX-License-Identifier: AGPL-3.0-or-later

namespace OCA\BookShelf\AppInfo;

use OCP\AppFramework\App;

class Application extends App {
	public const APP_ID = 'bookshelf';

	public function __construct() {
		parent::__construct(self::APP_ID);
	}
}
