@extends('back')

@section('content')



    <table class="table table-responsive">
        <thead>
        <tr>
            @foreach($list[0] as $key => $value)
                <th>{{$key}}</th>
            @endforeach
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>

        </tr>
        </thead>
        <tbody>
        @foreach($list as $key => $record)
            <tr>
                @foreach($record as $key => $value)
                    <td>
                        {{$value}}
                    </td>
                @endforeach
                    <td><a href="{{route($routeView, $record['id'])}}"><button style="background-color: darkgreen; color: whitesmoke"> View</button></a></td>
                    <td><a href="{{route($routeEdit, $record['id'])}}"><button style="background-color: darkgreen; color: whitesmoke">Edit</button ></a></td>
                    <td><a onclick="deleteItem('{{route($routeDelete, $record['id'])}}')"><button style="background-color: darkgreen; color: whitesmoke">Delete</button ></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection


@section('script')
    <script>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function deleteItem() {
            $.ajax({
                url : route,
                type : 'DELETE',
                dataType : 'json',
                success : function () {
                    alert ('DELETED');
                },
                error : function () {
                    alert('ERROR');
                }
            });
        }
    </script>


    @endsection