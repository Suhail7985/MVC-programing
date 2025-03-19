<h1>Student Details</h1>
    <p><strong>ID:</strong> {{ $student['id'] }}</p>
    <p><strong>Name:</strong> {{ $student['name'] }}</p>
    <p><strong>Age:</strong> {{ $student['age'] }}</p>
    <img src="{{ asset('build/assets/images/Suhail.png') }}" alt="{{ $student['name'] }}" width="200">
