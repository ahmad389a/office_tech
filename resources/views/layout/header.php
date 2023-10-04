<div class="container-fluid navbar-container" style="background: #FFF;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand"><img src="../../../public/images/home-logo1.png" alt="logo"></a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-start mt-4" id="navbarCollapse">
                        <div class="navbar-nav">
                        </div>
                        <form class="d-flex">
                            <div class="input-group search-field-div">
                                <button class="search-field-btn mx-1"><i class="bi-search"></i></button>
                                <input type="text" class="search-field" placeholder="Search">
                            </div>
                        </form>
                        <div class="navbar-nav mx-3">
                            <a class="nav-item nav-link btn btn-text">Track Order <img src="../../../public/images/fluent_box-search-20-filled.png" alt="Order" class="order-img"></a>
                            <a href="nav-item nav-link" style="margin-top: 10px; margin-left: 32px;"><img src="../../../public/images/lang.png" alt=""></a>
        
                            <!-- User Dropdown -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link user-a dropdown-toggle" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hello Jack <img src="../../../public/images/fa6-solid_user.png" class="user-img" alt="user-icon">
                                </a>
                                <div class="dropdown-menu" aria-labelledby="userDropdown">
                                    <a class="dropdown-item user-icon-dropdown" href="#">My Orders</a>
                                    <a class="dropdown-item user-icon-dropdown" href="#">Settings</a>
                                    <a class="dropdown-item user-icon-dropdown" href="#">Logout</a>
                                </div>
                            </div>
        
                            <a href="#" class="nav-item nav-link" style="margin-left: 32px; position: relative;">
                                <img src="../../../public/images/fa-solid_shopping-cart.png" alt="">
                                <span class="badge" style="color: black;">5</span>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid categories-container">
        <ul class="main-nav">
            <li data-width="150">
                <a href="#" class="main-category-li">Computers & Workstations</a>
                <ul class="sub-nav">
                    <li><a href="#">Home Theater Projectors</a></li>
                    <li><a href="#">Short-Throw</a></li>
                </ul>
            </li>
            <li data-width="150">
                <a href="#" class="main-category-li">Computers & Workstations</a>
                <ul class="sub-nav">
                    <li><a href="#">Short-Throw and Ultra-Short Throw Projectors</a></li>
                    <li><a href="#">Portable Projectors</a></li>
                    <li><a href="#">Gaming Projectors</a></li>
                    <li><a href="#">Pico Projectors</a></li>
                </ul>
            </li>
        </ul>
    </div>
<script>
    // JavaScript to set sub-nav width based on content
    document.addEventListener("DOMContentLoaded", function () {
    var subNavs = document.querySelectorAll(".sub-nav");

    subNavs.forEach(function (subNav) {
        var parentLi = subNav.closest("li");
        var subNavLinks = subNav.querySelectorAll("a");
        var maxWidth = 0;

        // Calculate the maximum width based on the content
        subNavLinks.forEach(function (link) {
        var linkWidth = link.getBoundingClientRect().width;
        if (linkWidth > maxWidth) {
            maxWidth = linkWidth;
        }
        });

        // Set the sub-nav width based on the content or the data-width attribute
        if (parentLi && parentLi.dataset.width) {
        subNav.style.width = parentLi.dataset.width + "px";
        } else {
        subNav.style.width = maxWidth + "px";
        }
    });
    });
</script>