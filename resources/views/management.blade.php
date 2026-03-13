@include('navigations')
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif
    <div class="col-md-12 text-center mt-3">
        <h4>
            <strong class="text-light">ANIME CHARACTER LISTS</strong>
        </h4>
    </div>

    <div class="col-md-11 d-flex justify-content-end">
        <div class="col-md-3 pe-2 d-flex gap-2">
            <div class="col-md-8">
                <input type="text" class="form-control" placeholder="search by name and anime.......">
            </div>
            <div class="col-md-4">
                <button class="btn btn-danger m-0"
                data-bs-target="#createCharacter"
                data-bs-toggle="modal"><i class="fa-solid fa-circle-plus"></i> Create</button>
            </div>
        </div>
    </div>
    @include('modals')
@include('footer')