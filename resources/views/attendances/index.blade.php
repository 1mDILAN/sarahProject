<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Attendances') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('attendances.create') }}" class="btn btn-outline-primary w-full">Create
                        Attendance</a>
                    <table class="table table-hover table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Employee ID</th>
                                <th scope="col">Date</th>
                                <th scope="col">Clock In Time</th>
                                <th scope="col">Departure Time</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($attendances as $attendance)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $attendance->id }}</td>
                                    <td>{{ $attendance->employee_id }}</td>
                                    <td>{{ $attendance->date }}</td>
                                    <td>{{ $attendance->clock_in_time }}</td>
                                    <td>{{ $attendance->departure_time }}</td>
                                    <td>
                                        <div class="btn-group w-full">
                                            <a href="{{ route('attendances.edit', $attendance->id) }}"
                                                class="btn btn-outline-warning">Edit</a>
                                            <form method="POST"
                                                action="{{ route('attendances.destroy', $attendance->id) }}"
                                                style="display: none;" id="delete-form-{{ $attendance->id }}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <a href="#" class="btn btn-outline-danger"
                                                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $attendance->id }}').submit();">
                                                Delete
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7">No attendances found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
