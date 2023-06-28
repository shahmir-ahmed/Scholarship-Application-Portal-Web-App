<!DOCTYPE html>
<html>
<head>
	<title>Form Data Storage and Display</title>
</head>
<body>
	<h1>Form Data Storage and Display</h1>
	<form method="POST" action="">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="phone">Phone number</label>
          <input type="tel" class="form-control" id="phone" name="phone">
        </div>
        <button type="button" onclick="saveDataInTable()">Save</button>
        <br> <br>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
	
	<h2>Saved Data:</h2>
	<table id="data-table">
		<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Phone</th>
		</tr>
	</table>
      
	
	<script>
        // Store form data in an array
        var formData = [];

        function saveDataInTable(){
            // Get form values
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;

            // Add values to formData array
            formData.push([name, email, phone]);

            // Display data in table
            var table = document.getElementById("data-table");
            var row = table.insertRow();
            var nameCell = row.insertCell(0);
            var emailCell = row.insertCell(1);
            var phoneCell = row.insertCell(2);
            nameCell.innerHTML = name;
            emailCell.innerHTML = email;
            phoneCell.innerHTML = phone;
        }

        // function sendData() {
        //     // Send form data to Laravel controller
        //     var xhr = new XMLHttpRequest();
        //     xhr.onreadystatechange = function() {
        //         if (this.readyState === 4 && this.status === 200) {
        //             // Process response
        //             var response = JSON.parse(this.responseText);
        //             if (response.success) {
        //                 // Clear formData array and table
        //                 formData = [];
        //                 var table = document.getElementById("data-table");
        //                 for (var i = table.rows.length - 1; i > 0; i--) {
        //                     table.deleteRow(i);
        //                 }
        //             }
        //         }
        //     };
        //     xhr.open('POST', '/form');
        //     xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        //     xhr.send('formData=' + JSON.stringify(formData));
        // }



    </script>
</body>
</html>
