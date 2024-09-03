<?php

return <<<'HTML'
<div class="text-center">
    <div class="text-6xl font-bold">
        Welcome to slide 2.
    <div>
    <div class="prose prose-sm mt-4">
        {!! \Illuminate\Support\Str::markdown("# This is title\n```php echo 'Hello World!'```") !!}
    </div>
</div>
HTML;