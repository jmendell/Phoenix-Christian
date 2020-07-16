<?php
/*
Template Name: API Test
*/
get_header(); ?>

<style>
	
	.content{
		margin:300px 50px 500px 50px;
	}

</style>

<div class="content">
	
	<?php 


		// 1. Initialize
		$ch = curl_init();


		// 2. Set options

		//URL to send the request to
		curl_setopt($ch, CURLOPT_URL, 'https://api.crowdriff.com/v2/apps/17569');


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



		// $keys = array_keys($result);

		// for ($i=0; $i < count($result); $i++) { 
		// 	echo $keys[$i] . "{<br>";

		// 	foreach ($result[$keys[$i]] as $key => $value) {
		// 		echo $key . " : " . $value . "<br>";
		// 	}
		// 	echo "}<br>";
		// }



	?>

	<!-- <img src="<?php echo $image_src; ?>" alt="spring training image"> -->

	<!-- <script>
		
		var phpResult = '<?php echo $myJSON ?>';
		// var obj = JSON.parse(phpResult);

		console.log(obj);


	</script> -->


</div>


<?php get_footer();