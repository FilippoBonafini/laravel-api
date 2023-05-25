<div class="d-flex gap-2 align-items-center">
    <div>
        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
            data-bs-target="#staticBackdrop-{{ $tecnology->id }}">
            @include('partials.svg.delete')
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop-{{ $tecnology->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel-{{ $tecnology->id }}">Confirm elimination
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sicuro di voler eliminare il campo "{{ $tecnology->name }}"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <form action="{{ route('admin.tecnologies.destroy', $tecnology->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <a href="{{ route('admin.tecnologies.edit', $tecnology->id) }}" class="btn btn-warning btn-sm d-inline-block">
            @include('partials.svg.edit')
        </a>
    </div>
</div>
