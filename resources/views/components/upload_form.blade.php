<div class="container-fluid">
    <div class="row justify-content-center">
        <h2 class="card-header w-100 m-1 text-center">Качване на файл</h2>
    </div>
    <div class="row justify-content-center">
    {{-- enctype attribute is important if your form contains file upload --}}
    {{-- Please check https://www.w3schools.com/tags/att_form_enctype.asp for further info --}}
        <form class="m-2" method="post" action="/file-upload" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
    {{--<label for="name">File Name</label>--}}
                <input type="text" class="form-control" id="name" placeholder="Име на файла" name="name">
            </div>
            <div class="form-group">
                <label for="image">Избор на изображение</label>
                <input id="image" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Качване</button>
        </form>
    </div>
    @include('components.errors')
</div>