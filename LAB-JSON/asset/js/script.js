// function ajax() {
//     let username = document.getElementById('username').value;
//     let std = {
//         'username': username,
//         'email': 'alamin@aiub.edu',
//         'password': '123'
//     }
//     let data = JSON.stringify(std);
//     let xhttp = new XMLHttpRequest();
//     xhttp.open('POST', 'abc.php', true);
//     xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//     xhttp.send('student=' + data)
//     xhttp.onreadystatechange = function () {

//         if (this.readyState == 4 && this.status == 200) {
//             //alert(this.responseText);
//             let std = JSON.parse(this.responseText);
//             document.getElementById('head').innerHTML = std.username;
//         }
//     }
// }
function ajax() {
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/homeCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send()
    xhttp.onreadystatechange = function () {

        if (this.readyState == 4 && this.status == 200) {
            // alert(this.responseText);
            let student = JSON.parse(this.responseText);
            console.log(student);

            let infoDiv = document.getElementById('info');
            infoDiv.innerHTML = ``;

            let table = document.createElement('table');
            table.setAttribute("id", "table");
            table.style.border = '1px solid black';
            table.style.width = '30%';
            infoDiv.appendChild(table);

            let headerRow = ["id", "name", "cgpa"];
            for (let i = 0; i < headerRow.length; i++) {
                let headerCell = document.createElement('th');
                headerCell.textContent = headerRow[i];
                document.getElementById('table').appendChild(headerCell);
            }


            student.forEach(student => {
                let tr = document.createElement('tr');
                tr.innerHTML = `<tr>
                    <td>
                        ${student.id}
                    </td>
                    <td>
                        ${student.name}
                    </td>
                    <td>
                        ${student.cgpa}
                    </td>
                </tr>`

                document.getElementById('table').appendChild(tr);

            });

        }
    }
}