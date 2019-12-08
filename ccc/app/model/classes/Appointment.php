<?php

class Appointment {
	public $id;
	public $counselor_id;
	public $student_id;
	public $date_time;
	public $notes;
	const DB_TABLE = 'appointments';

	public static function loadAllAppointments() {
		$appointments = array();

		// Create and run SQL Query.
		$query = "SELECT id FROM ".self::DB_TABLE;
		$result = $GLOBALS['conn']->query($query);

		// Load all rows from table.
		if ($result->num_rows) {
			while($row = $result->fetch_assoc()) {
				$a = self::loadByID($row['id']);
				$appointments[$row['id']] = $a;
			}
		} else {
			echo "Error fetching reserved appointments from the server.";
		}

		return $appointments;
	}

	/* --- Load single appointment from database. --- */
	public static function loadByID($postID) {
		// Create SQL Query.
		$query = sprintf("SELECT * FROM %s WHERE id = %d", self::DB_TABLE, $GLOBALS['conn']->real_escape_string($postID));

		// Run query.
		$result = $GLOBALS['conn']->query($query);

		// If appt with ID is found, return appt.
		if ($result->num_rows) {
			$row = $result->fetch_assoc();
			$a = new Appointment();
			$a->id = $row['id'];
			$a->counselor_id = $row['counselor_id'];
			$a->student_id = $row['student_id'];
			$a->date_time = $row['date_time'];
			$a->notes = $row['notes'];

			return $a;
		}
		else {
			return null;
		}
	}

	/* --- Add new appointment to database. --- */
	public static function insertAppointment($appointment) {
		// Create SQL Query.
		$query = sprintf("INSERT INTO %s (counselor_id, student_id, date_time, notes) VALUES ('%s', '%s', '%s', '%s') ",
			self::DB_TABLE,
			$appointment->counselor_id,
			$GLOBALS['conn']->real_escape_string($appointment->student_id),
			$appointment->date_time,
			$GLOBALS['conn']->real_escape_string($appointment->notes)
		);

		// Run query.
		$result = $GLOBALS['conn']->query($query);

		// If completed successfully, return added appointment.
		if ($result) {
			$appointmentID = $GLOBALS['conn']->insert_id;
			$a = self::loadByID($appointmentID);
			return $a;
		} 
		else {
			return null;
		}
	}
}