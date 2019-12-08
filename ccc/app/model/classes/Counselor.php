<?php

class Counselor {
	public $id;
	public $name;
	public $availableTimes;
	const DB_TABLE = 'counselors';

	public static function loadAllCounselors() {
		$counselors = array();

		// Create and run SQL Query
		$query = "SELECT id FROM ".self::DB_TABLE;
		$result = $GLOBALS['conn']->query($query);

		// Load all rows from table.
		if ($result->num_rows) {
			while ($row = $result->fetch_assoc()) {
				$c = self::loadById($row['id']);
				$counselors[$row['id']] = $c;
			}
		}
		else {
			echo "Error fetching list of counselors from the server.";
		}

		return $counselors;
	}

	/* -- Load a single counselor from the database. --- */
	public static function loadById($counselorID) {
		// Create SQL Query.
		$query = sprintf("SELECT * FROM %s WHERE id = %d", self::DB_TABLE, $GLOBALS['conn']->real_escape_string($counselorID));

		// Run query.
		$result = $GLOBALS['conn']->query($query);

		// If counselor with ID is found, return counselor.
		if ($result->num_rows) {
			$row = $result->fetch_assoc();
			$c = new Counselor();
			$c->id = $row['id'];
			$c->name = $row['name'];
			$c->availableTimes = $row['available'];

			return $c;
		}
		else {
			return null;
		}
	}
}