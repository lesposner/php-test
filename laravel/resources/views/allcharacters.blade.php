@extends ('layout')

@section ('content')

    <div class="col-md-8">
        <div class="panel panel-default">

            @if(empty($characters))
                <div class="panel-body text-center">
                    <h4>No Characters Found!</h4>
                </div>
            @else
                <div class="panel-heading clearfix">

                    <div class="pull-left">
                        <h4 class="mt-5 mb-5">Characters</h4>
                    </div>

                </div>
                <div class="panel-body panel-body-with-table">
                    <div class="table-responsive">

                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Species</th>
                                    <th>Gender</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($characters as $character)
                                    <tr>
                                        <td><a href="{{ url('characters', $character->id ) }}"> <img src="{{ $character->image }}" alt="{{ $character->name }}" title="{{ $character->name }}" style="width:50px;height:50px;"></a></td>
                                        <td><a href="{{ url('characters', $character->id ) }}"> {{ $character->name }}</a></td>
                                        <td>{{ $character->status }}</td>
                                        <td>{{ $character->species }}</td>
                                        <td>{{ $character->gender }}</td>
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