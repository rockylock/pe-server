
<?php
	
	$machineClearance = true; // is user certified to operate machine?
	$ooo = false; // is the machine out of order?
	$maintenance = true; // is the machine undergoing maintenance?
	$machineAvailable = true; // is the machine available to be reserved?


	if ($machineClearance) {
		if ($ooo) {
			echo "This machine's out of order. Check back later.";
		} else {
			if ($maintenance) {
				echo "This machine's undergoing maintenance. Check back later.";
			} else {
				if ($machineAvailable) {
					echo "Would you like to reserve this machine?";
				} else {
					"This machine's not available at this time. Please choose another time slot for your reservation.";
				}	
			}
		}
	} else {
		echo "This account's not cleared to operate this machine. Please check with lab staff.";
	}
		
?>