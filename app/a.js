// The root URL for the RESTful services
var rootURL = "http://localhost/Projet-Ecole/web/movies";
var currentVideo;

// Register listeners
$('#search').click(function() {
	GetVideo();
});




function GetVideo() {
	console.log('GetVideo');
	$.ajax({
		type: 'GET',
		url: rootURL,
		dataType: "json", // data type of response
		success: renderList
	});
}


function renderList(data) {
	// JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
	console.log(data[0]);
	console.log(data[0][1]);
		
		$('.list-group-item-heading').append(data[0][1]);
	/*var list = data == null ? [] : (data.Video instanceof Array ? data.Video : [data.Video]);
	console.log(list);
	
	$.each(data[0], function(index, Video) {
		
		$('.list-group-item-heading').append(Video.id);
	});*/
}
