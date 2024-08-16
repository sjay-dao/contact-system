<?php
    require './header.php';
?>
<style>
    table {
  border-collapse: collapse;
  width: 80%;
  margin:auto;
}

th, td {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f2f2f2;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Table with jQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<button style='float:right;width:100px; height:40px;margin:10px; margin-right:100px' >Add</button>   
<body>
    <table id="myTable">  
<input type="text" id="searchInput" style='float:right;width:500px; height:40px;margin:10px; margin-right:20px' placeholder="Search...">
<body>
    <table id="myTable">
   
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
        
    </table>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: "../ServerSide/Contact.php",
                dataType: "json",
                type: 'POST',
                success: function(data) {
                    var tableBody = $('#myTable tbody');
                    $.each(data, function(index, item) {
                        var row = $('<tr></tr>');
                        row.append('<td>' + item.Name + '</td>');
                        row.append('<td>' + item.Email + '</td>');
                        row.append('<td>' + item.Company + '</td>');
                        row.append('<td>' + item.Phone + '</td>');
                        row.append('<td><button>Delete</button><button>Edit</button></td>')
                        tableBody.append(row);
                    });
                }
            });
        });
    </script>

    <script>
        const searchInput = document.getElementById('searchInput');
        const table = document.querySelector('table');
        const tableRows = table.getElementsByTagName('tr');

        searchInput.addEventListener('input',   
        (event) => {
        const searchTerm = event.target.value.toLowerCase();
        for (let i = 1; i < tableRows.length; i++) {
            const row = tableRows[i];
            const cells = row.getElementsByTagName('td');
            let found = false;
            for (let j = 0; j < cells.length; j++) {
            const cellValue = cells[j].textContent   
        || cells[j].innerText;
            if (cellValue.toLowerCase().indexOf(searchTerm)   
        > -1) {
                found = true;
                break;
            }
            }
            if (found) {
            row.style.display = '';
            } else {
            row.style.display = 'none';
            }
        }
        });
    </script>
</body>
</html>