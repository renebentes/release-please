<?php

/**
 * Release Please Test
 *
 * @copyright  (C) 2026 Rene B. Pinto. <renebentes@yahoo.com.br>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Test
/**
 * Version information class.
 *
 * @since  1.8.1
 */
final class Version
{
    /**
     * Major release version.
     *
     * @var    integer
     * @since  1.8.1
     */
    public const MAJOR_VERSION = 2;

    /**
     * Minor release version.
     *
     * @var    integer
     * @since  1.8.1
     */
    public const MINOR_VERSION = 0;

    /**
     * Patch release version.
     *
     * @var    integer
     * @since  1.8.1
     */
    public const PATCH_VERSION = 0;

    /**
     * Extra release version info.
     *
     * This constant when not empty adds an additional identifier to the version string to reflect the development state.
     * For example, for 1.0.0 when this is set to 'dev' the version string will be `1.0.0-dev`.
     *
     * @var    string
     * @since  1.8.1
     */
    public const EXTRA_VERSION = '';

    /**
     * Development status.
     *
     * @var    string
     * @since  1.8.1
     */
    public const DEV_STATUS = 'Stable';

    /**
     * Release date.
     *
     * @var    string
     * @since  1.8.1
     */
    public const RELEASE_DATE = '31-August-2026';

    /**
     * Release time.
     *
     * @var    string
     * @since  1.8.1
     */
    public const RELEASE_TIME = '18:42';

    /**
     * Release timezone.
     *
     * @var    string
     * @since  1.8.1
     */
    public const RELEASE_TIMEZONE = 'UTC';

    public function getFullVersion(): string
    {
        return self::MAJOR_VERSION . '.' . self::MINOR_VERSION
            . '.' . self::PATCH_VERSION . '-' . self::EXTRA_VERSION
            . self::DEV_STATUS . ' ' . self::RELEASE_DATE . ' '
            . self::RELEASE_TIME . ' ' . self::RELEASE_TIMEZONE;
    }
}
