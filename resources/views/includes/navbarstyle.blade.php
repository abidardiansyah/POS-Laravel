<style>

.header {
    position: fixed;
    height: 70px;
    width: calc(100% - 280px);
    background: #fff;
    right: 0;
    top: 0;
    z-index: 123;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    -webkit-box-shadow: 0 0 25px rgba(0,0,0,.1);
    box-shadow: 0 0 25px rgba(0,0,0,.1)
}

.header-left {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    height: 100%;
    width: 50%
}

.brand-logo a .dark-logo,.header-left .menu-icon,.header-left .search-toggle-icon,.sidebar-light .brand-logo a .light-logo,.sidebar-menu .submenu li.dropdown:before {
    display: none
}

.header-left .header-search {
    width: 100%;
    padding-left: 20px
}

.header-left .header-search .form-group,.sidebar-menu .submenu li {
    position: relative
}

.header-left .header-search .search-icon {
    position: absolute;
    left: 17px;
    top: 12px;
    font-size: 20px;
    color: #777
}

.header-left .header-search .dropdown {
    position: static;
    right: 0;
    top: 0;
    padding-right: 10px
}

.header-left .header-search .dropdown .dropdown-toggle {
    position: absolute;
    right: 0;
    top: 0;
    width: 45px;
    height: 45px;
    font-size: 20px;
    line-height: 45px;
    text-align: center;
    border-radius: 0 .25rem .25rem 0;
    color: #777;
    -webkit-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out
}

.contact-directory-box:hover .view-contact a,.header-left .header-search .dropdown .dropdown-toggle:hover,.header-left .header-search .dropdown.show .dropdown-toggle {
    background: #1b00ff;
    color: #fff
}

.header-left .header-search .dropdown .dropdown-menu {
    width: 100%;
    min-width: 100%;
    margin-top: 5px;
    padding: 20px
}

.header-left .header-search .search-input {
    padding-left: 50px;
    padding-right: 55px
}

.header-right {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    height: 70px;
    width: 50%
}

.header-left .brand-logo {
    max-width: 180px;
    display: block
}

.header-right .brand-logo a {
    padding: 0 6px
}

.header-right .menu-icon {
    position: relative;
    right: 0;
    float: left;
    display: none
}

.user-info-dropdown {
    padding: 5px 10px 5px 0
}

.user-info-dropdown .dropdown-toggle {
    display: block;
    padding: 5px 0;
    font-size: 16px
}

.user-info-dropdown .dropdown-toggle .user-icon {
    width: 52px;
    height: 52px;
    font-size: 24px;
    background: #ebeff3;
    color: #1b00ff;
    line-height: 52px;
    text-align: center;
    display: inline-block;
    vertical-align: middle;
    border-radius: 100%;
    -webkit-box-shadow: 0 0 10px rgba(0,0,0,.18);
    box-shadow: 0 0 10px rgba(0,0,0,.18)
}

.user-info-dropdown .dropdown-toggle .user-name {
    font-weight: 500;
    display: inline-block;
    vertical-align: middle;
    margin-left: 5px;
    color: #131e22;
    font-family: 'Inter',sans-serif
}

.user-info-dropdown .dropdown-menu {
    min-width: 185px
}

.dropdown-menu-icon-list .dropdown-item {
    position: relative;
    padding-left: 45px
}

.dropdown-menu-icon-list .dropdown-item i {
    position: absolute;
    left: 16px;
    top: 50%;
    font-size: 18px;
    -webkit-transform: translate(0,-50%);
    transform: translate(0,-50%)
}

.user-notification {
    float: right;
    margin-right: 10px;
    padding: 22px 5px 10px 0
}

.user-notification .dropdown-toggle {
    font-size: 20px;
    padding: 10px;
    color: #555;
    position: relative
}

.user-notification .dropdown-toggle .badge {
    position: absolute;
    right: 8px;
    top: 10px;
    background: #f5678a;
    width: 5px;
    height: 5px;
    display: block;
    padding: 0
}

.user-notification .dropdown-menu {
    width: 400px;
    padding: 20px 10px
}

.notification-list ul li a {
    display: block;
    position: relative;
    padding: 10px 15px 10px 75px;
    min-height: 75px;
    color: #666;
    font-size: 14px;
    font-weight: 500;
    font-family: 'Inter',sans-serif;
    border-radius: 5px
}

.notification-list ul li a img {
    width: 50px;
    height: 50px;
    position: absolute;
    left: 10px;
    top: 13px;
    border-radius: 10px;
    -webkit-box-shadow: 1px 2px 13px rgba(0,0,0,.2);
    box-shadow: 1px 2px 13px rgba(0,0,0,.2)
}

.notification-list ul li a h3 {
    font-size: 16px;
    color: #202342;
    font-weight: 700;
    text-transform: capitalize;
    font-family: 'Inter',sans-serif;
    padding-bottom: 5px
}

.notification-list ul li a h3 span {
    float: right;
    font-size: 12px;
    font-weight: 500;
    padding-top: 2px
}

.header-dark .header,.header-dark .header-left .header-search {
    background: #0b132b
}

.header-dark .header .user-info-dropdown .dropdown-toggle,.header-dark .header .user-info-dropdown .dropdown-toggle .user-name,.header-dark .menu-icon,.header-dark .search-toggle-icon,.header-dark .user-notification .dropdown-toggle {
    color: #ecf0f4
}

.header-dark .header .header-left .header-search .search-input {
    background: rgba(236,236,236,.1);
    border-color: transparent;
    color: #ecf0f4
}

.header-dark .header .header-left .header-search .search-input:focus {
    border-color: #4b4d50
}

.header-dark .header .header-left .header-search .search-input::-webkit-input-placeholder {
    opacity: 1;
    color: #bfc4ca
}

.header-dark .header .header-left .header-search .search-input:-moz-placeholder,.header-dark .header .header-left .header-search .search-input::-moz-placeholder {
    opacity: 1;
    color: #bfc4ca
}

.header-dark .header .header-left .header-search .search-input:-ms-input-placeholder {
    opacity: 1;
    color: #bfc4ca
}

.header-dark .header .header-left .header-search .search-icon {
    color: #ecf0f4
}

</style>