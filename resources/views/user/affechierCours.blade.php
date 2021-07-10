
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affecher cours</title>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

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
  <div class="flex-center position-ref full-height">
            <table style="width:100%">
                <tr>
                    <th>NameCours</th>
                    <th>Typecours</th>
                    <th>DurationCours</th>
                    <th>Coeff</th>
                    <th>created at</th>
                </tr>

                @foreach ($courses as $cours)
                    <tr>
                        <td>{{ $cours->NameCours }}</td>
                        <td>{{ $cours->Typecours }}</td>
                        <td>{{ $cours->DurationCours }}</td>
                        <td>{{ $cours->Coeff }}</td>
                        <td>{{ $cours->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach

            </table>
        </div>
</body>
</html>

