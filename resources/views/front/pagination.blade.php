<nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" aria-label="Previous">&laquo;</a>
                </li>
            @else
                <li><a  class="page-link" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous" rel="prev">&laquo;</a></li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">
                        <a  class="page-link"{{ $element }}></a>
                    </li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active my-active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li><a class="page-link" href="{{ $paginator->nextPageUrl() }}" aria-label="Next" rel="next">&raquo;</a></li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" aria-label="Next">&raquo;</a>
                </li>
            @endif
        </ul>
</nav>
