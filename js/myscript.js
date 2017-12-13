/**
	file:	myscript.js
	desc:	Handles the login communication between loginform and login.php
			Displays the results from database in companies page
**/
$(document).ready(function(){
	
	loadCompaniesDefault();

	$("#compTable").click(function(){
		loadCompaniesTable();
	});
	$("#compSearch").keyup(function(){
		searchCompanies();
	});
	loadStoriesDefault();
	
	$("#searchstory").keyup(function(){
		searchStories();
	});
	
	$("select").change(function(){
		searchStories();
	});

	loadActivitiesDefault(); 

	$("#actTable").click(function(){
		loadActivitiesTable();
	});
	$("#actSearch").keyup(function(){
		searchActivities();
	});

	$(".list").hide();
	$("#comp").click(function(){
		$("#actlist").hide();
		$("#complist").show();
	});
	$("#act").click(function(){
		$("#complist").hide();
		$("#actlist").show();
	});

	 $('#stories').on('click','.readmore', function(){
		 $.getJSON( "selectedStory.php?storyID="+$(this).attr('data-storyID'), function( data ) {
		var resultlist='';
		$.each( data, function( key, story ) {
			$("#storyTitle").html(story.storyTitle);
			$("#storyDescription").html(story.storyDescription);
			$("#storyLink").html('<iframe width="550" height="400" src="'+story.storyLink+'"></iframe>');
		});		
				
		});
	}); 

	$("#formsignin").submit(function(){
		var msg;
		$("#logininfo").html('<p class="alert alert-info"> Checking login...</p>');
		$.post("login.php",{
			email: $("#email").val(),
			password:$("#password").val()
		},function(data){
			//parse the JSON-data to variable
			var status=JSON.parse(data,function(key,value){
				return value;
			});
			$("#logininfo").html('');
			if(status.Status=='OK'){
				//Tell that login ok and redirect to adminsite
				msg='<p class="alert alert-success">Login ok</p>';
				$("#logininfo").html(msg);
				var url="./admin/index.php";
				setTimeout(function(){
					$(location).attr("href",url);
				},2000); //2000ms = 2 seconds
			}else{
				$("#logininfo").html('<p class="alert alert-danger">'+status.Status+'</p>');
				$("#email").val('');
				$("#password").val('');
				setTimeout(function(){
					$("#logininfo").html('');
				},2000); //2000ms = 2 seconds
			}
		});
		return false; //no reload on the page
	});

	$('#login-content').hide();
    $('#login-trigger').click(function(){
        $(this).next('#login-content').slideToggle();
        $(this).toggleClass('active');					
        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
		});
		

	myFunction();
});


function loadCompaniesDefault(){
	$.getJSON( "companiesDefault.php", function( data ) {
	var resultlist='';
	$.each( data, function( key, company ) {
		resultlist=resultlist+'<tr><td>'+company.companyID+'</td><td>'+company.companyName+'</td>';
		resultlist=resultlist+'<td>'+company.street+', '+company.postnr+' '+company.city+'</td>';
		resultlist=resultlist+'<td>'+company.description+'</td><td><a href="'+company.website+'" target="_new">'+company.website+'</a></td>';
		resultlist=resultlist+'<td><a href="'+company.facebook+'" target="_new">'+company.facebook+'</a></td></tr>';
	});
	$("#compResults").html(resultlist);
 });
}
function searchCompanies(){
	var searchword=$("#compSearch").val();
	$.getJSON("companySearch.php?search="+searchword,function(data){
		var resultlist='';
		$.each( data, function( key, company ) {
			resultlist=resultlist+'<tr><td>'+company.companyID+'</td><td>'+company.companyName+'</td>';
			resultlist=resultlist+'<td>'+company.street+', '+company.postnr+' '+company.city+'</td>';
			resultlist=resultlist+'<td>'+company.description+'</td><td><a href="'+company.website+'" target="_new">'+company.website+'</a></td>';
			resultlist=resultlist+'<td><a href="'+company.facebook+'" target="_new">'+company.facebook+'</a></td></tr>';
		});
	$("#compResults").html(resultlist);
	});
}

function loadActivitiesDefault(){
	   $.getJSON( "activitiesDefault.php", function( data ) {
	   var resultlist='';
	   $.each( data, function( key, activity ) {
		   resultlist=resultlist+'<tr><td>'+activity.activityID+'</td><td>'+activity.activityName+'</td>';
		   resultlist=resultlist+'<td>'+activity.activityKeyword+'</td><td>'+activity.activityDescription+'</td></tr>';
	   });
	   $("#actResults").html(resultlist);
	});
}
function searchActivities(){
	   var searchword=$("#actSearch").val();
	   $.getJSON("activitiesSearch.php?search="+searchword,function(data){
		   var resultlist='';
		   $.each( data, function( key, activity ) {
			resultlist=resultlist+'<tr><td>'+activity.activityID+'</td><td>'+activity.activityName+'</td>';
			resultlist=resultlist+'<td>'+activity.activityKeyword+'</td><td>'+activity.activityDescription+'</td></tr>';
		   });
	   $("#actResults").html(resultlist);
	   });
}

function loadStoriesDefault(){
	$.getJSON( "storiesDefault.php", function( data ) {
	var resultlist='';
	$.each( data, function( key, story ) {
		resultlist=resultlist+'<tr><td>'+story.storyTitle+'</td><td>'+story.storyType+'</td>';
		resultlist=resultlist+'<td>'+story.storyKeywords+'</td>';
		resultlist=resultlist+'<td><a href="'+story.storyLink+'" target="_new">To the story</a></td>';
		resultlist=resultlist+'<td><button type="button" class="readmore btn" data-toggle="modal" data-target="#showStory" ';
		resultlist=resultlist+'data-storyID="'+story.storyID+'">Read more</button></td>';
		resultlist=resultlist+'</tr>';	
	});
	$("#stories").html(resultlist);
 });
}

function searchStories(){
	var type=$("#type").val();
	var search=$("#searchstory").val();
	$.getJSON( "storiesDefault.php?search="+search+"&type="+type, function( data ) {
	var resultlist='';
	$.each( data, function( key, story ) {
		resultlist=resultlist+'<tr><td>'+story.storyTitle+'</td><td>'+story.storyType+'</td>';
		resultlist=resultlist+'<td>'+story.storyKeywords+'</td>';
		resultlist=resultlist+'<td><a href="'+story.storyLink+'" target="_new">To the story</a></td>';
		resultlist=resultlist+'<td><button type="button" class="readmore btn" data-toggle="modal" data-target="#showStory" ';
		resultlist=resultlist+'data-storyID="'+story.storyID+'">Read more</button></td>';
		resultlist=resultlist+'</tr>';	
	});
	$("#stories").html(resultlist);
 });
};

function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
};