<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Имя</th>
            <th scope="col">Телефон</th>
            <th scope="col">Компания</th>
            <th scope="col">Название заявки</th>
            <th scope="col">Сообщение</th>
            <th scope="col">Изображение</th>
        </tr>
        </thead>
        <tbody>
        @foreach($applications as $application)
            <tr>
                <td>{{$application->id}}</td>
                <td>{{$application->name}}</td>
                <td>{{$application->phone}}</td>
                <td>{{$application->company}}</td>
                <td>{{$application->application}}</td>
                <td>{{$application->message}}</td>
                <td><img height="56px" src="{{ Storage::url($application->image) }}"></td>
            </tr>
        @endforeach
        </tbody>
    </table>
