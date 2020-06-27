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

    $next = substr($info->next, strpos($info->next, "page=") + 5);
    $prev = substr($info->prev, strpos($info->prev, "page=") + 5);

?>

<div class="ml-4 mb-4">
    <ul style="list-style: none;">
        @if(($info->next == true) && ($info->prev == false))
            <li><a href="{{ url($category.'/'.$next) }}" type="button" class="btn btn-outline-success my-2 mx-2 my-sm-0">Next</a></li>
        @elseif(($info->next == false) && ($info->prev == true))
            <li><a href="{{ url($category.'/'.$prev) }}" ype="button" class="btn btn-outline-success my-2 mx-2 my-sm-0">Previous</a></li>
        @elseif(($info->next == true) && ($info->prev == true))
            <li><a href="{{ url($category.'/'.$prev) }}" type="button" class="btn btn-outline-success my-2 mx-2 my-sm-0">Previous</a> <a href="{{ url($category.'/'.$next) }} " type="button" class="btn btn-outline-success my-2 my-sm-0">Next</a></li>
        @endif
    </ul>
</div>