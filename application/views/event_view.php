<?php
echo "<br>" . $events[0]->name . "<br> ok <br>";

foreach ($events as $index => $event) {
	echo  $index . " " . $event->name . "\n";
}

?>



	<!--Begin Page Content-->
	<p>For the most part, ACM events will take place every other week.</p> 
	<p> The ACM Officers are currently in the process of scheduling events
	for the Spring 2012 semester. If you have any ideas for events you'd
	like to see (or even better, events you'd like to coordinate) please 
	<a href="mailto:daphne.ezer AT gmail.com">contact our President</a>, 
	Daphne Ezer.</p>
	<p class="focus">Upcoming Events:</p>
	<table class="eventTable"><tbody>
		<tr class="eventHeader">
            <th class="eventDateColumn">Date</th>
            <th>Event Description</th>
		</tr>
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
			<th class="eventDateColumn">Date</th>
			<th>Event Description</th>
		</tr>
		 <tr class="eventRowEven"><!--begin even event-->
            <td class="eventCell"><!--date-->&nbsp;</td>
            <td class="eventCell"><span class="eventName"><!--description-->
            </td>
		</tr><!--end event-->

	</tbody></table>
            <!--End Page Content-->  

