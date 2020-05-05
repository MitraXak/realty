@extends('index')

@section('content')

    <div class="panel">
        @include('common.errors')

        <!-- Form new realty -->
        <form action="{{ url('realty') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <!-- namelk -->
            <div class="group">
                <label for="namelk" class="namelk">Название ЖК:</label>
                <div class="inpBlock">
                    <input type="text" id="namelk" class="form-control" name="name"/>
                </div>
            </div>
            <!-- description -->
            <div class="group">
                <label for="descriptionlk" class="namelk">Описание ЖК:</label>
                <div class="inpBlock">
                    <textarea id="descriptionlk" class="textarea-control" name="description"></textarea>
                </div>
            </div>
            <!-- address -->
            <div class="group">
                <label for="addresslk" class="namelk">Адрес ЖК:</label>
                <div class="inpBlock">
                    <input type="text" id="addresslk" class="input-control" name="address" />
                </div>
            </div>
            <!-- ToDoImages -->
            <div class="group">
                <label for="imglk" class="imglk">Images ЖК:</label>
                <div class="inpBlock">
                    <input type="file" id="imglk" class="input-control" name="imglk[]" multiple />
                </div>
            </div>
            <div class="button">
                <button type="submit" class="btn">
                    <i></i> Добавить Недвижимость
                </button>
            </div>
        </form>
    </div>
@endsection