<h1>Student List</h1>
    <ul>
        @foreach($students as $student)
            <li>
                <a href="{{ route('students.details', ['id' => $student['id']]) }}">
                    {{ $student['name'] }}
                </a>
            </li>
        @endforeach
    </ul>