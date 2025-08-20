<?php
/**
 * 
 */
declare(strict_types=1);
class Backup extends IPSModule
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
	 * SF_CreateBackup($id);
	 *
	 */
	public function CreateBackup(): void
	{
		echo "Funktion ist noch nicht implementiert.";
	}
}

/**
 * TODO:
 * Log-Eintrag für Wartungslog aktivierbar/deaktivierbar,
 * ggf. Instanz des Wartungslogs auswählen, besser automatisch suchen
 */