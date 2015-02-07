<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="index.html">
                    {{ HTML::image('assets/' . $path . '/images/logo.png', "image") }}
                </a>
            </div>
            <div class="h_icon">
                <ul class="icon1 sub-icon1">
                    <li><a href="#">Login</a></li>
                    <li><a class="active-icon c1" href="#"><i>$300</i></a>
                        <ul class="sub-icon1 list">
                            <li><h3>shopping cart empty</h3><a href=""></a></li>
                            <li><p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to view them</p></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="h_search">
                <form>
                    <input type="text" value="">
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="header_btm">
    <div class="wrap">
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li class="active"><a href="{{ URL::to('/') }}">Home</a></li> |
                    <li><a href="{{ URL::to('/gallery') }}">Catalog</a></li> |
                    <li><a href="{{ URL::to('/blog') }}">Blog</a></li> |
                    <li><a href="{{ URL::to('/checkout') }}">Checkout</a></li> |
                    <li><a href="{{ URL::to('/contact') }}">About us</a></li> |

                </ul>
            </div>
            <div class="top-nav">
                <nav class="nav">             
                    <a href="#" id="w3-menu-trigger"> </a>
                    <ul class="nav-list" style="">
                        <li class="nav-item"><a class="active" href="index.html">Home</a></li>
                        <li class="nav-item"><a href="sale.html">Sale</a></li>
                        <li class="nav-item"><a href="handbags.html">Handbags</a></li>
                        <li class="nav-item"><a href="accessories.html">Accessories</a></li>
                        <li class="nav-item"><a href="shoes.html">Shoes</a></li>
                        <li class="nav-item"><a href="service.html">Services</a></li>
                        <li class="nav-item"><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
                <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div>
                <div class="clear"> </div>

            </div>       
            <div class="clear"></div>
        </div>
    </div>
</div>
</div>