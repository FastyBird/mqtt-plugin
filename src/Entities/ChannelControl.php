<?php declare(strict_types = 1);

/**
 * Control.php
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
 * Channel control attribute
 *
 * @package        FastyBird:MqttPlugin!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ChannelControl extends Control
{

	public const ALLOWED_CONTROLS = [
		self::CONFIG,
	];

	/** @var string */
	private string $channel;

	public function __construct(
		string $device,
		string $channel,
		string $control,
		?string $parent = null
	) {
		parent::__construct($device, $control, $parent);

		$this->channel = $channel;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge([
			'channel' => $this->getChannel(),
		], parent::toArray());
	}

	/**
	 * @return string
	 */
	public function getChannel(): string
	{
		return $this->channel;
	}

	/**
	 * {@inheritDoc}
	 */
	protected function getAllowedControls(): array
	{
		return self::ALLOWED_CONTROLS;
	}

}
