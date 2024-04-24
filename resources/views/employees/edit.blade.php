<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('employees.update', $employee) }}">
                        @csrf
                        @method('PUT')
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" value="{{ $employee->name }}" required><br><br>
                        <label for="surname">Surname:</label>
                        <input type="text" id="surname" name="surname" value="{{ $employee->surname }}" required><br><br>
                        <label for="position">Position:</label>
                        <input type="text" id="position" name="position" value="{{ $employee->position }}" required><br><br>
                        <label for="department_id">Department:</label>
                        <select id="department_id" name="department_id" required>
                            @foreach($departments as $department)
                                <option value="{{ $department->id }}" @if($department->id == $employee->department_id) selected @endif>{{ $department->name }}</option>
                            @endforeach
                        </select><br><br>
                        <label for="hiring_date">Hiring Date:</label>
                        <input type="date" id="hiring_date" name="hiring_date" value="{{ $employee->hiring_date }}" required><br><br>
                        <label for="salary">Salary:</label>
                        <input type="number" id="salary" name="salary" step="0.01" max="999999.99" value="{{ $employee->salary }}" required><br><br>
                        <button type="submit">Update Employee</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
