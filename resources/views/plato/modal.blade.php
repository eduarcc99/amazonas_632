<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $cliente->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel">Confirmar Acción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Estás seguro de eliminar este cliente {{ $cliente->nombre }}?
            </div>
            <div class="modal-footer">
                <form class="d-inline" action='{{ asset("/productos/$cliente->id") }}' method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Confirmar</button>
                </form>
            </div>
        </div>
    </div>
</div>
