<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        #body-row {
            margin-left: 0;
            margin-right: 0;
        }

        #sidebar-container {
            min-height: 100vh;
            background-color: white;
            padding: 0;
        }

        /* Sidebar sizes when expanded and expanded */
        .sidebar-expanded {
            width: 230px;
        }

        .sidebar-collapsed {
            width: 60px;
        }

        /* Menu item*/
        #sidebar-container .list-group a {
            height: 50px;
            color: black;
        }

        /* Submenu item*/
        #sidebar-container .list-group .sidebar-submenu a {
            height: 45px;
            padding-left: 30px;
        }

        .sidebar-submenu {
            font-size: 0.9rem;
        }

        /* Separators */
        .sidebar-separator-title {
            /*background-color: #333;*/
            height: 35px;
        }

        .sidebar-separator {
            /*background-color: #333;*/
            height: 25px;
        }

        .logo-separator {
            /*background-color: #333;    */
            height: 60px;
        }

        /* Closed submenu icon */
        #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
            content: " \f0d7";
            font-family: FontAwesome;
            display: inline;
            text-align: right;
            padding-left: 10px;
        }

        /* Opened submenu icon */
        #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
            content: " \f0da";
            font-family: FontAwesome;
            display: inline;
            text-align: right;
            padding-left: 10px;
        }

        #body-col {
            background-color: #333;
        }
    </style>


    <script>
        // Hide submenus
        $('#body-row .collapse').collapse('hide');

        // Collapse/Expand icon
        $('#collapse-icon').addClass('fa-angle-double-left');

        // Collapse click
        $('[data-toggle=sidebar-colapse]').click(function() {
            SidebarCollapse();
        });

        function SidebarCollapse() {
            $('.menu-collapsed').toggleClass('d-none');
            $('.sidebar-submenu').toggleClass('d-none');
            $('.submenu-icon').toggleClass('d-none');
            $('#sidebar-container').toggleClass('sidebar-expanded sidebar-collapsed');

            // Treating d-flex/d-none on separators with title
            var SeparatorTitle = $('.sidebar-separator-title');
            if (SeparatorTitle.hasClass('d-flex')) {
                SeparatorTitle.removeClass('d-flex');
            } else {
                SeparatorTitle.addClass('d-flex');
            }

            // Collapse/Expand icon
            $('#collapse-icon').toggleClass('fa-angle-double-left fa-angle-double-right');
        }
    </script>
</head>

<body>
    <!-- Bootstrap row -->
    <div class="row" id="body-row">
        <!-- Sidebar -->
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
            <!-- Bootstrap List Group -->
            <ul class="list-group">
                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>MAIN MENU</small>
                </li>
                <!-- /END Separator -->
                <!-- Menu with submenu -->
                <a href="#" data-toggle="sidebar-colapse" class="bg-light list-group-item list-group-item-action d-flex align-items-center">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                        <span id="collapse-text" class="menu-collapsed">Collapse</span>
                    </div>
                </a>
                <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-filter fa-fw mr-3"></span>
                        <span class="menu-collapsed">Filters</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id='submenu1' class="collapse sidebar-submenu card">
                    <article class="card-group-item">
                        <header class="card-header">
                            <h6 class="title">Department </h6>
                        </header>
                        <div class="filter-content">
                            <div class="card-body">
                                <form>
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
                                            Mersedes Benz
                                        </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
                                            Nissan Altima
                                        </span>
                                    </label> <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" type="checkbox" value="">
                                        <span class="form-check-label">
                                            Another Brand
                                        </span>
                                    </label> <!-- form-check.// -->
                                </form>
                            </div> <!-- card-body.// -->
                        </div>
                    </article> <!-- card-group-item.// -->
                </div>
                <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fal fa-sitemap fa-fw mr-3"></span>
                        <span class="menu-collapsed">Layouts</span>
                        <span class="submenu-icon ml-auto"></span>
                    </div>
                </a>
                <!-- Submenu content -->
                <div id='submenu2' class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-light">
                        <span class="menu-collapsed">Settings</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">
                        <span class="menu-collapsed">Password</span>
                    </a>
                </div>
                <a href="#" class="bg-light list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-tasks fa-fw mr-3"></span>
                        <span class="menu-collapsed">Functions</span>
                    </div>
                </a>
                <!-- Separator with title -->
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <small>OPTIONS</small>
                </li>
                <!-- /END Separator -->
                <a href="#" class="bg-light list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-edit fa-fw mr-3"></span>
                        <span class="menu-collapsed">Edit Styles</span>
                    </div>
                </a>
                <!-- Separator without title -->
                <li class="list-group-item sidebar-separator menu-collapsed"></li>
                <!-- /END Separator -->
                <a href="#" class="bg-light list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-question fa-fw mr-3"></span>
                        <span class="menu-collapsed">Help</span>
                    </div>
                </a>

            </ul><!-- List Group END-->
        </div><!-- sidebar-container END -->

        <!-- MAIN -->
        <div class="col bg-dark" id="body-col">
            <div id="cy">
            </div>
        </div><!-- Main Col END -->

    </div><!-- body-row END -->
</body>

</html>