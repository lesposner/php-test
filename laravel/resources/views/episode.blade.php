@extends ('layout')

@section ('content')


    <div class="col-md-8">
        <div class="panel panel-default">

            <div class="panel-heading clearfix">

                <div class="pull-left">
                    <h4 class="mt-5 mb-5">Episode Details</h4>
                </div>

            </div>

            @if(empty($episode))
                <div class="panel-body text-center">
                    <h4>No Episode Details Found!</h4>
                </div>
            @else
                <div class="panel-body panel-body-with-table">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Air date</th>
                                    <th>Episode</th>
                                    <th>Created</th>
                                    @if($episode->characters)
                                        <th>Characters</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td valign="top">{{ $episode->name }}</td>
                                    <td valign="top">{{ $episode->air_date }}</td>
                                    <td valign="top">{{ $episode->episode }}</td>
                                    <td valign="top">{{ $episode->created }}</td>
                                    @if($episode->characters)
                                        <td>
                                            @foreach($episode->characters as $character)
                                                <?php
                                                $characterId = substr($character, strpos($character, "character/") + 10);
                                                ?>
                                                <a href="{{ url('characters', $characterId ) }}"> Character {{ $characterId }}</a> <br />
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