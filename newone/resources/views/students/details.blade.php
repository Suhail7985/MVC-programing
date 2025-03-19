<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>
    <h1>Student Details</h1>
    @if($id == 1)
        <p>Name: Aman</p>
        <p>Age: 20</p>
        <p>Subject: Math</p>
    @elseif($id == 2)
        <p>Name: Pooja</p>
        <p>Age: 21</p>
        <p>Subject: Science</p>
    @elseif($id == 3)
        <p>Name: Rakesh</p>
        <p>Age: 22</p>
        <p>Subject: History</p>
    @else
        <p>Student not found</p>
    @endif
    <br>
    <a href="{{ url('/') }}">Back to List</a>
</body>
</html>
