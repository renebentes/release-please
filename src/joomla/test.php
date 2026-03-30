<?php

/**
 * @package     Joomla.Build
 * @subpackage  Release.Please
 *
 * @author      Rene Bentes Pinto <renebentes@yahoo.com.br>
 * @copyright   Copyright (C) 2026 Rene Bentes Pinto. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 * @link        http://renebentes.github.io
 * @since       __DEPLOY_VERSION__
 */

use Joomla\Test\Version;

$version = new Version();

echo 'Version: ' . $version->getFullVersion();
echo 'Major Version: ' . $version::MAJOR_VERSION;
