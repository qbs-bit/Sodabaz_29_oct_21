@if(Auth::user()->role->role == "admin")

<!-- admin side bar-->
<div  class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" nav-item {{ (request()->is('home')) ? 'active' : '' }}">
        <a href="{{url('home')}}"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.animation.main">Dashboard</span></a>
      </li>
      <li class=" nav-item"><a href=""><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Requests</span></a>
        <ul class="menu-content">
          <li class="nav-item {{ (request()->is('view_requests')) ? 'active' : '' }}"><a class="menu-item" href="{{url('view_requests')}}" data-i18n="nav.dash.ecommerce">View Requests</a>
          </li>
          <li class="nav-item {{ (request()->is('view_users')) ? 'active' : '' }}"> <a class="menu-item" href="{{url('view_users')}}" data-i18n="nav.dash.crypto">View Users</a>
          </li>
        </ul>
      </li>
      <li class=" nav-item {{ (request()->is('support')) ? 'active' : '' }}">
        <a href="{{url('support')}}"><i class="la la-envelope"></i><span class="menu-title" data-i18n="nav.animation.main">Support</span></a>
      </li>
      <li class=" nav-item {{ (request()->is('enquiry_fields')) ? 'active' : '' }}">
        <a href="{{url('enquiry_fields')}}"><i class="la la-unlock"></i><span class="menu-title" data-i18n="nav.animation.main">Enquiry Fields</span></a>
      </li>
       <li class=" nav-item"><a href=""><i class="la la-bell"></i><span class="menu-title" data-i18n="nav.dash.main">Annoucements
        </span></a>
            <ul class="menu-content">
                <li class="{{ (request()->is('product_announcements')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('product_announcements')}}" data-i18n="nav.dash.crypto">
                    Product Announcements
                  </a>
                </li>
                <li class="{{ (request()->is('company_announcements')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('company_announcements')}}" data-i18n="nav.dash.crypto">
                    Company Announcements
                  </a>
                </li>
            </ul>
        </li>
      <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Settings
        </span></a>
            <ul class="menu-content">
                <li class="{{ (request()->is('profile')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('profile')}}" data-i18n="nav.dash.crypto">
                    Update Profile
                  </a>
                </li>
                <li class="{{ (request()->is('change_password')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('change_password')}}" data-i18n="nav.dash.crypto">
                    Change Password
                  </a>
                </li>
            </ul>
        </li>
    </ul>
  </div>
</div>
<!-- admin side bar end-->
@elseif(Auth::user()->role->role == "mills")

