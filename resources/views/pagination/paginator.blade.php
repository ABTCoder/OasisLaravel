@if ($paginator->lastPage() != 1)
<div id="pagination">
    {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} di {{ $paginator->total() }} ---

    <!-- Link alla prima pagina -->
    @if (!$paginator->onFirstPage())
    <a href="{{ $paginator->url(1) }}">Inizio</a> |
    @else
    Inizio |
    @endif

    <!-- Link alla pagina precedente -->
    @if ($paginator->currentPage() != 1)
    <a id="ctrl" href="{{ $paginator->previousPageUrl() }}"> &lt; </a> | 
    @else
    <a id="ctrl"> &lt; </a>
    @endif
	
	@if ($paginator->total() > 2)
	@php
		$a_id = 'page';
		$current = $paginator->currentPage();
		$total = ceil($paginator->total() / 9);
		$remaining = $total-$current;
		$max = 9;
		$start = 0;
		$floor = floor($current / 5);
		$start = ($floor * 5);
		if($start != 0 ) $start -= 1;
		$max += $floor * 5;
		$max = ($remaining < 9) ? $total: $max;
		if($max - $start <= 1) $start -= 4;
	@endphp
	@for($i = $start; $i < $max; $i++)
	@php
		if($i == $current) $a_id = 'selected_page';
	@endphp
	<a class="{{ $a_id }}" href="{{ $paginator->url($i + 1) }}">{{ $i + 1 }} </a>
	@endfor
	@endif
	
    <!-- Link alla pagina successiva -->
    @if ($paginator->hasMorePages())
    <a id="ctrl" href="{{ $paginator->nextPageUrl() }}"> &gt; </a> |
    @else
    <a id="ctrl"> &gt; </a>
    @endif

    <!-- Link all'ultima pagina -->
    @if ($paginator->hasMorePages())
    <a href="{{ $paginator->url($paginator->lastPage()) }}">Fine</a>
    @else
    Fine
    @endif
</div>
@endif