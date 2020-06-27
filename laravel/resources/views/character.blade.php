@extends ('layout')

@section ('content')

    <div class="col-md-8">
        <div class="panel panel-default">

            <div class="panel-heading clearfix">

                <div class="pull-left">
                    <h4 class="mt-5 mb-5">Character Details</h4>
                </div>

            </div>

            @if(empty($character))
                <div class="panel-body text-center">
                    <h4>No Characters Details Found!</h4>
                </div>
            @else
                <div class="panel-body panel-body-with-table">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Species</th>
                                    <th>Gender</th>
                                    <th>Origin</th>
                                    @if($character->episode)
                                        <th>Appeared In</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td valign="top"><img src="{{ $character->image }}" alt="{{ $character->name }}" title="{{ $character->name }}" style="width:100px;height:100px;"></td>
                                    <td valign="top">{{ $character->name }}</td>
                                    <td valign="top">{{ $character->species }}</td>
                                    <td valign="top">{{ $character->gender }}</td>
                                    <td valign="top">{{ $character->origin->name }}</td>
                                    @if($character->episode)
                                        <td>
                                            @foreach($character->episode as $episode)
                                                <?php
                                                    $episodeId = substr($episode, strpos($episode, "episode/") + 8);
                                                ?>
                                                <a href="{{ url('episodes', $episodeId ) }}"> Episode {{ $episodeId }}</a> <br />
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