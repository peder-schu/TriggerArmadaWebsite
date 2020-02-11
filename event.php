<?php

// Event constructor
class Event {
	public $name;
	public $date;
	public $price;
	public $poster_lk;
	public $event_lk;
	public $ticket_lk;
	function Event($iname, $idate, $iprice, $iposter_lk, $ievent_lk, $iticket_lk) {
		$this->name = $iname;
		$this->date = $idate;
		$this->poster_lk = $iposter_lk;
		$this->event_lk = $ievent_lk;
		$this->price = $iprice;
		$this->ticket_lk = $iticket_lk;	
	}

	function display_event() {
		return "<a href=\"" . $this->event_lk . "\"><img alt=\"" . $this->name . "\" src=\"" . $this->poster_lk . "\" width=\"100%\" height=\"auto\"><h2>" . $this->name . "</h2></a>";	
	}
}

?>