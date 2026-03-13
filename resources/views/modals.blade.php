<div class="modal fade" id="createCharacter" tabindex="-1" aria-labelledby="createCharacterLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content border rounded">
            <div class="modal-header bg-dark text-white">
                <h5 class="modal-title text-white" id="createCharacterLabel">Create New Anime Character</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"
                    onclick="location.reload()"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" action="{{ route('add.character') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mx-2">
                        <label class="form-label">Anime Name</label>
                        <input type="text" name="anime" class="form-control">
                    </div>
                    <div class="mx-2">
                        <label class="form-label">Character Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mx-2">
                        <label class="form-label">Character Description</label>
                        <input type="text" name="description" class="form-control">
                    </div>
                    <div class="mx-2">
                        <label class="form-label">Character Goals</label>
                        <input type="text" name="goals" class="form-control">
                    </div>
                    <div class="mx-2">
                        <label class="form-label">Character Icon</label>
                        <input type="file" name="icon" class="form-control">
                    </div>
                    <!-- Form Submission -->
                    <div class="col-12 text-center mt-3">
                        <button type="submit" class="btn btn-dark px-5">
                            <i class="fa-solid fa-circle-plus"></i> Create Character
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>