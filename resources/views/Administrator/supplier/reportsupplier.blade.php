<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data supplier</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table { 
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data supplier</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Nama supplier</th>
                                <th>Alamat</th>
                                <th>E-mail</th>
                                <th>Contact Person</th>
                                <th>Nomor Telepon</th>
                                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->Nama_supplier}}</td>
                                    <td>{{ $row->Alamat }}</td>
                                    <td>{{ $row->email }}</td>
                                    <td>{{ $row->Contact_Person }}</td>
                                    <td>{{ $row->Nomor_Telepon }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>