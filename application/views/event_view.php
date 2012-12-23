	<p>For the most part, ACM events will take place every other week.</p> 
	<p> The ACM Officers are currently in the process of scheduling events
	for the Spring 2012 semester. If you have any ideas for events you'd
	like to see (or even better, events you'd like to coordinate) please 
	<a href="mailto:jimmy.mu AT duke.edu">contact our President</a>, 
	Jimmy Mu.</p>
	<p class="focus">Upcoming Events:</p>
	<table class="eventTable"><tbody>
		<tr class="eventHeader">
            <th>Date</th>
            <th>Name</th>
            <th>Description</th>
            <th>Location</th>
        </tr>
		<?php
		foreach($events as $index => $event) {
			$php_date = strtotime($event->date);
			echo "<tr><th>" . date("M d, Y ga",$php_date) . "</th>";
			echo "<th>" . $event->name . "</th>";
			echo "<th>" . $event->description . "</th>";
			echo "<th>" . $event->location . "</th></tr>";
		}
		?>

		 <tr class="eventRowOdd"><!--begin odd event-->
            <td class="eventCell">Nov 14, 6PM</td>
            <td class="eventCell"><span class="eventName">Entering the Zettabyte Age</span>:
            Come to hear Jeffrey Krone talk about the Zettabyte age and its ramifications in modern society.
        	Jeffrey Krone is the president and co-founder of Zettaset, Inc.<br> 
            For more information, please see the corresponding <a href="https://www.cs.duke.edu/events/?id=00000001401">department event</a>.
            &nbsp;
            </td>
		</tr><!--end event-->
	</tbody></table>
	<p class="focus">Past Events:</p>
	<table class="eventTable"><tbody>
		<tr class="eventHeader">
            <th>Date</th>
            <th>Name</th>
            <th>Description</th>
            <th>Location</th>
        </tr>
        <?php
        foreach($past_events as $index => $event) {
			$php_date = strtotime($event->date);
			echo "<tr><th>" . date("M d, Y ga",$php_date) . "</th>";
			echo "<th>" . $event->name . "</th>";
			echo "<th>" . $event->description . "</th>";
			echo "<th>" . $event->location . "</th></tr>";
		}
		?>
		 <tr class="eventRowEven"><!--begin even event-->
            <td class="eventCell"><!--date-->&nbsp;</td>
            <td class="eventCell"><span class="eventName"><!--description-->
            </td>
		</tr><!--end event-->

	</tbody></table>
