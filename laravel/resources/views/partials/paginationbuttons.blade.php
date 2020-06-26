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



{{--    echo "info next:", $info->next, '<br />';--}}
{{--    echo "next:", $next, '<br />';--}}
{{--    echo "info prev:", $info->prev, '<br />';--}}
{{--    echo "prev:", $prev, '<br />';--}}
{{--    echo "category:", $category, '<br />';--}}

?>

@if(($info->next == true) && ($info->prev == false))
    <li><a href="{{ url($category.'/'.$next) }}">Next</a></li>
@elseif(($info->next == false) && ($info->prev == true))
    <li><a href="{{ url($category.'/'.$prev) }}">Previous</a></li>
@elseif(($info->next == true) && ($info->prev == true))
    <li><a href="{{ url($category.'/'.$prev) }}">Previous</a></li><li><a href="{{ url($category.'/'.$next) }}">Next</a></li>
@endif