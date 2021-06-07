<form method="POST" action="#" class="container-fluid">
    @csrf

    <div class="form-group row">
        <label for="Title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="Title" name="title" id="TitleInput">
            <span class="text-danger" id="TitleInputError">
                @if($errors->has('title'))
                    {{ $errors->first('title') }}
                @endif
            </span>
        </div>
    </div>

</form>
