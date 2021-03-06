<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ auth()->user()->image_path }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>
                    {{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}
                </p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ route('dashboard.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.index') }}"><i
                        class="fa fa-th"></i><span>@lang('site.dashboard')</span></a>
            </li>

            <li class="{{route('dashboard.settings.all_settings')==url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.settings.all_settings') }}">
                    <i class="fa  fa-gear"></i> @lang('site.settings')
                </a>
            </li>

            <li class="{{ route('dashboard.users.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.users.index') }}">
                    <i class="fa fa-users"></i><span>@lang('site.users')</span></a>
            </li>

            <li class="{{ route('dashboard.categories.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.categories.index') }}"><i
                        class="fa  fa-cube"></i><span>@lang('site.categories')</span></a>
            </li>

            <li class="{{ route('dashboard.sub_categories.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.sub_categories.index') }}"><i
                        class="fa fa-cubes"></i><span>@lang('site.sub_categories')</span></a>
            </li>

            <li class="{{ route('dashboard.products.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.products.index') }}"><i
                        class="fa fa-car"></i><span>@lang('site.products')</span>
                </a>
            </li>




            <li class="{{ route('dashboard.partners.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.partners.index') }}"><i
                        class="fa fa-users"></i><span>@lang('site.partners')</span></a>
            </li>

            <li class="{{ route('dashboard.testmonials.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.testmonials.index') }}"><i
                        class="fa fa-file-text"></i><span>@lang('site.testmonials')</span></a>
            </li>

            <li class="{{ route('dashboard.cultures.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.cultures.index') }}"><i
                        class="fa fa-group"></i><span>@lang('site.cultures')</span></a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i>
                    <span>@lang('site.delars')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-folder pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="page-list {{ route('dashboard.cities.index') == url()->current() ? 'active' : '' }}">
                        <a href="{{ route('dashboard.cities.index') }}">
                            <i class="fa fa-building"></i> @lang('site.cities')
                        </a>
                    </li>

                    <li class="page-list {{ route('dashboard.delars.index') == url()->current() ? 'active' : '' }}">
                        <a href="{{ route('dashboard.delars.index') }}">
                            <i class="fa fa-folder-open"></i> @lang('site.delars')
                        </a>
                    </li>


                </ul>
            </li>

            <li class="{{ route('dashboard.departments.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.departments.index') }}"><i
                        class="fa  fa-th-large"></i><span>@lang('site.departments')</span></a>
            </li>

            <li class="{{ route('dashboard.jobs.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.jobs.index') }}"><i
                        class="fa   fa-paste"></i><span>@lang('site.jobs')</span></a>
            </li>

            <li class="{{ route('dashboard.applicants.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.applicants.index') }}"><i
                        class="fa fa-child"></i><span>@lang('site.applicants')</span></a>
            </li>

            <li class="{{ route('dashboard.blog.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.blog.index') }}"><i
                        class="fa fa-text-width"></i><span>@lang('site.blog')</span></a>
            </li>

            <li class="{{ route('dashboard.contact.index') == url()->current() ? 'active' : '' }}">
                <a href="{{ route('dashboard.contact.index') }}"><i
                        class="fa fa-twitch"></i><span>@lang('site.contact')</span></a>
            </li>




            {{-- <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i>
                    <span>@lang('site.pages')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-folder pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="page-list {{ route('dashboard.pages.index') == url()->current() ? 'active' : '' }}">
                        <a href="{{ route('dashboard.pages.index') }}">
                            <i class="fa fa-folder-open"></i> @lang('site.pages_index')
                        </a>
                    </li>
                    @foreach (pages() as $page)
                        <li
                            class="page-list {{ route('dashboard.pages.edit', $page->id) == url()->current() ? 'active' : '' }}">
                            <a href="{{ route('dashboard.pages.edit', $page->id) }}">
                                <i class="fa fa-file-code-o"></i> {{ $page->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-share"></i>
                    <span>@lang('site.settings')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-folder pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="page-list {{ route('dashboard.settings.index') == url()->current() ? 'active' : '' }}">
                        <a href="{{ route('dashboard.settings.index') }}">
                            <i class="fa fa-folder-open"></i> @lang('site.pages_index')
                        </a>
                    </li>
                    <li class="page-list {{ route('dashboard.settings.index') == url()->current() ? 'active' : '' }}">
                        <a href="{{ route('dashboard.settings.all_settings') }}">
                            <i class="fa  fa-gear"></i> @lang('site.settings')
                        </a>
                    </li>
                </ul>
            </li> --}}

        </ul>

    </section>

</aside>

@push('scripts')
    <script>
        // $('.treeview').click(function(){
        //     $(this).addClass('active').siblings().removeClass('active');
        // });
        if ($('.page-list').hasClass('active')) {
            $('.treeview').addClass('active');
        }

    </script>
@endpush