<!-- mills side bar-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
      <ul class="navigation navigation-main" role="navigation" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item {{ (request()->is('home')) ? 'active' : '' }}">
          <a href="{{url('home')}}"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.animation.main">Dashboard</span></a>
        </li>
        <!---
      <li class=" nav-item">
        <a href="{{url('mills/marketplace')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.animation.main">Marketplace</span></a>
      </li>
      ---->
      <li class="nav-item"><a href=""><i class="la la-clipboard"></i><span class="menu-title">Inventory Manage</span></a>
         <ul class="menu-content">
            <li class="{{ (request()->is('mills/manage_category')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_category')}}">Category</a>
            </li>
            
            <li><a class="menu-item" href="{{url('mills/manage_sub_category')}}" >Subcategory</a>
            </li>
            
            
            <li class="{{ (request()->is('mills/manage_unit')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_unit')}}" >Units</a>
            </li>
            
            <li class="{{ (request()->is('mills/manage_product')) ? 'active' : '' }} {{ (request()->is('mills/add_products')) ? 'active' : '' }}">
              <a class="menu-item" href="{{url('mills/manage_product')}}" data-i18n="nav.dash.sales">
                Product
              </a>
            </li>

            <li class="{{ (request()->is('mills/manage_stock')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_stock')}}">Stock</a>
            </li>
         </ul>
        </li>
        <!---
          <li class=" nav-item"><a href="{{url('website/index')}}"><i class="la la-puzzle-piece"></i><span class="menu-title" data-i18n="nav.animation.main">Buy Product</span></a>
            </li>
            
            <li class=" nav-item"><a href="{{url('website/index')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.animation.main">Orders</span></a>
            </li>
            
            <li class=" nav-item"><a href=""><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.dash.main">Manage Rfqs</span></a>
                <ul class="menu-content">
                  <li class="{{ (request()->is('mills/add_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/add_rfq')}}" data-i18n="nav.dash.ecommerce">Add Rfqs</a>
                  </li>
                  <li class="{{ (request()->is('mills/view_rfq')) ? 'active' : '' }} {{ (request()->is('mills/submitted_quotations/id')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/view_rfq')}}" data-i18n="nav.dash.crypto">View Rfqs</a>
                  </li>
                  <li class="{{ (request()->is('mills/new_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/new_rfq')}}" data-i18n="nav.dash.crypto">New Rfqs</a>
                  </li>
                  <li class="{{ (request()->is('mills/accepted_quotations')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/accepted_quotations')}}" data-i18n="nav.dash.crypto">Accepted Quotations</a>
                  </li>
                </ul>
            </li>
            --->
            <li class=" nav-item"><a href=""><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.dash.main">Manage Enquiries</span></a>
              <ul class="menu-content">
                  <li class="{{ (request()->is('mills/add_enquiries')) ? 'active' : '' }}">
                    <a class="menu-item" href="{{url('mills/add_enquiries')}}" data-i18n="nav.dash.ecommerce">Add Enquiries</a>
                  </li>
                  <li class="{{ (request()->is('mills/view_enquiries')) ? 'active' : '' }}">
                    <a class="menu-item" href="{{url('mills/view_enquiries')}}" data-i18n="nav.dash.ecommerce">View Enquiries</a>
                  </li>
                  <li class="{{ (request()->is('mills/enquiries_bid')) ? 'active' : '' }}">
                    <a class="menu-item" href="{{url('mills/enquiries_bid')}}" data-i18n="nav.dash.ecommerce">Enquiries Bids</a>
                  </li>
                  <!-----
                  <li class="{{ (request()->is('mills/view_rfq')) ? 'active' : '' }} {{ (request()->is('mills/submitted_quotations/id')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/view_rfq')}}" data-i18n="nav.dash.crypto">View Rfqs</a>

                  </li>
                  <li class="{{ (request()->is('mills/new_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/new_rfq')}}" data-i18n="nav.dash.crypto">New Rfqs</a>
                  </li>
                  <li class="{{ (request()->is('mills/accepted_quotations')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/accepted_quotations')}}" data-i18n="nav.dash.crypto">Accepted Quotations</a>
                  </li>
                  ------->
              </ul>
            </li>
            <li class=" nav-item {{ (request()->is('mills/accepted_requests')) ? 'active' : '' }}"><a href="{{url('mills/accepted_requests')}}"><i class="la la-map"></i><span class="menu-title">Accepted Requests</span></a>

            <li class=" nav-item  {{ (request()->is('chatify')) ? 'active' : '' }}"><a href="{{url('/chatify')}}"><i class="la la-comments"></i><span class="menu-title">Messenger</span></a>
            </li>

            <li class=" nav-item "><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Bidding Details
            </span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('your_bids')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/your_bids')}}" data-i18n="nav.dash.crypto">
                        Your Bids
                      </a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li class="{{ (request()->is('accepted_bids')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/accepted_bids')}}" data-i18n="nav.dash.crypto">
                        Accepted Bids
                      </a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li class="{{ (request()->is('biddings')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/biddings')}}" data-i18n="nav.dash.crypto">
                        Bids on My Products
                      </a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Settings
            </span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('mills/profile')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('mills/profile')}}" data-i18n="nav.dash.crypto">
                        Update Profile
                      </a>
                    </li>
                    <li class="{{ (request()->is('change_password')) ? 'active' : '' }}">
                  <a class="menu-item" href="{{url('change_password')}}" data-i18n="nav.dash.crypto">
                    Change Password
                  </a>
                </li>
                </ul>
            </li>
         </ul>
  </div>
</div>
<!-- mills side bar end-->
<!-- transpoters -->
@elseif(Auth::user()->role->role == "transporter")
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class=" nav-item"><a href="{{url('transporter/services')}}"><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.animation.main">Services</span></a>
    </li>
     <li class=" nav-item"><a href="{{url('transporter/requests')}}"><i class="la la-file-text"></i><span class="menu-title">Requests</span></a>
    </li>
    <li class=" nav-item"><a href="{{url('/chatify')}}"><i class="la la-comments"></i><span class="menu-title">Messenger</span></a>
        </li>
    </ul>
  </div>
</div>
<!-- end transpoters -->

@elseif(Auth::user()->role->role == "agents")

