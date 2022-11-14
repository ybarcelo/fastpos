<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="categories-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="{{ __('Category management') }}"></x-navbars.navs.auth>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card my-4">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <h6 class="text-white text-capitalize ps-3">{{ __('Categories') }}</h6>
                                </div>
                            </div>
                            <div class="card-body px-0 pb-2">
                                <div class="table-responsive p-0">
                                    <table class="table align-items-center mb-0">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    {{ __('Name') }}</th>
                                 

                                                     <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    {{ __('Action') }}</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('assets') }}/img/icons/drinks_icon.png"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Bebidas</h6>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                        
                                                     
                                                <td class="align-middle">
                                                    <a href="javascript:;"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        {{ __('Edit') }}
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        {{ __('Delete') }}
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="{{ asset('assets') }}/img/icons/entry.jpg"
                                                                class="avatar avatar-sm me-3 border-radius-lg"
                                                                alt="user2">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">Entradas</h6>
                                                            
                                                        </div>
                                                    </div>
                                                </td>
                                              
                                                <td class="align-middle">
                                                    <a href="javascript:;"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        {{ __('Edit') }}
                                                    </a>
                                                    <a href="javascript:;"
                                                        class="text-secondary font-weight-bold text-xs"
                                                        data-toggle="tooltip" data-original-title="Edit user">
                                                        {{ __('Delete') }}
                                                    </a>
                                                </td>

                                           
                                            </tr>
                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <x-footers.auth></x-footers.auth>
            </div>
        </main>
    <x-plugins></x-plugins>

</x-layout>
