@extends ('layout')

@section ('content')

    <div class="col-md-8">
        <div class="panel panel-default">

            @if(empty($episodes))
                <div class="panel-body text-center">
                    <h4>No Episodes Found!</h4>
                </div>
            @else

                <div class="panel-heading clearfix">

                    <div class="pull-left">
                        <h4 class="mt-5 mb-5">Episodes</h4>
                    </div>

                </div>
                <div class="panel-body panel-body-with-table">
                    <div class="table-responsive">

                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Air Date</th>
                                <th>Episode</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($episodes as $episode)
                                <tr>
                                    <td><a href="{{ url('episodes', $episode->id ) }}"> {{ $episode->name }}</a></td>
                                    <td>{{ $episode->air_date }}</td>
                                    <td>{{ $episode->episode }}</td>
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