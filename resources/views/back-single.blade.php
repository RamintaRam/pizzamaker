@extends('back')

@section('content')



    <table class="table table-responsive">
        <thead>
        <tr>
            <th>View</th>
            <th>Edit</th>
        </tr>

        </thead>
        <tbody>

                @foreach($record as $key => $value)
                    <tr>
                    <td>
                        {{$key}}
                    </td>

                    <td>{{$value}}
                    </td>
                    </tr>

                @endforeach

                <td></td>
                <td><a href="{{route($routeShow, $record['id'])}}">Edit</a></td>
                {{--<td><a onclick="deleteItem('{{route($routeDelete, $record['id'])}}')">Delete</a></td>--}}

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
        function deleteItem(route) {

            $.ajax({
                url: route,
                type: 'DELETE',
                data: {},
                dataType: 'json',
                success: function () {
                    alert('DELETED')
                },
                error: function () {
                    alert('Error');
                }
            });
        }
    </script>
@endsection