<?php

include 'Page.php';
$page = new Page();
$page->title = 'List';
include 'header.php';

// Add code here that will load the CSV file with the tasks in it
// and will print the tasks in a table
// The following is an example of how the table will be printed 
// between the header and the footer
echo '<table class="table">';  // this is styled as a bootstrap table
echo '    <thead>';
echo '      <tr>';
echo '        <th>Task</th>';
echo '        <th>Description</th>';
echo '        <th>Completed(Y/N)</th>';
echo '        <th>Date Completed</th>';
echo '      </tr>';
echo '    </thead>';
echo '    <tbody>';
echo '      <tr>';
echo '        <td>The Task</td>';
echo '        <td>The Task Description</td>';
echo '        <td>Y</td>';
echo '        <td>6/1/2018</td>';
echo '      </tr>';
echo '    </tbody>';
echo '</table>';


include 'footer.php';

