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
                <a class="d-flex align-items-center" href="{{route('admin.index')}}">
                    <i data-feather="home"></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.PanelHome')}}">
                        {{trans('common.PanelHome')}}
                    </span>
                </a>
            </li>
            <li class="nav-item @if(isset($active) && $active == 'setting') active @endif">
                <a class="d-flex align-items-center" href="{{route('admin.settings.general')}}">
                    <i data-feather='settings'></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.setting')}}">
                        الإعدادات
                    </span>
                </a>
            </li>

            <li class="nav-item @if(isset($active) && $active == 'products') active @endif">
                <a class="d-flex align-items-center" href="{{route('admin.products')}}">
                    <i data-feather='book-open'></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.products')}}">
                        إدارة المنتجات
                    </span>
                </a>
            </li>
            <li class="nav-item @if(isset($active) && $active == 'orders') active @endif">
                <a class="d-flex align-items-center" href="{{route('admin.orders')}}">
                    <i data-feather='shopping-cart'></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.orders')}}">
                        إدارة الطلبات
                    </span>
                </a>
            </li>
            <li class=" nav-item">
                <a class="d-flex align-items-center" href="#">
                    <i data-feather="smile"></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.apps')}}">
                        التطبيقات
                    </span>
                </a>
                <ul class="menu-content">
                    <li @if(isset($active) && $active == 'SocialMedia') class="active" @endif>
                        <a class="d-flex align-items-center" href="{{ route('admin.socialMedia') }}">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.books')}}">
                                تطبيقات السوشيال ميديا
                            </span>
                        </a>
                    </li>
                    <li @if(isset($active) && $active == 'sections') class="active" @endif>
                        <a class="d-flex align-items-center" href="#">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.sections')}}">
                                تطبيقات الأغاني
                            </span>
                        </a>
                    </li>
                    <li @if(isset($active) && $active == 'writers') class="active" @endif>
                        <a class="d-flex align-items-center" href="#">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.writers')}}">
                                تطبيقات تجارية
                            </span>
                        </a>
                    </li>
                    <li @if(isset($active) && $active == 'writers') class="active" @endif>
                        <a class="d-flex align-items-center" href="#">
                            <i data-feather="circle"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.writers')}}">
                                تطبيقات كرييتف
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item @if(isset($active) && $active == 'serialNumbers') active @endif">
                <a class="d-flex align-items-center" href="{{ route('admin.SerialNumbers') }}">
                    <i data-feather='hash'></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.serialNumbers')}}">
                        الأرقام التسلسلية
                    </span>
                </a>
            </li>

            <li class="nav-item @if(isset($active) && $active == 'faqs') active @endif">
                <a class="d-flex align-items-center" href="{{route('admin.faqs')}}">
                    <i data-feather='help-circle'></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.FAQs')}}">
                        الأسئلة الشائعة
                    </span>
                </a>
            </li>
            <li class="nav-item @if(isset($active) && $active == 'contactMessages') active @endif">
                <a class="d-flex align-items-center" href="{{route('admin.contactmessages')}}">
                    <i data-feather='mail'></i>
                    <span class="menu-title text-truncate" data-i18n="{{trans('common.contactMessages')}}">
                        {{trans('common.contactMessages')}}
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
