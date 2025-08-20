<?php

declare(strict_types=1);
class Wartung extends IPSModule
{
	public function Create()
	{
		//Never delete this line!
		parent::Create();
	}

	public function Destroy()
	{
		//Never delete this line!
		parent::Destroy();
	}

	public function ApplyChanges()
	{
		//Never delete this line!
		parent::ApplyChanges();
	}

	/**
	 * Die folgenden Funktionen stehen automatisch zur Verfügung, wenn das Modul über die "Module Control" eingefügt wurden.
	 * Die Funktionen werden, mit dem selbst eingerichteten Prefix, in PHP und JSON-RPC wie folgt zur Verfügung gestellt:
	 *
	 * SF_CreateStatusInfo($id);
	 *
	 */
	public function CreateStatusInfo(): void
	{
		echo 'Instanz : ' . IPS_GetName(0) . PHP_EOL;
		echo 'Instanz : ' . IPS_GetName(0) . PHP_EOL;
		echo 'Runlevel: ' . IPS_GetKernelRunlevel() . PHP_EOL;
		echo 'Datum   : ' . date('d.m.Y', IPS_GetKernelDate()) . PHP_EOL;
		echo 'Version : ' . IPS_GetKernelVersion() . PHP_EOL;
		echo 'Revision: ' . IPS_GetKernelRevision() . PHP_EOL;
		echo 'Start   : ' . date('d.m.Y H:i:s', IPS_GetKernelStartTime()) . PHP_EOL;
		echo 'Log-Dir : ' . IPS_GetLogDir() . PHP_EOL;
		echo 'Log-Dir : ' . IPS_GetLogDir() . PHP_EOL;
		echo 'Plattform    : ' . IPS_GetKernelPlatform() . PHP_EOL;
		echo 'Update-Kanal : ' . IPS_GetUpdateChannel() . PHP_EOL;
		//
		echo 'letztes Backup    : ' . IPS_GetLogDir() . PHP_EOL;
		echo 'Backup-Verzeichnis: ' . IPS_GetLogDir() . PHP_EOL;
	}
}