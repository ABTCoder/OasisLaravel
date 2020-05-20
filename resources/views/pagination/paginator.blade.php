@if ($paginator->lastPage() != 1)
<div id="pagination">
  <div id="page_item_counter"> {{ $paginator->firstItem() }} - {{ $paginator->lastItem() }} di {{ $paginator->total() }}</div>

    <!-- Link alla prima pagina -->
    @if (!$paginator->onFirstPage())
    <a href="{{ $paginator->url(1) }}">Inizio</a> |
    @else
    Inizio |
    @endif

    <!-- Link alla pagina precedente -->
    @if ($paginator->currentPage() != 1)
    <a id="ctrl" href="{{ $paginator->previousPageUrl() }}"> &lt; </a>
    @else
    <a id="ctrl"> &lt; </a>
    @endif
	
	@if ($paginator->total() > 2)
	@php
		$a_id = 'page';
		$current = $paginator->currentPage();
		$total = ceil($paginator->total() / 9);
                $start = 0;
                $max = 0;
		$start = ($current - 5);
		if($start < 0 ){
                    $start = 0;
                    $max = $start + 9;
                }
                else $max = $current + 4;
		if($max > $total){
                    $max = $total;
                    $start = $total - 9;
                    if($start < 0) $start = 0;
                }
	@endphp
	@for($i = $start; $i < $max; $i++)
	@php
		if(($i+1) == $current) $a_id = 'selected_page';
		else $a_id='page';
	@endphp
	<a id="{{ $a_id }}" href="{{ $paginator->url($i + 1) }}">{{ $i + 1 }} </a>
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