<!-- agents side bar-->
<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" role="navigation" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" nav-item {{ (request()->is('home')) ? 'active' : '' }}">
          <a href="{{url('home')}}"><i class="la la-navicon"></i><span class="menu-title" data-i18n="nav.animation.main">Dashboard</span></a>
        </li>
        <!---
        <li class=" nav-item">
          <a href="{{url('mills/marketplace')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.animation.main">Marketplace</span></a>
        </li>
        ---->
        <!-----
        <li class=" nav-item"><a href=""><i class="la la-clipboard"></i><span class="menu-title" data-i18n="nav.dash.main">Inventory Manage</span></a>
          <ul class="menu-content">
              <li class="{{ (request()->is('mills/manage_category')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_category')}}" data-i18n="nav.dash.ecommerce">Category</a>
              </li>
              
              <li><a class="menu-item" href="{{url('mills/manage_sub_category')}}" data-i18n="nav.dash.crypto">Manage Sub Category</a>
              </li>
              
              <li class="{{ (request()->is('mills/manage_unit')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_unit')}}" data-i18n="nav.dash.sales">Units</a>
              </li>

              <li class="{{ (request()->is('mills/manage_product')) ? 'active' : '' }} {{ (request()->is('mills/add_products')) ? 'active' : '' }}">
                <a class="menu-item" href="{{url('mills/manage_product')}}" data-i18n="nav.dash.sales">Product
              </a>
              </li>

              <li class="{{ (request()->is('mills/manage_stock')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/manage_stock')}}">Stock</a>
              </li>
            
          </ul>
        </li>
        ----->
        <!---
            <li class=" nav-item"><a href="{{url('website/index')}}"><i class="la la-puzzle-piece"></i><span class="menu-title" data-i18n="nav.animation.main">Buy Product</span></a>
            </li>
            
            <li class=" nav-item"><a href="{{url('website/index')}}"><i class="la la-bar-chart"></i><span class="menu-title" data-i18n="nav.animation.main">Orders</span></a>
            </li>
        --->
        <!----
        <li class=" nav-item"><a href=""><i class="la la-file-text"></i><span class="menu-title" data-i18n="nav.dash.main">Manage Rfqs</span></a>
          <ul class="menu-content">
              <li class="{{ (request()->is('mills/add_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/add_rfq')}}" data-i18n="nav.dash.ecommerce">Add Rfqs</a>
              </li>
              <li class="{{ (request()->is('mills/view_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/view_rfq')}}" data-i18n="nav.dash.crypto">View Rfqs</a>

              </li>
              <li class="{{ (request()->is('mills/new_rfq')) ? 'active' : '' }}"><a class="menu-item" href="{{url('mills/new_rfq')}}" data-i18n="nav.dash.crypto">New Rfqs Requests</a>
              
              </li>
              
          </ul>
        </li>
        ----->
        <!----
        <li class="nav-item {{ (request()->is('mills/accepted_requests')) ? 'active' : '' }}"><a href="{{url('mills/accepted_requests')}}"><i class="la la-map"></i><span class="menu-title">Accepted Requests</span></a>
        </li>
        ----->


        <li class=" nav-item {{ (request()->is('chatify')) ? 'active' : '' }}"><a href="{{url('/chatify')}}"><i class="la la-comments"></i><span class="menu-title">Messenger</span></a>
        </li>

        <!----
        <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Bidding Details
            </span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('your_bids')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/your_bids')}}" data-i18n="nav.dash.crypto">
                        Your Bids
                      </a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li class="{{ (request()->is('accepted_bids')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/accepted_bids')}}" data-i18n="nav.dash.crypto">
                        Accepted Bids
                      </a>
                    </li>
                </ul>
                <ul class="menu-content">
                    <li class="{{ (request()->is('biddings')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('/biddings')}}" data-i18n="nav.dash.crypto">
                        Bids on My Products
                      </a>
                    </li>
                </ul>
            </li>
        --->
        <li class=" nav-item"><a href=""><i class="la la-user"></i><span class="menu-title" data-i18n="nav.dash.main">Settings
            </span></a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('mills/profile')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('mills/profile')}}" data-i18n="nav.dash.crypto">
                        Update Profile
                      </a>
                    </li>
                    <li class="{{ (request()->is('change_password')) ? 'active' : '' }}">
                      <a class="menu-item" href="{{url('change_password')}}" data-i18n="nav.dash.crypto">
                        Change Password
                     </a>
                </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- agents side bar end-->
@endif