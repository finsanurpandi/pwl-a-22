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
                    <x-primary-button element="a" href="{{ route('lecturer.create') }}">
                        Tambah Data
                    </x-primary-button>
                    <br/><br/>
                    <hr/>
                    <x-table>
                        <x-slot name='header'>
                            <th>#</th>
                            <th>NIDN</th>
                            <th>Full Name</th>
                            <th>Prodi</th>
                            <th>Action</th>
                        </x-slot>
                            @foreach($lecturers as $lecturer)
                            <tr>
                                <td>{{ ($lecturers->perPage() * ($lecturers->currentPage()-1))+$loop->iteration }}</td>
                                <td>{{ $lecturer->nidn }}</td>
                                <td>{{ $lecturer->fullname }}</td>
                                <td>{{ $lecturer->department_id->getLabel() }}</td>
                                <td>
                                    <x-primary-button element="a" href="{{ route('lecturer.edit', $lecturer->id)}}">
                                        EDIT
                                    </x-primary-button>
                                    <x-danger-button
                                        x-data=""
                                        x-on:click.prevent="$dispatch('open-modal', 'confirm-lecturer-deletion')"
                                        x-on:click="$dispatch('set-action', '{{ route('lecturer.destroy', $lecturer->id) }}')"
                                    >{{ __('Hapus') }}</x-danger-button>
                                </td>
                            </tr>
                            @endforeach
                    </x-table>
                        {{ $lecturers->links() }}

                    <!-- MODAL -->
                    <x-modal name="confirm-lecturer-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                        <form method="post" x-bind:action="action" class="p-6">
                            @csrf
                            @method('delete')
                
                            <h2 class="text-lg font-medium text-gray-900">
                                {{ __('Apakah anda yakin akan menghapus data lecturer?') }}
                            </h2>
                
                            <p class="mt-1 text-sm text-gray-600">
                                {{ __('Setelah adana melakukan proses hapus, data tidak dapat dikembalikan.') }}
                            </p>
                
                            <div class="mt-6 flex justify-end">
                                <x-secondary-button x-on:click="$dispatch('close')">
                                    {{ __('Batal') }}
                                </x-secondary-button>
                
                                <x-danger-button class="ms-3">
                                    {{ __('Ya, Hapus Saja!') }}
                                </x-danger-button>
                            </div>
                        </form>
                    </x-modal>
                    <!-- MODAL END -->
                    <!-- END CONTENT HERE -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
