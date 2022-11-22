 <aside
     class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-white"
     id="sidenav-main">
     <div class="sidenav-header">
         <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
             aria-hidden="true" id="iconSidenav"></i>
         <a class="navbar-brand m-0" href=" {{ url('dashboard') }} " target="_self">
             <img src="../admin/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
             <span class="ms-1 font-weight-bold text-dark">Red's Computer</span>
         </a>
     </div>
     <hr class="horizontal light mt-0 mb-2">
     <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
         <ul class="navbar-nav">
             <li class="nav-item">
                 <a href="{{ url('dashboard') }}"
                     class="nav-link {{ Request::is('dashboard') ? 'active bg-gradient-primary text-white' : 'text-dark ' }} " "
                   >
                   <i class="material-icons-round">dashboard</i>
                   <span class="nav-link-text ms-2 ps-1">Dashboard</span>
               </a>
             </li>
             <li class="nav-item">
                 <a data-bs-toggle="collapse" href="#categorysidenav"
                     class="nav-link text-dark {{ Request::is('add-category', 'categories') ? 'active' : '' }} " "
                     aria-expanded="false">
                     <i class="material-icons-round">category</i>
                     <span class="nav-link-text ms-2 ps-1">Categories</span>
                 </a>
                 <div class="collapse {{ Request::is('add-category', 'categories') ? 'show' : '' }} "
                     id="categorysidenav">
                     <ul class="nav ">
                         <li class="nav-item ">
                             <a class="nav-link text-dark {{ Request::is('add-category') ? 'active bg-gradient-primary' : '' }}"
                                 href="{{ url('add-category') }}">
                                 <span class="sidenav-mini-icon"> C </span>
                                 <span class="sidenav-normal  ms-2  ps-1"> Add Category </span>
                             </a>
                         </li>
                         <li class="nav-item ">
                             <a class="nav-link text-dark {{ Request::is('categories') ? 'active bg-gradient-primary' : '' }}"
                                 href="{{ url('categories') }}">
                                 <span class="sidenav-mini-icon"> C </span>
                                 <span class="sidenav-normal  ms-2  ps-1">Category List</span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="nav-item">
                 <a data-bs-toggle="collapse" href="#productsidenav"
                     class="nav-link text-dark {{ Request::is('add-products', 'products') ? 'active' : '' }} " "
                     aria-expanded="false">
                     <i class="material-icons-round">inventory_2</i>
                     <span class="nav-link-text ms-2 ps-1">Products</span>
                 </a>
                 <div class="collapse {{ Request::is('add-products', 'products') ? 'show' : '' }} "
                     id="productsidenav">
                     <ul class="nav ">
                         <li class="nav-item ">
                             <a class="nav-link text-dark {{ Request::is('add-products') ? 'active bg-gradient-primary' : '' }}"
                                 href="{{ url('add-products') }}">
                                 <span class="sidenav-mini-icon"> P </span>
                                 <span class="sidenav-normal  ms-2  ps-1"> Add Product </span>
                             </a>
                         </li>
                         <li class="nav-item ">
                             <a class="nav-link text-dark {{ Request::is('products') ? 'active bg-gradient-primary' : '' }}"
                                 href="{{ url('products') }}">
                                 <span class="sidenav-mini-icon"> P </span>
                                 <span class="sidenav-normal  ms-2  ps-1">Product List</span>
                             </a>
                         </li>
                     </ul>
                 </div>
             </li>
             <li class="nav-item">
                <a href="{{ url('orders') }}"
                    class="nav-link {{ Request::is('orders') ? 'active bg-gradient-primary text-white' : 'text-dark ' }} " "
                  >
                  <i class="material-icons-round">list_alt</i>
                  <span class="nav-link-text ms-2 ps-1">Orders</span>
              </a>
            </li>
             <li class="nav-item">
                <a href="{{ url('users') }}"
                    class="nav-link {{ Request::is('users') ? 'active bg-gradient-primary text-white' : 'text-dark ' }} " "
                  >
                  <i class="material-icons-round">group</i>
                  <span class="nav-link-text ms-2 ps-1">Users</span>
              </a>
            </li>
         </ul>
     </div>
 </aside>
