@extends ('layout')

@section ('content')

    <div class="col-md-8">
        <div class="panel panel-default">

            @if(empty($locations))
                <div class="panel-body text-center">
                    <h4>No Locations Found!</h4>
                </div>
            @else

                <div class="panel-heading clearfix">

                    <div class="pull-left">
                        <h4 class="mt-5 mb-5">Locations</h4>
                    </div>

                </div>
                <div class="panel-body panel-body-with-table">
                    <div class="table-responsive">

                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Dimension</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($locations as $location)
                                <tr>
                                    <td><a href="{{ url('locations', $location->id ) }}"> {{ $location->name }}</a></td>
                                    <td>{{ $location->type }}</td>
                                    <td>{{ $location->dimension }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        @include('partials.paginationbuttons')

                    </div>
                </div>
            @endif

        </div>

    </div>

@endsection