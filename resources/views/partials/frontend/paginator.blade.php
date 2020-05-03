<div class="row center-xs middle-xs p-2 w-100">
    <div class="mdc-card w-100">
        <ul class="theme-pagination">
            @if ($paginator->onFirstPage())
                <li class="pagination-previous disabled"><span>Previous</span></li>
            @else
                <li class="pagination-previous ">
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                        <span>Previous</span>
                    </a>
                </li>
                <li></li>
            @endif
            <!-- Pagination Elements -->
                @foreach ($elements as $element)
                <!-- "Three Dots" Separator -->
                    @if (is_string($element))
                        <li class="disabled"><span>{{ $element }}</span></li>
                @endif
                <!-- Array Of Links -->
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="current"><span>{{ $page }}</span></li>
                            @else
                                <li><a href="{{ $url }}"><span>{{ $page }}</span></a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            <!-- Next Page Link -->
                @if ($paginator->hasMorePages())
                    <li class="pagination-next">
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                            <span>Next</span>
                        </a>
                    </li>
                @else
                    <li class="pagination-next disabled">
                            <span>Next</span>
                    </li>
                @endif
        </ul>
    </div>
</div>
