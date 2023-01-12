
<ul class="nav nav-pills mb-2">
    <!-- account -->
    <li class="nav-item">
        <a class="nav-link @if($active == 'my-profile') active @endif" href="{{route('publisher.myProfile')}}">
            <i data-feather="user" class="font-medium-3 me-50"></i>
            <span class="fw-bold">{{trans('common.Account')}}</span>
        </a>
    </li>
    <!-- security -->
    <li class="nav-item">
        <a class="nav-link  @if($active == 'my-password') active @endif" href="{{route('publisher.myPassword')}}">
            <i data-feather="lock" class="font-medium-3 me-50"></i>
            <span class="fw-bold">{{trans('common.Security')}}</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link @if($active == 'payment_method') active @endif" href="{{route('publisher.payment_methods')}}">
            <i data-feather="lock" class="font-medium-3 me-50"></i>
            <span class="fw-bold">{{trans('common.payment_method')}}</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link @if($active == 'payment_history') active @endif" href="{{route('publisher.payment_history')}}">
            <i data-feather="lock" class="font-medium-3 me-50"></i>
            <span class="fw-bold">{{trans('common.payment_history')}}</span>
        </a>
    </li>
    <!-- notification -->
</ul>
