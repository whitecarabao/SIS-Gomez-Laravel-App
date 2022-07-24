@extends('layout')

@section('content')
<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student Information System</div>
                    <div class="card-body">
                        <br>
                        <h2>Welcome, {{ Auth::user()->name }}.</h2>
                        <h3> [{{ Auth::user()->email }}]</h3><br><br>
                        Quote of the day: 
                        <i>"Open notes? Open your mind!" - Dr. Lorna D. Miro</i>
                        <br>
                        <br>
                        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
                        <br>
                        <br>
                        <br>
                        <table class="table">
                            <tr>
                                <th>Student ID</th>
                                <th>Student Name</th>
                                <th>Student Program</th>
                                <th>Student Year</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($studentCollection as $student)
                            <tr>
                                <td>{{ $student->studid }}</td>
                                <td>{{ $student->studlname }}, {{ $student->studfname }}</td>
                                <td>{{ $student->studprogram }}</td>
                                <td>{{ $student->studyear }}</td>
                                <td class="icons"><a href="{{ route('student.edit',$student->studid) }}" title="Edit Student Entry"><img src="https://cdn-icons-png.flaticon.com/512/1159/1159633.png" alt=""></a></td>
                                <td class="icons"><a href="{{route('student.delete',$student->studid)}}" title="Delete Student Entry"><img src="https://cdn-icons-png.flaticon.com/512/6861/6861362.png" alt=""></a></td>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="6">{{$studentCollection->count()}} students currently exist in the system.</td>

                            </tr>
                            <tr>
                                <td colspan="6" id="nav-links">{{ $studentCollection->links() }}</td>
                            </tr>
                        </table>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <title>Document</title>
    <style>
    img {
        height: 30px;
        width: 30px;
    }

    body {
        font-family: verdana;
        font-size: 1.5em;
    }

    .icons>a {
        margin-left: 1.5rem;
    }

    #nav-links {
        text-align: center;
    }

    .center {
        margin-left: auto;
        margin-right: auto;
    }

    table {
        border-spacing: 15px;
        border: 1px solid black;
    }

    td {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <strong>
        Student Information System

    </strong>

    <br>
    <br>
    Hello {{ Auth::user()->name }}! [{{Auth::user()->email}}]
    <br>
    <br>
    <br>
    There are {{ $studentCollection->count() }} students in the database.
    <br>
    <br>
    <table class="center">
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Program</th>
            <th>Student Year</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($studentCollection as $student)
        <tr>
            <td>{{ $student->studid }}</td>
            <td>{{ $student->studlname }}, {{ $student->studfname }}</td>
            <td>{{ $student->studprogram }}</td>
            <td>{{ $student->studyear }}</td>
            <td class="icons"><a href="{{ route('student.edit',$student->studid) }}" title="Edit Student Entry"><img
                        src="{{ asset('images/edit-icon.png') }}" alt=""></a></td>
            <td class="icons"><a href="{{route('student.delete',$student->studid)}}" title="Delete Student Entry"><img
                        src="{{ asset('images/delete-icon.png') }}" alt=""></a></td>
        </tr>
        @endforeach
        <tr>
            <td colspan="6" id="nav-links">{{ $studentCollection->links() }}</td>
        </tr>
    </table>
    <br>
    <br>

    <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    <br>
    <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
</body>

</html> -->