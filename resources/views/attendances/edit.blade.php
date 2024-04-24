<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Attendance') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('attendances.update', $attendance->id) }}" class="row g-3">
                        @csrf
                        @method('PUT')
                        <label for="employee_id" class="col-md-2 col-form-label">Employee ID:</label>
                        <div class="col-md-10">
                            <select id="employee_id" name="employee_id" class="form-select" required>
                                @foreach($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->id }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label for="date" class="col-md-2 col-form-label">Date:</label>
                        <div class="col-md-10">
                            <input type="date" id="date" name="date" value="{{ $attendance->date }}" class="form-control" required>
                        </div>
                        <label for="clock_in_time" class="col-md-2 col-form-label">Clock In Time:</label>
                        <div class="col-md-10">
                            <input type="time" id="clock_in_time" name="clock_in_time" value="{{ $attendance->clock_in_time }}" class="form-control" required>
                        </div>
                        <label for="departure_time" class="col-md-2 col-form-label">Departure Time:</label>
                        <div class="col-md-10">
                            <input type="time" id="departure_time" name="departure_time" value="{{ $attendance->departure_time }}" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-outline-primary w-full">Update Attendance</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
