@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination gap-2">
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="icon-xxl page-link pagination_item border rounded-circle icon-shape fw-bold text-reset"
                        href="#" tabindex="-1"><i class="bi bi-chevron-left"></i></a>
                </li>
            @else
                <li class="page-item">
                    <a class="icon-xxl page-link pagination_item border rounded-circle icon-shape fw-bold text-reset"
                        href="{{ $paginator->previousPageUrl() }}" aria-label="Previous"><i
                            class="bi bi-chevron-left"></i></a>
                </li>
            @endif

            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="page-item disabled">{{ $element }}</li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active">
                                <a class="icon-xxl page-link pagination_item border rounded-circle icon-shape fw-bold text-reset"
                                    style="background-color: #f94743 !important; color:#ffffff !important">{{ $page }}</a>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="icon-xxl page-link pagination_item border rounded-circle icon-shape fw-bold text-reset"
                                    href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="icon-xxl page-link pagination_item border rounded-circle icon-shape fw-bold text-reset"
                        href="{{ $paginator->nextPageUrl() }}" aria-label="next"><i class="bi bi-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="icon-xxl page-link pagination_item border rounded-circle icon-shape fw-bold text-reset"
                        href="#" tabindex="-1"><i class="bi bi-chevron-right"></i></a>
                </li>
            @endif
        </ul>
    </nav>
@endif
