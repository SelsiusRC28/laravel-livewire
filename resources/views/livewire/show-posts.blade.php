<div>
    <div class="mb-9 flex">
        <h1 wire:model="search"></h1>
        <input type="text" wire:model='search' class="flex-1 mb-2 mr-2 h-9" placeholder="Buscar...">
        @livewire('create-post')
    </div>
    @if ($posts->count())
    <table>
        <thead>
            <tr>
                <td wire:click="order('id')" class="cursor-pointer">
                    ID
                </td>
                <td wire:click="order('title')" class="cursor-pointer">
                    TITLE
                </td>
                <td wire:click="order('content')" class="cursor-pointer">
                    CONTENT
                </td>
                <td class="cursor-pointer">
                    Acciones
                </td>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->content}}</td>
                    <td>
                        Editar
                        Borrar
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>No hay Brayan</p>
    @endif
        
</div>
