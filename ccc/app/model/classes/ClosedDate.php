<?php

class ClosedDate {
	public $date;
	const DB_TABLE = 'closed_dates';

	public static function loadAllDates() {
		$dates = array();

		// Create and run SQL Query.
		$query = "SELECT date FROM ".self::DB_TABLE;
		$result = $GLOBALS['conn']->query($query);

		// Load all rows from table.
		if ($result->num_rows) {
			while($row = $result->fetch_assoc()) {
				$d = new ClosedDate();
				$d->date = $row['date'];
				array_push($dates, $d);
			}
		} else {
			echo "Error fetching dates when the university is closed from the server.";
		}

		return $dates;
	}
}