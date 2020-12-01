<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>HTML Table</h2>

<table>
    <tr>
        <th>name</th>
        <th>product</th>
        <th>price</th>
    </tr>
    @foreach ($info as $information)

        <tr>
            <td>{{ $information->email}}</td>
            <td>{{ $information->name}}</td>
            <td>{{ $information->price}}</td>


        </tr>

    @endforeach
</table>

</body>
</html>
