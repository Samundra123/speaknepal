
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 

	<h2>Credit</h2>
	<h3>core team</h3>
	<p id="demo"></p>
	<p id="credit"></p>


	<script>
	
		var text = [
						{"name":"Samundra Sharma","email":"sspandit21@gmail.com","phone":"9841857695"},
						{"name":"Waters Sharma","email":"waters@gmail.com","phone":"9841857695"},
						{"name":"Samundra Sharma","email":"sspandit21@gmail.com","phone":"9841857695"}
						];

		

		document.getElementById("demo").innerHTML =
		text[1].name + "<br>" +
		text[1].email + "<br>" +
		text[1].phone;
	</script>
	
	<script>
		var xmlhttp = new XMLHttpRequest();
		var url = "<?php echo base_url(''); ?>others/json/data.txt";

		xmlhttp.onreadystatechange = function() {
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var myArr = JSON.parse(xmlhttp.responseText);
				myFunction(myArr);
			}
		};
		xmlhttp.open("GET", url, true);
		xmlhttp.send();

		function myFunction(arr) {
			var out = "";
			var i;
			for(i = 0; i < arr.length; i++) {
				out +=   arr[i].name + '<br>'+ arr[i].email  + + '<br>'+ arr[i].email  +'<br>'+ '<br>'+ '<br>'+ '<br>';
			}
			document.getElementById("credit").innerHTML = out;
		}
	</script>
	
	

</div><!-- conten Wrapper closes -->


