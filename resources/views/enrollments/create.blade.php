@extends('layout')

@section('site-title')
Add | Enrollment
@endsection

@section('title')
Add Enrollment
@endsection

@section('content')
<form action="{{ route('enrollments.store') }}" method="POST">
    @csrf
    <!-- <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <select id="student_id" name="student_id" class="form-control" required>
                    <option value="">Select Student</option>
                    @foreach($students as $student)
                        <option value="{{ $student->id }}">{{ $student->first_name }} {{ $student->last_name }}</option>
                    @endforeach
                </select>
                <label class="form-label" for="student_id">Student</label>
            </div>
        </div>
    </div> -->
    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="studentFilter" class="form-control" placeholder="Search Student..."
                    onkeyup="filterStudents()" onclick="showDropdown()">
                <label class="form-label" for="studentFilter">Filter Students</label>
            </div>
            <div class="form-outline mt-2" id="studentDropdown"
                style="display: none; border: 1px solid #ccc; border-radius: 5px; max-height: 200px; overflow-y: auto; position: absolute; background: white; width: 50%;">
                <ul id="studentList" class="list-group">
                    @foreach($students as $student)
                        <li class="list-group-item student-item"
                            onclick="selectStudent('{{ $student->id }}', '{{ $student->first_name }} {{ $student->last_name }}')">
                            {{ $student->first_name }} {{ $student->last_name }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <input type="hidden" id="student_id" name="student_id" required>
        </div>
    </div>


    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <select id="course_id" name="course_id" class="form-control" required>
                    <option value="">Select Course</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                    @endforeach
                </select>
                <label class="form-label" for="course_id">Course</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="text" id="semester" name="semester" class="form-control" required />
                <label class="form-label" for="semester">Semester</label>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col">
            <div class="form-outline">
                <input type="date" id="enrollment_date" name="enrollment_date" class="form-control" required />
                <label class="form-label" for="enrollment_date">Enrollment Date</label>
            </div>
        </div>
    </div>

    <!-- Submit button -->
    <button type="submit" class="btn btn-outline-dark btn-block mb-4 py-2" style="width:100%;">Add Enrollment</button>
</form>
@endsection

@section('scripts')
<script>
    function showDropdown() {
        document.getElementById("studentDropdown").style.display = "block";
    }

    function filterStudents() {
        let input = document.getElementById("studentFilter").value.toLowerCase();
        let listItems = document.querySelectorAll(".student-item");
        let dropdown = document.getElementById("studentDropdown");
        let hasMatch = false;

        listItems.forEach(item => {
            let text = item.textContent.toLowerCase();
            if (text.includes(input)) {
                item.style.display = "block";
                hasMatch = true;
            } else {
                item.style.display = "none";
            }
        });

        dropdown.style.display = hasMatch ? "block" : "none";
    }

    function selectStudent(id, name) {
        document.getElementById("studentFilter").value = name;
        document.getElementById("studentDropdown").style.display = "none";
    }

    // Hide dropdown when clicking outside
    document.addEventListener("click", function (event) {
        let input = document.getElementById("studentFilter");
        let dropdown = document.getElementById("studentDropdown");

        if (!input.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.style.display = "none";
        }
    });
</script>
@endsection