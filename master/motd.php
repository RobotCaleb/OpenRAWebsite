<?
	$inVer = substr($_GET["v"], strpos($_GET["v"], "-")+1);
	$verFile = "VERSION";

		if (file_exists($verFile))
				{
							$handle = fopen($verFile, 'r');

									$version = fread($handle, filesize($verFile));
									fclose($handle);
										}

			$version = substr($version, strpos($version, "-")+1);

			$output = "";

				if ($inVer < $version)
						{
									$output = "New version " . $version . " available. Please go to http://open-ra.org to upgrade";
										}
					else
							{
										$output = "Welcome to OpenRA. Read news and more at http://reddit.com/r/openra.";
											}
				$output = strlen($output) . "|" . $output;

				echo $output;
?>
