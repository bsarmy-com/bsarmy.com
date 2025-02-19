<?php

// Get all files in current month directory and add to array

// Get current month and year
$full_month = strtolower(date('F')); // october
$month = date('m'); // eg. 10
$year = date('Y'); // 2023

echo "month: $month<br>";
echo "full_month: $full_month<br>";
echo "year: $year<br>";


$dir = __DIR__ . "/schedules/$year/$month/";
echo "dir: $dir<br>";


$files = scandir($dir);

print_r($files);
echo ("<br>");


// Remove the first two elements of the array (.) and (..)
array_shift($files);
array_shift($files);

print_r($files);
echo "<br>";


// Check if there are schedules for the current month in different formats

$format_not_found = [];
$formats_needed = ['jpg', 'png', 'pdf'];

// Check for schedules in each format
foreach ($formats_needed as $format)
{
	// Must be $full_month
	$pattern = "/^liberty_$full_month\w{0,}_$year\.$format$/i";
	$matches = preg_grep($pattern, $files);

	// If there are schedules for the current month in the currently being checked format
	if (!empty($matches))
	{
		echo "Schedule for the current month found in $format format.<br>";

		// Add $format to the array named format_not_found because it was not found
	}
	else
	{
		echo "No schedules for the current month in $format format found.<br>";

		// Add $format to the array named format_not_found
		array_push($format_not_found, $format);
	}
}

// echo count($formats_needed);
// echo count($format_not_found);

// If there are missing formats, then generate them from the existing schedule found
if (count($formats_needed) === 0)
{
	echo "No schedules for the current month found in any format.<br>";

	// If all formats are found
}
elseif (count($format_not_found) === count($formats_needed))
{
	echo "Schedules for the current month found in all formats.<br>";

	// If there are missing formats, then generate them from the existing schedule found
}
else
{

	echo "Schedules for the current month found in at least one format. Generating missing formats...<br>";

	// get the name of the schedule files that were found
	$formats_found = array_diff($formats_needed, $format_not_found);

	echo "Formats found: ";
	print_r($formats_found);
	echo "<br>";
	echo "Formats not found: ";
	print_r($format_not_found);
	echo "<br>";

	foreach ($format_not_found as $format)
	{
		// get the first format found (probably JPG)
		$from_format = $formats_found[0];

		$convert_command = 'convert -quality 100 ' . $dir . 'liberty_' . $full_month . '_' . $year . '.' . $from_format . ' ' . $dir . 'liberty_' . $full_month . '_' . $year . '.' . $format;

		echo "Convert command: $convert_command<br>";

		$status = shell_exec($convert_command);

		if ($status)
		{
			echo "Successfully converted schedule to $format format.<br>";
		}
		else
		{
			echo "Failed to convert schedule to $format format.<br>";
		}
	}
}


// TODO: #10 if there are no schedules for the current month, then email the head of bsarmy.com at support@bsarmy 
// if (count($files)===0) {
//      $to = "support@bsarmy.com";
//      $subject = "No schedules found for the current month";
//      $message = "Dear Head of bsarmy.com,\n\nNo schedules were found for the current month. Please generate the schedules as soon as possible.\n\nBest regards,\nYour Name";
//      $headers = "From: your-email@example.com";

//      mail($to, $subject, $message, $headers);
// }