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
    <div class="col-md-12 d-flex align-items-center justify-content-center p-2 mt-3">
        <div class="col-md-11 border d-flex rounded row p-3">
            @foreach ($getCharacters as $char)
                <div class="col-md-2 p-2">
                    <div class="col-md-12 border rounded d-flex flex-column">
                        <div class="col-md-12 d-flex justify-content-center p-1 mt-3">
                            <img src="{{ asset('storage/' . $char->icon) }}" class="icon-round border">
                        </div>
                        <div class="col-md-12 text-center">
                            <strong class="fs-5 text-light">{{ $char->name }}</strong>
                        </div>
                        <div class="col-md-12 text-center">
                            <strong class="fs-5 text-light">{{ $char->anime }}</strong>
                        </div>
                        <div class="col-md-12 mb-3 d-flex justify-content-end mt-2 pe-2 gap-2">
                            <button class="btn btn-sm btn-info text-white m-0 ">VIEW</button>
                            <button class="btn btn-sm btn-danger m-0">DELETE</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('modals')
@include('footer')