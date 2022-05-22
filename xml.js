function loadData() {
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let data = JSON.parse(this.responseText);
            console.log(data);

            for (let i = 0; i < data.length; i++) {
                document.getElementById('show-data').innerHTML += `
                    <tr>
                        <td>${data[i].id}</td>
                        <td>${data[i].username}</td>
                        <td>${data[i].age}</td>
                    </tr>
                `;
            }
        }
    };

    document.getElementById('show-data').innerHTML = '';
    xhttp.open('GET', 'index.php', true);
    xhttp.send();
}