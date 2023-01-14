<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header text-center d-flex justify-content-center">
        
            <img src="{{asset(getSettingImageLink('logo'))}}" width="50%" />
        
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
                            <i data-feather="aperture"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.books')}}">
                                تطبيقات السوشيال ميديا
                            </span>
                        </a>
                    </li>
                    <li @if(isset($active) && $active == 'Music') class="active" @endif>
                        <a class="d-flex align-items-center" href="{{ route('admin.Music') }}">
                            <i data-feather="headphones"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.Music')}}">
                                تطبيقات الأغاني
                            </span>
                        </a>
                    </li>
                    <li @if(isset($active) && $active == 'business') class="active" @endif>
                        <a class="d-flex align-items-center" href="{{ route('admin.business') }}">
                            <i data-feather="briefcase"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.business')}}">
                                تطبيقات تجارية
                            </span>
                        </a>
                    </li>
                    <li @if(isset($active) && $active == 'creative') class="active" @endif>
                        <a class="d-flex align-items-center" href="{{ route('admin.creative') }}">
                            <i data-feather="command"></i>
                            <span class="menu-item text-truncate" data-i18n="{{trans('common.creative')}}">
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
