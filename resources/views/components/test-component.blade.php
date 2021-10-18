<?php
    /** @see \App\View\Components\TestComponent */
?>
<div>
{{--    this should work, but \Edalzell\Blade\Augmentation\AugmentationViewServiceProvider somehow does cast $hellowli to string :S--}}
   This should be an enum, but is a string
    <pre>
        {{ var_dump($hellowli) }}
    </pre>

    this should be model but is array <br>
    <pre>
        {{ var_dump($myuser) }}
    </pre>

    I noticed a PR for version 3.5.1 which reduces the problem to only statamic routes / statamic views.
    <br> Now I could probably create a statamic view and the issue would be the same as soon as I use this component.
    <br>
    Or if I manually want to retrieve values from a mixed structure.

</div>
