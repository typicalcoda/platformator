<ul class="m-menu__nav m-menu__nav--dropdown-submenu-arrow">
    <li class="m-menu__section m-menu__section--first">
        <h4 class="m-menu__section-text">Clients</h4><i class="m-menu__section-icon flaticon-more-v3"></i>
    </li>
{{--     <li aria-haspopup="true" class="m-menu__item m-menu__item--submenu">
        <a class="m-menu__link m-menu__toggle" href="javascript:;"><i class="m-menu__link-icon flaticon-layers"></i><span class="m-menu__link-text">Resources</span><i class="m-menu__ver-arrow la la-angle-right"></i></a>
        <div class="m-menu__submenu" style="display: none; overflow: hidden;">
            <span class="m-menu__arrow"></span>
            <ul class="m-menu__subnav">
                <li aria-haspopup="true" class="m-menu__item m-menu__item--parent"><span class="m-menu__link"><span class="m-menu__link-text">Resources</span></span></li>
                <li aria-haspopup="true" class="m-menu__item {{(isset($active_link) && $active_link == 1) ? 'm-menu__item--active' : ''}}"">
                    <a class="m-menu__link" href="inner.html"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Timesheet</span></a>
                </li>
                <li aria-haspopup="true" class="m-menu__item {{(isset($active_link) && $active_link == 1) ? 'm-menu__item--active' : ''}}"">
                    <a class="m-menu__link" href="inner.html"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Payroll</span></a>
                </li>
                <li aria-haspopup="true" class="m-menu__item {{(isset($active_link) && $active_link == 1) ? 'm-menu__item--active' : ''}}"">
                    <a class="m-menu__link" href="inner.html"><i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i><span class="m-menu__link-text">Contacts</span></a>
                </li>
            </ul>
        </div>
    </li> --}}

    <li aria-haspopup="true" class="m-menu__item {{(isset($active_link) && $active_link == 1) ? 'm-menu__item--active' : ''}}">
        <a class="m-menu__link" href="inner.html"><i class="m-menu__link-icon la la-plus"></i>
            <span class="m-menu__link-text">Add new</span>
        </a>
    </li>

    <li aria-haspopup="true" class="m-menu__item {{(isset($active_link) && $active_link == 2) ? 'm-menu__item--active' : ''}}"">
        <a class="m-menu__link" href="inner.html"><i class="m-menu__link-icon la la-list-alt"></i>
            <span class="m-menu__link-text">Manage existing</span>
        </a>
    </li>

    <li class="m-menu__section m-menu__section--first">
        <h4 class="m-menu__section-text">Systems</h4><i class="m-menu__section-icon flaticon-more-v3"></i>
    </li>

    <li aria-haspopup="true" class="m-menu__item {{(isset($active_link) && $active_link == 3) ? 'm-menu__item--active' : ''}}"">
        <a class="m-menu__link" href="/client/systems/new"><i class="m-menu__link-icon la la-plus"></i>
            <span class="m-menu__link-text">Create new</span>
        </a>
    </li>

    <li aria-haspopup="true" class="m-menu__item {{(isset($active_link) && $active_link == 4) ? 'm-menu__item--active' : ''}}"">
        <a class="m-menu__link" href="inner.html"><i class="m-menu__link-icon la la-list-alt"></i>
            <span class="m-menu__link-text">Manage existing</span>
        </a>
    </li>
</ul>