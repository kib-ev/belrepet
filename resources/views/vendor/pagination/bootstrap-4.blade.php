@if ($paginator->hasPages())

    <nav class="tg-pagination">
        
    

                                
    <ul>
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            
        @else
            <li class="tg-prevpage"><a href="{{ $paginator->previousPageUrl() }}"><i class="fa fa-angle-left"></i></a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li>...</li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="tg-active"><a href="{{ $url }}">{{ $page }}</a></li>
                    @else
                        <li class=""><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach 

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="tg-nextpage"><a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-right"></i></a></li>
        @else
            
        @endif
    </ul>
        
    </nav>
@endif