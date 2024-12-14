<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            @yield('title')
        </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->


        <style>
            body {
                font-family: 'Inter', sans-serif;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
   <body class="bg-slate-50">
    <header class="sticky top-0 inset-x-0 flex flex-wrap sm:justify-start sm:flex-nowrap z-[48] w-full bg-white border-b text-sm h-16 sm:py-4 lg:pl-64 dark:bg-gray-800 dark:border-gray-700">
        <nav class="flex basis-full items-center w-full mx-auto px-4 sm:px-6 md:px-8">
            <div class="w-full flex items-center justify-end ml-auto sm:justify-between sm:gap-x-3 sm:order-3">
                <div class="sm:block">
                    <label for=""></label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pointer-events-none z-20 pl-4">
                            <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>
                        </div>
                        <input type="text" placeholder="Cari" class="py-2 px-4 pl-11 block w-full border rounded-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                    </div>
                </div>
                <div class="flex flex-row items-center justify-end gap-2">
                    <button class="inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-gray-800 dark:hover:bg-slate-800 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800">
                        <box-icon color="grey" name='bell'></box-icon>
                    </button>
                    <div class="hs-dropdown relative inline-flex">
                        <button id="hs-dropdown-with-header" class="hs-dropdown-toggle inline-flex flex-shrink-0 justify-center items-center gap-2 h-[2.375rem] w-[2.375rem] rounded-full font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-gray-800 dark:hover:bg-slate-800 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800">
                            <img src="{{ asset('assets/img/avatar.png')}}" alt="" class="inline-block h-[2.375rem] w-[2.375rem] rounded-full ring-2 ring-white dark:ring-gray-800">
                        </button>
                    <div class="hs-dropdown-menu transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 min-w-[15rem] bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 block"
                    aria-labelledby="hs-dropdown-with-header" style="transform: translate3d(-32px, 64px, 0px); position: fixed; inset: 0px 0px auto auto; margin: 0px;" data-popper-placement="bottom-end">
                        <div class="py-3 px-5 -m-2 bg-gray-100 rounded-t-lg dark:bg-gray-700">
                            <p class="text-sm text-gray-500 dark:text-gray-400">Hai, User</p>
                            <p class="text-sm font-medium text-gray-800 dark:text-gray-300">admin@gmail.com</p>
                        </div>
                        <div class="mt-4 bg-white">
                            <a href="" class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300">
                            <box-icon name='cog' ></box-icon>
                                Setting
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <aside class="hs-sidebar hs-sidebar-open:translate-x-0-translate-x-full transition-all duration-300 transform hidden fixed top-0 left-0 bottom-0 z-[60] w-64 bg-white border-r border-gray-200 overflow-y-auto scrollbar-y lg:block lg:translate-x-0 lg:right-auto lg:bottom-0 dark:scrollbar-y dark:bg-gray-800 dark:border-gray-700">
        <div class="hs-sidebar-logo flex items-center px-6 py-4 border h-16">
            <img src="" class="border mr-4" alt="logo">
            <span>LOGO</span>
        </div>
        <nav class="p-4 w-full flex flex-col flex-wrap">
            <ul class="space-y-1.5">
                <li>
                    <a href="/" class="flex items-center gap-x-3 py-2 px-2.5 bg-gray-100 text-sm text-slate-700 rounded-md dark:bg-slate-700 dark:text-white">
                    <div class="bg-white shadow-md border border-slate-50 flex items-center w-8 h-8 justify-center rounded-lg">
                        <box-icon color="grey" name='dashboard' type="solid"></box-icon>
                    </div>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/networks" class="flex items-center gap-x-3 py-2 px-2.5 text-sm hover:bg-gray-100 text-slate-700 rounded-md dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">

                    <div class="bg-white shadow-md border border-slate-50 flex items-center w-8 h-8 justify-center rounded-lg">
                        <box-icon color="grey" name='network-chart'></box-icon>
                    </div>
                        Jaringan
                    </a>
                </li>
                <li class="hs-accordion-group">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                        <div class="hs-accordion-toggle px-2.5 pr-0 text-sm gap-x-3 relative text-slate-700 rounded-md hs-accordion-active:text-slate-400 group py-2 inline-flex items-center w-full font-semibold text-left text-gray-800 transition hover:bg-gray-100 hover:text-gray-500 dark:hs-accordion-active:text-slate-400 dark:text-gray-200 dark:hover:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                            <div class="bg-white shadow-md border border-slate-50 flex items-center w-8 h-8 justify-center rounded-lg">
                                <box-icon color="grey" name='pin' ></box-icon>
                            </div>
                            <span>Pin</span>
                            <div class="absolute right-2">
                                <box-icon class="hs-accordion-active:hidden hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 block rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-down'></box-icon>
                                <box-icon class="hs-accordion-active:block hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 hidden rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-up' ></box-icon></div>
                            </div>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 pl-6 py-2" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <a href="/pin" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Data Pin
                                </a>
                            </div>
                    </div>
                </li>
                <li class="hs-accordion-group">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                        <div class="hs-accordion-toggle px-2.5 pr-0 text-sm gap-x-3 relative text-slate-700 rounded-md hs-accordion-active:text-slate-400 group py-2 inline-flex items-center w-full font-semibold text-left text-gray-800 transition hover:bg-gray-100 hover:text-gray-500 dark:hs-accordion-active:text-slate-400 dark:text-gray-200 dark:hover:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                            <div class="bg-white shadow-md border border-slate-50 flex items-center w-8 h-8 justify-center rounded-lg">
                                <box-icon color="grey" type='solid' name='cart-alt'></box-icon>
                            </div>
                            <span>Produk</span>
                            <div class="absolute right-2">
                                <box-icon class="hs-accordion-active:hidden hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 block rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-down'></box-icon>
                                <box-icon class="hs-accordion-active:block hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 hidden rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-up' ></box-icon></div>
                            </div>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 pl-6 py-2" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <a href="/product-order" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Pesanan Produk
                                </a>
                                <a href="" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Riwayat Order
                                </a>
                            </div>
                    </div>
                </li>
                <li class="hs-accordion-group">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                        <div class="hs-accordion-toggle px-2.5 pr-0 text-sm gap-x-3 relative text-slate-700 rounded-md hs-accordion-active:text-slate-400 group py-2 inline-flex items-center w-full font-semibold text-left text-gray-800 transition hover:bg-gray-100 hover:text-gray-500 dark:hs-accordion-active:text-slate-400 dark:text-gray-200 dark:hover:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                            <div class="bg-white shadow-md border border-slate-50 flex items-center w-8 h-8 justify-center rounded-lg">
                                <box-icon color="grey" name='bookmarks' type='solid' ></box-icon>
                            </div>
                            <span>History</span>
                            <div class="absolute right-2">
                                <box-icon class="hs-accordion-active:hidden hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 block rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-down'></box-icon>
                                <box-icon class="hs-accordion-active:block hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 hidden rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-up' ></box-icon></div>
                            </div>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 pl-6 py-2" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <a href="" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Komisi Sponsor
                                </a>
                                <a href="" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Komisi Pasangan
                                </a>
                                <a href="" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Komisi Cashback
                                </a>
                                <a href="" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Poin RO
                                </a>
                            </div>
                    </div>
                </li>

                <li class="hs-accordion-group">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                        <div class="hs-accordion-toggle px-2.5 pr-0 text-sm gap-x-3 relative text-slate-700 rounded-md hs-accordion-active:text-slate-400 group py-2 inline-flex items-center w-full font-semibold text-left text-gray-800 transition hover:bg-gray-100 hover:text-gray-500 dark:hs-accordion-active:text-slate-400 dark:text-gray-200 dark:hover:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                            <div class="bg-white shadow-md border border-slate-50 flex items-center w-8 h-8 justify-center rounded-lg">
                                <box-icon color="grey" name='gift'></box-icon>
                            </div>
                            <span>Hadiah</span>
                            <div class="absolute right-2">
                                <box-icon class="hs-accordion-active:hidden hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 block rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-down'></box-icon>
                                <box-icon class="hs-accordion-active:block hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 hidden rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-up' ></box-icon></div>
                            </div>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 pl-6 py-2" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <a href="/withDrawal" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Penarikan
                                </a>
                                <a href="" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Poin
                                </a>
                            </div>
                    </div>
                </li>
                <li class="hs-accordion-group">
                    <div class="hs-accordion" id="hs-basic-with-title-and-arrow-stretched-heading-one">
                        <div class="hs-accordion-toggle px-2.5 pr-0 text-sm gap-x-3 relative text-slate-700 rounded-md hs-accordion-active:text-slate-400 group py-2 inline-flex items-center w-full font-semibold text-left text-gray-800 transition hover:bg-gray-100 hover:text-gray-500 dark:hs-accordion-active:text-slate-400 dark:text-gray-200 dark:hover:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
                            <div class="bg-white shadow-md border border-slate-50 flex items-center w-8 h-8 justify-center rounded-lg">
                                <box-icon color="grey" type='solid' name='cog'></box-icon>
                            </div>
                            <span>Pengaturan</span>
                            <div class="absolute right-2">
                                <box-icon class="hs-accordion-active:hidden hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 block rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-down'></box-icon>
                                <box-icon class="hs-accordion-active:block hs-accordion-active:text-slate-400 hs-accordion-active:group-hover:text-slate-400 hidden rounded-full text-gray-600 group-hover:text-gray-500 dark:text-gray-400 cursor-pointer" name='chevron-up' ></box-icon></div>
                            </div>
                            <div id="hs-basic-with-title-and-arrow-stretched-collapse-one" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300 pl-6 py-2" aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
                                <a href="/settingWithdrawal" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Pengaturan Penarikan
                                </a>
                                <a href="/settingAccount" class="inline-flex items-center gap-x-3 hover:bg-gray-100 text-sm rounded w-full px-2.5 py-2">
                                    <div class="bg-white shadow-sm flex items-center w-8 h-8 justify-center rounded-md">
                                        <box-icon name='radio-circle' ></box-icon>
                                    </div>
                                    Pengaturan Akun
                                </a>
                            </div>
                    </div>
                </li>
            </ul>
        </nav>
    </aside>
    <main class="w-full pt-10 px-4 sm:px-6 md:px-8 lg:pl-72">
        <div class="mb-4">
            {!!Breadcrumbs::render() !!}
        </div>
        <div id="dismiss-alert" class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 rounded-md p-4 mb-6" role="alert">
            <div class="flex">
                <div class="flex-shrink-0">
                <box-icon color="teal" name='info-circle' type='solid' ></box-icon>
                </div>
                <div class="ml-3">
                <span class="text-sm text-teal-800 font-medium">
                    <span>Pesan</span></br>
                    Selamat datang di control admin. Tingkatkan share, traffic, posting dan order dengan berbagi melalui media sosial
                </span>
                </div>
                <div class="pl-3 ml-auto">
                <div class="-mx-1.5 -my-1.5">
                    <button type="button" class="inline-flex bg-teal-50 rounded-md p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-teal-50 focus:ring-teal-600" data-hs-remove-element="#dismiss-alert">
                    <span class="sr-only">Dismiss</span>
                    <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z" fill="currentColor"/>
                    </svg>
                    </button>
                </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-6 mb-6 w-full xl:grid-cols-2 2xl:grid-cols-4">
            <div class="bg-white shadow-sm rounded-md p-4">
                <div class="flex items-center">
                    <div class="inline-flex flex-shrink-0 justify-center items-center w-12 h-12 text-white bg-gradient-to-tl from-blue-500 to-blue-600 rounded-lg shadow-md shadow-gray-300">
                        <box-icon color="white" name='user' type='solid'></box-icon>
                    </div>
                    <div class="flex-shrink-0 ml-3">
                        <span class="text-2xl font-bold leading-none text-gray-900">20</span>
                        <h3 class="text-base font-normal text-gray-500">Total User</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-sm rounded-md p-4">
                <div class="flex items-center">
                    <div class="inline-flex flex-shrink-0 justify-center items-center w-12 h-12 text-white bg-gradient-to-tl from-blue-500 to-blue-600 rounded-lg shadow-md shadow-gray-300">
                        <box-icon color="white" name='dollar-circle' type='solid' ></box-icon>
                    </div>
                    <div class="flex-shrink-0 ml-3">
                        <span class="text-2xl font-bold leading-none text-gray-900">20</span>
                        <h3 class="text-base font-normal text-gray-500">Total RO</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-sm rounded-md p-4">
                <div class="flex items-center">
                    <div class="inline-flex flex-shrink-0 justify-center items-center w-12 h-12 text-white bg-gradient-to-tl from-blue-500 to-blue-600 rounded-lg shadow-md shadow-gray-300">
                        <box-icon color="white" name='dollar-circle' type='solid' ></box-icon>
                    </div>
                    <div class="flex-shrink-0 ml-3">
                        <span class="text-2xl font-bold leading-none text-gray-900">20</span>
                        <h3 class="text-base font-normal text-gray-500">Total Komisi</h3>
                    </div>
                </div>
            </div>
            <div class="bg-white shadow-sm rounded-md p-4">
                <div class="flex items-center">
                    <div class="inline-flex flex-shrink-0 justify-center items-center w-12 h-12 text-white bg-gradient-to-tl from-blue-500 to-blue-600 rounded-lg shadow-md shadow-gray-300">
                        <box-icon color="white" name='dollar-circle' type='solid' ></box-icon>
                    </div>
                    <div class="flex-shrink-0 ml-3">
                        <span class="text-2xl font-bold leading-none text-gray-900">20</span>
                        <h3 class="text-base font-normal text-gray-500">Total Komisi</h3>
                    </div>
                </div>
            </div>
        </div>
        @yield('main')

    </main>
   <script src="{{ asset('assets/js/hs-ui.bundle.js') }}"></script>
   <script src="{{ asset('assets/js/boxicons.js') }}"></script>
   </body>
</html>
