function ajax() {
    let username = document.getElementById('username').value;
    // alert(username);
    let xhttp = new XMLHttpRequest();

    xhttp.open('GET', '../controller/adminCheck.php?uname=' + username, true);
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            let responseArray = this.responseText.split("+");

            let staffName = responseArray[0];
            let companyName = responseArray[1];
            let staffNumber = responseArray[2];
            let userName = responseArray[3];

            document.getElementById('info').innerHTML = 'Name: ' + staffName + ', Company Name: ' + companyName + ',  Mobile Number: ' + staffNumber + ', User Name: ' + userName;
        }
    }
    xhttp.send();
}