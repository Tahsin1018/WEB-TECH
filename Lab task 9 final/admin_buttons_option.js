function showUserDetails () {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_user.php? operation=detail", true);
	xhr.send();
}

}
function admin_search_client(typed_name) {
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function() {
		if (xhr.readyState == 4 && xhr.status == 200) {
			document.getElementById("data").innerHTML = xhr.responseText;
		}
	}
	xhr.open("GET", "admin_search_client.php? username="+typed_name.value, true);
	xhr.send();
}

}

                    /*<div id="fill-table">
					<tr>
						<td> First name: </td>
						<td> <input type="text" id="fname" name="fname"> </td>
						<td> <span id="err_fname"></span> </td>
					</tr>
					<tr>
						<td> Last name: </b></td>
						<td> <input type="text" id="lname" name="lname"> </td>
						<td> <span id="err_lname"></span> </td>
					</tr>
					<tr>
						<td> Username: </b></td>
						<td> <input type="text" id="uname" name="uname"> </td>
						<td> <span id="err_uname"></span> </td>
					</tr>
					<tr>
						<td> Email: </b></td>
						<td> <input type="text" id="email" name="email"> </td>
						<td> <span id="err_email"></span> </td>
					</tr>
					<tr>
						<td> Password: </b></td>
						<td> <input type="Password" id="pass" name="pass"> </td>
						<td> <span id="err_pass"></span> </td>
					</tr>
					<tr>
						<td> Confirm Password: </b></td>
						<td> <input type="Password" id="cpass"> </td>
						<td> <span id="err_cpass"></span> </td>
					</tr>*/