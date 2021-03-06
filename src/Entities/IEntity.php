<?php declare(strict_types = 1);

/**
 * IEntity.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MqttPlugin!
 * @subpackage     Entities
 * @since          0.1.0
 *
 * @date           05.03.20
 */

namespace FastyBird\MqttPlugin\Entities;

/**
 * Base data entity interface
 *
 * @package        FastyBird:MqttPlugin!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IEntity
{

	/**
	 * @return string
	 */
	public function getDevice(): string;

	/**
	 * @param string|null $parent
	 *
	 * @return void
	 */
	public function setParent(?string $parent): void;

	/**
	 * @return string|null
	 */
	public function getParent(): ?string;

	/**
	 * @param bool $retained
	 */
	public function setRetained(bool $retained): void;

	/**
	 * @return bool
	 */
	public function isRetained(): bool;

	/**
	 * @return mixed[]
	 */
	public function toArray(): array;

}
