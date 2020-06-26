<?php

    if(isset($characters)) {
        $category = 'character';
    }

    if(isset($locations)) {
        $category = 'location';
    }

    if(isset($episodes)) {
        $category = 'episode';
    }

?>

<?php
    if(isset($category)) {
?>

{{--<form class="form-inline my-2 my-lg-0">--}}
    {{--<input class="form-control mr-sm-2" type="search" placeholder="Name" aria-label="Name">--}}
    {{--<select class="form-control mr-sm-2"--}}
            {{--name="status"--}}
            {{--id="status"--}}
            {{--placeholder="Status"--}}
            {{--aria-label="Status">--}}
        {{--<option value="">Status</option>--}}
        {{--<option value="alive">Alive</option>--}}
        {{--<option value="dead">Dead</option>--}}
        {{--<option value="unknown">Unknown</option>--}}
    {{--</select>--}}

        {{--<input class="form-control mr-sm-2"--}}
               {{--type="search"--}}
               {{--name="species"--}}
               {{--id="species"--}}
               {{--value=""--}}
               {{--placeholder="Species"--}}
               {{--aria-label="Species">--}}
        {{--<input class="form-control mr-sm-2"--}}
               {{--type="search"--}}
               {{--name="type"--}}
               {{--id="type"--}}
               {{--value=""--}}
               {{--placeholder="Type"--}}
               {{--aria-label="Type">--}}

    {{--<select class="form-control mr-sm-2"--}}
            {{--name="gender"--}}
            {{--id="gender"--}}
            {{--placeholder="Gender"--}}
            {{--aria-label="Gender">--}}
        {{--<option value="">Gender</option>--}}
        {{--<option value="male">Male</option>--}}
        {{--<option value="female">Female</option>--}}
        {{--<option value="genderless">Genderless</option>--}}
        {{--<option value="unknown">Unknown</option>--}}
    {{--</select>--}}

    {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--</form>--}}



<form class="form-inline my-2 my-lg-0" method="POST" action="{{ route('search') }}">
    @csrf
    @switch($category)

    @case('location')
        <input class="form-control mr-sm-2"
               type="search"
               name="name"
               id="name"
               value=""
               placeholder="Name"
               aria-label="Name">
        <input class="form-control mr-sm-2"
               type="text"
               name="type"
               id="type"
               value=""
               placeholder="Type"
               aria-label="Type">
        <input class="form-control mr-sm-2"
               type="text"
               name="dimension"
               id="dimension"
               value=""
               placeholder="Dimension"
               aria-label="Dimension">
    @break

    @case('episode')
        <input class="form-control mr-sm-2"
               type="text"
               name="name"
               id="name"
               value=""
               placeholder="Name"
               aria-label="Name">
        <input class="form-control mr-sm-2"
               type="text"
               name="episode"
               id="episode"
               value=""
               placeholder="Episode"
               aria-label="Episode">
    @break

    @default
    <input class="form-control mr-sm-2"
           type="search"
           name="name"
           id="name"
           placeholder="Name"
           aria-label="Name">
    <select class="form-control mr-sm-2"
            name="status"
            id="status"
            placeholder="Status"
            aria-label="Status">
        <option value="">Status</option>
        <option value="alive">Alive</option>
        <option value="dead">Dead</option>
        <option value="unknown">Unknown</option>
    </select>

    <input class="form-control mr-sm-2"
           type="search"
           name="species"
           id="species"
           value=""
           placeholder="Species"
           aria-label="Species">
    <input class="form-control mr-sm-2"
           type="search"
           name="type"
           id="type"
           value=""
           placeholder="Type"
           aria-label="Type">

    <select class="form-control mr-sm-2"
            name="gender"
            id="gender"
            placeholder="Gender"
            aria-label="Gender">
        <option value="">Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="genderless">Genderless</option>
        <option value="unknown">Unknown</option>
    </select>
    @endswitch

    <input type="hidden"
           name="formName"
           value={{ $category }}>
<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>

<?php } ?>