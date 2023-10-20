<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include Bootstrap CSS and any custom CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        button.btn-success {
            background-color: #28a745;
            color: #fff;
            border: none;
            padding: 6px 12px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Your Dashboard</h2>

        <div class="alert alert-success" role="alert">
            Your Details are Added!
        </div>

            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $counter = 1;
                    @endphp
                    @foreach($users as $user)
                    <tr>
                        @php
                        $counter++
                        @endphp
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->gender }}</td>
                        <td>{{ $user->dob }}</td>
                        <td>
                        <a href="{{route('callPage',$user->id)}}" class="btn btn-primary">View Full Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</body>
</html>
<script>
    const resultbtn = document.querySelector('.alert');
    setTimeout(() => {
        resultbtn.parentNode.removeChild(resultbtn);
    }, 2000);
</script>
