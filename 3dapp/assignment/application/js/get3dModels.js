//adapted from example code 'sierraleoneheritage.org'

$(document).ready(function() {
	
	//Intilise the mobile web page on load
	var objID = 0;
	update(objID);
	
	//Update HTML page with new cultural object data from the AJAX request
	$( "#fantaX3d" ).click(function() {
		update(objID=0); // Click in object0 and does update
	});
	$( "#spriteX3d" ).click(function() {
		update(objID=1);
	});
	$( "#oasisX3d" ).click(function() {
		update(objID=2);
	});
	
	function update(objID) {	
	
 		//Read the JSON file as an AJAX request 
		$.getJSON('../index.php/getModelsJSON', function(jsonObj) {
		console.log(jsonObj);

			$('#modelTitle').html('<h1 style="display:inline">' + jsonObj.Model_3D[objID].modelTitle + '</h1>');
			$('#name').html(jsonObj.Model_3D[objID].name);
			$('#info').html('<p style="display:inline">' + jsonObj.Model_3D[objID].info + '</p>');
			$('#ingredients').html('<p style="display:inline">' + jsonObj.Model_3D[objID].ingredients + '</p>');
			

			$('#gallery-img0').attr('src', jsonObj.Model_3D[objID].imageUrl0);
			$('#gallery-img1').attr('src', jsonObj.Model_3D[objID].imageUrl1);
			$('#gallery-img2').attr('src', jsonObj.Model_3D[objID].imageUrl2);
			$('#gallery-img3').attr('src', jsonObj.Model_3D[objID].imageUrl3);
			$('#gallery-img4').attr('src', jsonObj.Model_3D[objID].imageUrl4);

			//And grab any 3D media objects
			//Every time the user clicks on a X3DOM object
			var file = jsonObj.Model_3D[objID].x3dUrl;
			//Replace the x3d file in the context (if not already loaded)
            if(file != $('#x3dUrl').attr('url'))
            $('#x3dUrl').attr('url', file);

				
		});
		
	}
	
});