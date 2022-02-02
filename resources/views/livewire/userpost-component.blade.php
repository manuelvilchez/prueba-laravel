<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <div class="col-md-8">
            <div class="mt-2 table-responsive-md">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acción</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-success" wire:click='edit({{ $user->id }})'>Editar</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-danger">Borrar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
        <div class="col-md-4">
            <div class="container">
                @include('livewire.'.$view);
            </div>
        </div>
    </div>
</div>
