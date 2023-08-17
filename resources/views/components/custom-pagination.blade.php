<div class="pro-pagination-style text-center text-lg-end" data-aos="fade-up" data-aos-delay="200">
    <div class="pages">
        <ul>
            @if ($paginator->onFirstPage())
                <li class="li"><a class="page-link" @disabled(true)><i
                            class="fa fa-angle-left"></i></a>
                @else
                <li class="li"><a class="page-link" href="{{ $paginator->previousPageUrl()}}"><i class="fa fa-angle-left"></i></a>
            @endif
            </li>
            <li class="li"><a class="page-link" href="#">{{ $paginator->currentPage() }}</a></li>


            @if ($paginator->hasMorePages())
                <li class="li"><a class="page-link" href="{{ $paginator->nextPageUrl() }}"><i
                            class="fa fa-angle-right"></i></a>
                </li>
            @else
                <li class="li"><a class="page-link" @disabled(true)><i
                            class="fa fa-angle-right"></i></a>
                </li>
            @endif
        </ul>
    </div>
</div>
