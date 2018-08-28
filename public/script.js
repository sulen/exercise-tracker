// function newExercise() {
//     document.getElementById("table").innerHTML +=
//         "<tr>" +
//         "<td>dawd</td>" +
//         "<td></td>" +
//         "<td>dwadadawd</td>" +
//         "<td></td>";
// }

function remove(e) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() { // listen for state changes
        if (xhr.readyState === 4 && xhr.status === 200) { // when completed we can move away
            // window.location = "remove";
            location.reload();
        }
    };

    xhr.open('POST', 'remove', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send('id=' + e.name);
}

function logout() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() { // listen for state changes
        if (xhr.readyState === 4 && xhr.status === 200) { // when completed we can move away
            window.location = "/";
            // location.reload();
        }
    };

    xhr.open('POST', 'logout', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send('logout=true');
}
