@if($paginator->haspages())
<ul class="flex justify-between">
    <li wire:click="previousPage">pre</li>
    <li wire:click="nextPage">next</li>
</ul>
@endif