<?php declare(strict_types = 1);

/**
 * InvalidStateException.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MqttPlugin!
 * @subpackage     Exceptions
 * @since          0.1.0
 *
 * @date           23.02.20
 */

namespace FastyBird\MqttPlugin\Exceptions;

use RuntimeException;

class InvalidStateException extends RuntimeException implements IException
{

}
