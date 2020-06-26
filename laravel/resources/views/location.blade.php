@extends ('layout')

@section ('content')


    <div class="col-md-8">
        <div class="panel panel-default">

            <div class="panel-heading clearfix">

                <div class="pull-left">
                    <h4 class="mt-5 mb-5">Location Details</h4>
                </div>

            </div>

            @if(empty($location))
                <div class="panel-body text-center">
                    <h4>No Location Details Found!</h4>
                </div>
            @else
                <div class="panel-body panel-body-with-table">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Dimension</th>
                                <th>Created</th>
                                @if($location->residents)
                                    <th>Residents</th>
                                @endif
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td valign="top">{{ $location->name }}</td>
                                <td valign="top">{{ $location->type }}</td>
                                <td valign="top">{{ $location->dimension }}</td>
                                <td valign="top">{{ $location->created }}</td>
                                @if($location->residents)
                                    <td>
                                        @foreach($location->residents as $resident)
                                            <?php
                                            $residentId = substr($resident, strpos($resident, "character/") + 10);
                                            ?>
                                            <a href="{{ url('characters', $residentId ) }}"> Resident {{ $residentId }}</a> <br />
                                        @endforeach
                                    </td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection