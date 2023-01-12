<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <img src="{{asset('/AdminAssets/app-assets/images/logo/logo.png')}}" width="90%" />
            <!-- <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse">
                    <i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i>
                    <i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i>
                </a>
            </li> -->
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="@if(isset($active) && $active == 'panelHome') active @endif nav-item" >
                <a class="d-flex align-items-center" href="{{route('publisher.index')}}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.PanelHome')}}">{{trans('common.PanelHome')}}</span>
                </a>
            </li>
            
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather="book-open"></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.BooksManagment')}}">
                        {{trans('common.BooksManagment')}}
                    </span>
                </a>
                <ul class="menu-content">
                    <li @if(isset($active) && $active == 'books') class="active" @endif>
                        <a class="d-flex align-items-center" href="{{route('publisher.books')}}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.books')}}">
                                {{trans('common.books')}}
                            </span>
                        </a>
                    </li>
                    <li @if(isset($active) && $active == 'writers') class="active" @endif>
                        <a class="d-flex align-items-center" href="{{route('publisher.writers')}}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.writers')}}">
                                {{trans('common.writers')}}
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class=" nav-item @if(isset($active) && $active == 'clients') active @endif" >
                <a class="d-flex align-items-center" href="{{route('publisher.clients')}}">
                    <i data-feather="users"></i>
                    <span class="menu-item text-truncate" data-i18n="{{trans('common.Clients')}}">
                        {{trans('common.Clients')}}
                    </span>
                </a>
            </li>
            <li class=" nav-item @if(isset($active) && $active == 'orders') active @endif" >
                <a class="d-flex align-items-center" href="{{route('publisher.orders')}}">
                    <i data-feather='shopping-cart'></i>
                    <span class="menu-item text-truncate" data-i18n="{{trans('common.orders')}}">
                        {{trans('common.orders')}}
                    </span>
                </a>
            </li>
            <li class=" nav-item @if(isset($active) && $active == 'FAQs') active @endif" >
                <a class="d-flex align-items-center" href="{{route('publisher.FAQs')}}">
                    <i data-feather='help-circle'></i>
                    <span class="menu-item text-truncate" data-i18n="{{trans('common.FAQs')}}">
                        {{trans('common.FAQs')}}
                    </span>
                </a>
            </li>
            <li class=" nav-item @if(isset($active) && $active == 'contactUs') active @endif" >
                <a class="d-flex align-items-center" href="{{route('publisher.contactUs')}}">
                    <i data-feather='mail'></i>
                    <span class="menu-item text-truncate" data-i18n="{{trans('common.contactUs')}}">
                        {{trans('common.contactUs')}}
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
