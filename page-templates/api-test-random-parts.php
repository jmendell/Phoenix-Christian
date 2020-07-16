<?php 

		// 1. Initialize
		$ch = curl_init();


		// 2. Set options

		//URL to send the request to
		curl_setopt($ch, CURLOPT_URL, 'https://api.crowdriff.com/v2/albums/32991');


		//Return instead of outputting directly
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		//header credentials for api authorization
		$header = array(
			'Accept: application/json',
			'Content-Type: application/json',
			'Authorization: Bearer 0ac2db2f-474a-4919-97d7-d3b1e31ba1c0'
		);

		//Whether to include the header in the output. set to false here
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);


		// 3. Execute the request and fetch the respone. check for errors
		$output = curl_exec($ch);

		if ($output === FALSE) {
			echo 'cURL Error: ' . curl_error($ch);
		}

		// 4. Close and free up the curl handle
		curl_close($ch);

		// 5. Display raw output
		$result = json_decode($output, true); //Array
		$result2 = json_encode($result, true); //String

		//Testing if variables can be used to traverse through array. they can.
		$albumId = '32991';
		$albumLabel = 'label';

		
	 	$test_info = $result['data'][$albumId];

	 	// $test_src = $image_info['url'];

	 	echo '<pre>';
		 print_r($result);
	 	echo '</pre>';

	 	?>

	 <script>
	 	
		var resultNew = '<?php echo $result; ?>';

		var resultParse = jQuery.parseJSON(resultNew);
		console.log(resultParse);

	 </script>


	 <?php 

		$someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

		  // Convert JSON string to Array
		  $someArray = json_decode($someJSON, true);
		  print_r($someArray);        // Dump all data of the Array
		  echo $someArray[0]["name"]; // Access Array data

		  // Convert JSON string to Object
		  $someObject = json_decode($someJSON);
		  print_r($someObject);      // Dump all data of the Object
		  echo $someObject[0]->name; // Access Object data

		  // Loop through Array
		  $someArray = $someArray; // Replace ... with your PHP Array
		  foreach ($someArray as $key => $value) {
		    echo $value["name"] . ", " . $value["gender"] . "<br>";
		  }

		  // Loop through Object
		  $someObject = $someObject; // Replace ... with your PHP Object
		  foreach($someObject as $key => $value) {
		    echo $value->name . ", " . $value->gender . "<br>";
		  }

	?>