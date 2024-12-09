<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $lecturer->nidn }} - {{ $lecturer->fullname }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- CONTENT HERE -->
                    <x-primary-button element="a" href="{{ route('lecturer.index') }}">
                        Kembali
                    </x-primary-button>
                    <br/><br/>
                    <hr/>
                    <x-table>
                        <x-slot name='header'>
                            <th>#</th>
                            <th>NPM</th>
                            <th>NAMA LENGKAP</th>
                            <th>TAHUN MASUK</th>
                            <th>KELAS</th>
                            <th>PRODI</th>
                        </x-slot>
                            @foreach($students as $student)
                            <tr>
                                <td>{{ ($students->perPage() * ($students->currentPage()-1))+$loop->iteration }}</td>
                                <td>{{ $student->npm }}</td>
                                <td>{{ $student->nama_lengkap }}</td>
                                <td>{{ $student->entry_year }}</td>
                                <td>{{ $student->kelas }}</td>
                                <td>{{ $student->department->name }}</td>
                            </tr>
                            @endforeach
                    </x-table>
                        {{ $students->links() }}

                    <!-- MODAL END -->
                    <!-- END CONTENT HERE -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
