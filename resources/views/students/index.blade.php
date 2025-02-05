<x-main-layout>
    <div class="flex justify-between mb-6">
        <h1 class="text-4xl font-semibold">All Students</h1>
        <button><a href="{{ route('students.create') }}">New Addmission</a></button>
    </div>

    <div class="overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Sr no.</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Student Name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Father name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Mobile No.</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Section</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm w-1/4">Action</th>
                </tr>
            </thead>

            <tbody class="text-gray-700">
                @foreach ($students as $student)
                    <tr class="{{ $loop->even ? 'bg-gray-200' : null }}">
                        <td class="text-left py-3 px-4">{{ $loop->iteration }}:</td>
                        <td class="text-left py-3 px-4">{{ $student->student_name }}</td>
                        <td class="text-left py-3 px-4">{{ $student->father_name }}</td>
                        <td class="text-left py-3 px-4"><a class="hover:text-blue-500"
                                href="tel:{{ $student->mobile_number }}">{{ $student->mobile_number }}</a></td>

                        <td class="text-left py-3 px-4">{{ $student->section->name }}</td>
                        <td class="text-left py-3 px-4 space-x-5">
                            <a href="{{ route('students.show', $student->id) }}" class="text-blue-500">Details</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="text-green-500">Edit</a>

                            <form action="{{ route('students.destroy', $student->id) }}" class="inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-500" type="submit"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div class="mt-8">
            {{ $students->links() }}
        </div>
        @if (session('message'))
            <div id="delete-message"
                class="fixed bottom-5 right-5 bg-green-500 text-white px-4 py-3 rounded-lg shadow-lg flex items-center justify-between space-x-4 animate-slide-in">
                <span>{{ session('message') }}</span>
                <button onclick="closeMessage()" class="text-white hover:text-gray-200 focus:outline-none">
                    ✖
                </button>
            </div>
        @endif

    </div>
</x-main-layout>

<script>
    // Auto-hide message after 10 seconds
    setTimeout(() => closeMessage(), 30000);

    // Function to close the message manually
    function closeMessage() {
        let messageBox = document.getElementById('delete-message');
        if (messageBox) {
            messageBox.classList.add('opacity-0', 'transition-opacity', 'duration-500');
            setTimeout(() => messageBox.remove(), 500);
        }
    }
</script>
