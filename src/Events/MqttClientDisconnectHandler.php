<?php declare(strict_types = 1);

/**
 * MqttClientDisconnectHandler.php
 *
 * @license        More in license.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MqttPlugin!
 * @subpackage     Events
 * @since          0.1.0
 *
 * @date           16.04.20
 */

namespace FastyBird\MqttPlugin\Events;

use BinSoul\Net\Mqtt;
use IPub\MQTTClient;
use Nette;
use Psr\Log;

/**
 * MQTT client disconnected event handler
 *
 * @package         FastyBird:MqttPlugin!
 * @subpackage      Events
 *
 * @author          Adam Kadlec <adam.kadlec@fastybird.com>
 */
class MqttClientDisconnectHandler
{

	use Nette\SmartObject;

	/** @var Log\LoggerInterface */
	private Log\LoggerInterface $logger;

	public function __construct(
		?Log\LoggerInterface $logger = null
	) {
		$this->logger = $logger ?? new Log\NullLogger();
	}

	/**
	 * @param Mqtt\Connection $connection
	 * @param MQTTClient\Client\IClient $client
	 *
	 * @return void
	 */
	public function __invoke(Mqtt\Connection $connection, MQTTClient\Client\IClient $client): void
	{
		// Broker disconnected
		$this->logger->info(sprintf('[FB:PLUGIN:MQTT] Disconnected from MQTT broker with client id %s', $connection->getClientID()), [
			'server'      => [
				'uri'  => $client->getUri(),
				'port' => $client->getPort(),
			],
			'credentials' => [
				'username' => $connection->getUsername(),
				'clientId' => $connection->getClientID(),
			],
		]);
	}

}
