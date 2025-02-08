<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Schedule</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <h1 class="text-3xl font-bold text-center mb-6">High School Class Schedule</h1>
    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6">
        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-4 py-2">Class Name</th>
                    <th class="border px-4 py-2">Teacher</th>
                    <th class="border px-4 py-2">Classroom</th>
                    <th class="border px-4 py-2">Start Time</th>
                    <th class="border px-4 py-2">End Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td class="border px-4 py-2">{{ $course->class_name }}</td>
                    <td class="border px-4 py-2">{{ $course->teacher }}</td>
                    <td class="border px-4 py-2">{{ $course->classroom }}</td>
                    <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($course->start_time)->format('h:i A') }}</td>
                    <td class="border px-4 py-2">{{ \Carbon\Carbon::parse($course->end_time)->format('h:i A') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
