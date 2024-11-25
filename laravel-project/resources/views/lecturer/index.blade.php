<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- CONTENT HERE -->
                        <table>
                            <tr>
                                <th>#</th>
                                <th>NIDN</th>
                                <th>Full Name</th>
                                <th>Prodi</th>
                            </tr>
                            @foreach($lecturers as $lecturer)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $lecturer->nidn }}</td>
                                <td>{{ $lecturer->fullname }}</td>
                                <td>{{ $lecturer->department_id->getLabel() }}</td>
                            @endforeach
                        </table>
                    <!-- END CONTENT HERE -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
