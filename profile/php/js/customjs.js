$(document).ready(function(){
	var year = new Date();
	year = year.getFullYear();
	$("#year").text(year);
	
	var url = window.location.pathname;
var filename = url.substring(url.lastIndexOf('/')+1);
$('li a[href^="' + filename + '"]').addClass('active');


//index
$( "#adminlogin" ).validate({
  rules: {
	  aid: {
      required: true
    },
	apass: {
      required: true
    }
  },
    messages: {
        aid: " * Kindly Insert Admin Id",
		apass: "* Kindly Insert Password",
    }	
});	
$( "#userlogin" ).validate({
  rules: {
	  uid: {
      required: true
    },
	upass: {
      required: true
    }
  },
    messages: {
        uid: " * Kindly Insert User Id",
		upass: "* Kindly Insert Password",
    }	
});	
$( "#userreg" ).validate({
  rules: {
	  name: {
      required: true
    },
	email: {
      required: true
    },
	number: {
      required: true
    },
	age: {
      required: true
    },
	address: {
      required: true
    },
	city: {
      required: true
    },
	sqft: {
      required: true
    },
	password: {
      required: true
    },
	salary: {
      required: true
    }
  },
    messages: {
        name: " * Kindly Insert Name",
		email: "* Kindly Insert Email Id",
		number: "* Kindly Insert Contact Number",
		age: "* Kindly Insert Age",
		address: "* Kindly Insert Address",
		city: "* Kindly Insert City",
		sqft: "* Kindly Insert Square Feet",
		password: "* Kindly Insert Password",
		salary: "* Kindly Insert Salary",
    }	
});	
});
$(document).on('submit', '#adminlogin', function(event){
	event.preventDefault();
	$.ajax({
		url:"indexResponse.php",
		method:"POST",
		data:new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success:function(data)
		{
			if(data == "fail")
			{
				swal("You are not authorized..!!");
			}
			else if(data == "success")
			{
				window.location.href="ManageProp.php";
			}
			else
			{
				swal(data);
			}
		}
	});
});
$(document).on('submit', '#userreg', function(event){
	event.preventDefault();
	$.ajax({
		url:"indexResponse.php",
		method:"POST",
		data:new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success:function(data)
		{
			if(data == "fail")
			{
				swal("Already Registered With this Id..!!");
			}
			else if(data == "success")
			{
				swal({
					text: "Successfully Registered..!!",
					type: "success"
				}).then(function() {
					window.location.href="index.php";
				});
			}
			else
			{
				swal(data);
			}
		}
	});
});
$(document).on('submit', '#userlogin', function(event){
	event.preventDefault();
	$.ajax({
		url:"indexResponse.php",
		method:"POST",
		data:new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success:function(data)
		{
			if(data == "fail")
			{
				swal("You are not authorized..!!");
			}
			else if(data == "success")
			{
				window.location.href="MyDetails.php";
			}
			else
			{
				swal(data);
			}
		}
	});
});

//Add property data
function seller_image() {
	var ext = $("#simage")[0].files[0].name;
	ext = ext.replace(/^.*\./, '').toLowerCase();
	if (ext == "jpg" || ext == "png" || ext == "jpeg") {
		$('#displaysimage').attr('src', URL.createObjectURL(event.target.files[0]));
	}
	else {
		$('#displaysimage').attr('src', 'assets/img/blank_user.jpg');
		document.getElementById("simage").value = "";
		alert("Only jpg, png, jpeg Extensions are allowed..!!");
	}
}
function preview_image() {
	var total_file = document.getElementById("pimage").files.length;
var extensionerror = 0;
var img = "";
var img = "<div class='container'><div class='row'>";
for (var i = 0; i < total_file; i++) {
	var ext = $("#pimage")[0].files[i].name;
	ext = ext.replace(/^.*\./, '');
	if (ext.toLowerCase() == "jpg" || ext.toLowerCase() == "png" || ext.toLowerCase() == "jpeg") {
		img += "<div class='col-md-3'><a href='" + URL.createObjectURL(event.target.files[i]) + "' data-toggle='lightbox' data-gallery='gallery'><div class='view overlay zoom'><img src='" + URL.createObjectURL(event.target.files[i]) + "' class='img-fluid img-thumbnail'></div></a></div>";
		extensionerror = 2;
	}
	else {
		extensionerror = 1;
	}
}
img += "</div></div>";
if (extensionerror == 1) {
	$('#ImagePanel').html('');
	document.getElementById("pimage").value = "";
	alert("Only jpg, png, jpeg Extensions are allowed..!!");
}
else if (extensionerror == 2){
	$('#ImagePanel').append(img);
	}
else
{
	$('#ImagePanel').html('');
}
}
$(document).ready(function(){
	$( "#propdetail" ).validate({
	  rules: {
		sqft: {
		  required: true
		},
		floor: {
		  required: true
		},
		washrooms: {
		  required: true
		},
		address: {
		  required: true
		},
		price: {
		  required: true
		},
		furnishing: {
		  required: true
		},
		overlooking: {
		  required: true
		},
		facing: {
		  required: true
		},
		status: {
		  required: true
		},
		pimage: {
		  required: true
		},
		simage: {
		  required: true
		},
		sname: {
		  required: true
		},
		scont: {
		  required: true
		},
		semail: {
		  required: true
		}
	  },
		messages: {
			sqft: "* Kindly Insert Space Sq. Ft.",
			floor: "* Kindly Insert Floor Detail",
			washrooms: "* Kindly Insert Washrooms",
			address: "* Kindly Insert Address",
			price: "* Kindly Insert Price",
			furnishing: "* Kindly Insert Furnishing Details",
			overlooking: "* Kindly Insert Overlooking Details",
			facing: "* Kindly Insert Facing",
			status: "* Kindly Insert Status",
			pimage: "* Kindly Insert Property Image",
			simage: "* Kindly Insert Seller Image",
			sname: "* Kindly Insert Seller Name",
			scont: "* Kindly Insert Seller Contact Number",
			semail: "* Kindly Insert Seller Email Id",
		}	
	});	
});
$(document).on('submit', '#propdetail', function(event){
	event.preventDefault();
	$.ajax({
		url:"ManagePropResponse.php",
		method:"POST",
		data:new FormData(this),
		contentType: false,
		cache: false,
		processData:false,
		success:function(data)
		{
			if(data == "success")
			{
				window.location.href="ManageProp.php";
			}
			else
			{
				swal(data);
			}
		}
	});
});