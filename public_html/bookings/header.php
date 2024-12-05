<?php

//ini_set('display_errors', 1);
?>
<!--w3l-header-->
<style>
    .nav-item.dropdown:hover .dropdown-menu {
        display: block;
    }

    .dropdown-menu {
        display: none;
        position: absolute;
        background-color: #fff;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    }
    .w3l-header-nav {
  padding: 20px 0;
 <?php if(!empty($primary_color )) { ?> background-color: <?php echo $primary_color; ?>; <?php }else { ?>  background-color: #ffffff; <?php   } ?>
   }
  .w3l-header-nav .dropdown-toggle::after {
    display: none; }
  .w3l-header-nav .navbar-nav .nav-link {
    background: none;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 600;
    display: block;
    line-height: 26px;
    padding: 0 15px; }
  .w3l-header-nav .dropdown-item {
    background: transparent;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 600;
    display: block;
    line-height: 26px;
    padding: 5px 15px;
    color: rgba(0, 0, 0, 0.5); }
  .w3l-header-nav .dropdown-item:hover {
    color: rgba(0, 0, 0, 0.9); }
  .w3l-header-nav a.dropdown-item.active {
    color: rgba(0, 0, 0, 0.9); }
  .w3l-header-nav .navbar-light a.navbar-brand {
    color: #f57b51;
    font-weight: 700;
    font-size: 30px;
    letter-spacing: -1px;
    padding: 0;
    display: grid;
    grid-template-columns: auto auto;
    grid-gap: 10px;
    margin: 0; }
  .w3l-header-nav button.navbar-toggler .icon-close {
    display: block; }
  .w3l-header-nav button.navbar-toggler .icon-expand {
    display: none; }
  .w3l-header-nav button.navbar-toggler.collapsed .icon-close {
    display: none; }
  .w3l-header-nav button.navbar-toggler.collapsed .icon-expand {
    display: block; }
  @media (max-width: 991px) {
    .w3l-header-nav .navbar-nav .nav-link {
      padding: 5px 15px; }
    .w3l-header-nav .dropdown-menu {
      margin: 5px 15px; }
    .w3l-header-nav .navbar-light .navbar-toggler {
      border-color: transparent;
      outline: none;
      padding: 0; }
    .w3l-header-nav .navbar-light .navbar-toggler span.fa {
      font-size: 24px;
      margin-top: -4px; }
    .w3l-header-nav .navbar-collapse {
      max-height: calc(100vh - 100px);
      overflow: auto;
      background: #f6f6f6;
      border-radius: 10px;
      padding: 15px 5px 25px; } }
.nav {
  display: flex;
  flex-wrap: wrap;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }

.nav-link {
  display: block;
  padding: 0.5rem 1rem; }
  .nav-link:hover, .nav-link:focus {
    text-decoration: none; }
  .nav-link.disabled {
    color: #6c757d;
    pointer-events: none;
    cursor: default; }

.nav-tabs {
  border-bottom: 1px solid #dee2e6; }
  .nav-tabs .nav-item {
    margin-bottom: -1px; }
  .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
      border-color: #e9ecef #e9ecef #dee2e6; }
    .nav-tabs .nav-link.disabled {
      color: #6c757d;
      background-color: transparent;
      border-color: transparent; }
  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff; }
  .nav-tabs .dropdown-menu {
    margin-top: -1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0; }

.nav-pills .nav-link {
  border-radius: 0.25rem; }

.nav-pills .nav-link.active,
.nav-pills .show > .nav-link {
  color: #fff;
  background-color: #d63447; }

.nav-fill .nav-item {
  flex: 1 1 auto;
  text-align: center; }

.nav-justified .nav-item {
  flex-basis: 0;
  flex-grow: 1;
  text-align: center; }

.tab-content > .tab-pane {
  display: none; }

.tab-content > .active {
  display: block; }

.navbar {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  padding: 0.5rem 1rem; }
  .navbar .container,
  .navbar .container-fluid, .navbar .container-sm, .navbar .container-md, .navbar .container-lg, .navbar .container-xl {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between; }

.navbar-brand {
  display: inline-block;
  padding-top: 0.3125rem;
  padding-bottom: 0.3125rem;
  margin-right: 1rem;
  font-size: 1.25rem;
  line-height: inherit;
  white-space: nowrap; }
  .navbar-brand:hover, .navbar-brand:focus {
    text-decoration: none; }

.navbar-nav {
  display: flex;
  flex-direction: column;
  padding-left: 0;
  margin-bottom: 0;
  list-style: none; }
  .navbar-nav .nav-link {
    padding-right: 0;
    padding-left: 0; }
  .navbar-nav .dropdown-menu {
    position: static;
    float: none; }

.navbar-text {
  display: inline-block;
  padding-top: 0.5rem;
  padding-bottom: 0.5rem; }

.navbar-collapse {
  flex-basis: 100%;
  flex-grow: 1;
  align-items: center; }

.navbar-toggler {
  padding: 0.25rem 0.75rem;
  font-size: 1.25rem;
  line-height: 1;
  background-color: transparent;
  border: 1px solid transparent;
  border-radius: 0.25rem; }
  .navbar-toggler:hover, .navbar-toggler:focus {
    text-decoration: none; }

.navbar-toggler-icon {
  display: inline-block;
  width: 1.5em;
  height: 1.5em;
  vertical-align: middle;
  content: "";
  background: no-repeat center center;
  background-size: 100% 100%; }

@media (max-width: 575.98px) {
  .navbar-expand-sm > .container,
  .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 576px) {
  .navbar-expand-sm {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-sm .navbar-nav {
      flex-direction: row; }
      .navbar-expand-sm .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-sm .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-sm > .container,
    .navbar-expand-sm > .container-fluid, .navbar-expand-sm > .container-sm, .navbar-expand-sm > .container-md, .navbar-expand-sm > .container-lg, .navbar-expand-sm > .container-xl {
      flex-wrap: nowrap; }
    .navbar-expand-sm .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-sm .navbar-toggler {
      display: none; } }

@media (max-width: 767.98px) {
  .navbar-expand-md > .container,
  .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 768px) {
  .navbar-expand-md {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-md .navbar-nav {
      flex-direction: row; }
      .navbar-expand-md .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-md .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-md > .container,
    .navbar-expand-md > .container-fluid, .navbar-expand-md > .container-sm, .navbar-expand-md > .container-md, .navbar-expand-md > .container-lg, .navbar-expand-md > .container-xl {
      flex-wrap: nowrap; }
    .navbar-expand-md .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-md .navbar-toggler {
      display: none; } }

@media (max-width: 991.98px) {
  .navbar-expand-lg > .container,
  .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 992px) {
  .navbar-expand-lg {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-lg .navbar-nav {
      flex-direction: row; }
      .navbar-expand-lg .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-lg .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-lg > .container,
    .navbar-expand-lg > .container-fluid, .navbar-expand-lg > .container-sm, .navbar-expand-lg > .container-md, .navbar-expand-lg > .container-lg, .navbar-expand-lg > .container-xl {
      flex-wrap: nowrap; }
    .navbar-expand-lg .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-lg .navbar-toggler {
      display: none; } }

@media (max-width: 1199.98px) {
  .navbar-expand-xl > .container,
  .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
    padding-right: 0;
    padding-left: 0; } }

@media (min-width: 1200px) {
  .navbar-expand-xl {
    flex-flow: row nowrap;
    justify-content: flex-start; }
    .navbar-expand-xl .navbar-nav {
      flex-direction: row; }
      .navbar-expand-xl .navbar-nav .dropdown-menu {
        position: absolute; }
      .navbar-expand-xl .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand-xl > .container,
    .navbar-expand-xl > .container-fluid, .navbar-expand-xl > .container-sm, .navbar-expand-xl > .container-md, .navbar-expand-xl > .container-lg, .navbar-expand-xl > .container-xl {
      flex-wrap: nowrap; }
    .navbar-expand-xl .navbar-collapse {
      display: flex !important;
      flex-basis: auto; }
    .navbar-expand-xl .navbar-toggler {
      display: none; } }

.navbar-expand {
  flex-flow: row nowrap;
  justify-content: flex-start; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
    padding-right: 0;
    padding-left: 0; }
  .navbar-expand .navbar-nav {
    flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
      position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
      padding-right: 0.5rem;
      padding-left: 0.5rem; }
  .navbar-expand > .container,
  .navbar-expand > .container-fluid, .navbar-expand > .container-sm, .navbar-expand > .container-md, .navbar-expand > .container-lg, .navbar-expand > .container-xl {
    flex-wrap: nowrap; }
  .navbar-expand .navbar-collapse {
    display: flex !important;
    flex-basis: auto; }
  .navbar-expand .navbar-toggler {
    display: none; }

.navbar-light .navbar-brand {
  color: rgba(0, 0, 0, 0.9); }
  .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
    color: rgba(0, 0, 0, 0.9); }
.navbar-light .navbar-nav .nav-link {
    <?php if (!empty($nav_item_color)) : ?>
        color: <?php echo $nav_item_color; ?>;
    <?php else : ?>
        color: black;
    <?php endif; ?>
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
    <?php if (!empty($nav_item_color)) : ?>
        color: darken(<?php echo $nav_item_color; ?>, 10%); /* Darken the color by 10% */
    <?php else : ?>
        color: darken(black, 10%);
    <?php endif; ?>
}
  .navbar-light .navbar-nav .nav-link.disabled {
    color: rgba(0, 0, 0, 0.3); }

.navbar-light .navbar-nav .show > .nav-link,
.navbar-light .navbar-nav .active > .nav-link,
.navbar-light .navbar-nav .nav-link.show,
.navbar-light .navbar-nav .nav-link.active {
  color: rgba(0, 0, 0, 0.9); }

.navbar-light .navbar-toggler {
  color: rgba(0, 0, 0, 0.5);
  border-color: rgba(0, 0, 0, 0.1); }

.navbar-light .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-light .navbar-text {
  color: rgba(0, 0, 0, 0.5); }
  .navbar-light .navbar-text a {
    color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
      color: rgba(0, 0, 0, 0.9); }

.navbar-dark .navbar-brand {
  color: #fff; }
  .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
    color: #fff; }

.navbar-dark .navbar-nav .nav-link {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
    color: rgba(255, 255, 255, 0.75); }
  .navbar-dark .navbar-nav .nav-link.disabled {
    color: rgba(255, 255, 255, 0.25); }

.navbar-dark .navbar-nav .show > .nav-link,
.navbar-dark .navbar-nav .active > .nav-link,
.navbar-dark .navbar-nav .nav-link.show,
.navbar-dark .navbar-nav .nav-link.active {
  color: #fff; }

.navbar-dark .navbar-toggler {
  color: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.1); }

.navbar-dark .navbar-toggler-icon {
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

.navbar-dark .navbar-text {
  color: rgba(255, 255, 255, 0.5); }
  .navbar-dark .navbar-text a {
    color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
      color: #fff; }
      .w3l-blog .room-info .btn {
    padding: 0;
  /*  color: #f57b51;*/
 
  <?php if(!empty($link_color )) { ?> color: <?php echo $link_color; ?>; <?php }else { ?>  color: #f57b51; <?php   } ?>
    transition: 0.3s ease-in-out;
    font-weight: 600;
    border-radius: 0;
}


.cont-details span.fa {
  font-size: 22px;
  color: green;
  display: block;
  margin-top: 3px; }


.btn-secondary {
    color: #212529;
    <?php if(!empty($button_color)) : ?>
       border-color: <?php echo $button_color; ?>;
        background-color: <?php echo $button_color; ?>;
    <?php else : ?>
        background-color: #d63447;
    border-color: #f57b51;
    <?php endif; ?>
   
}

.btn-secondary:hover {
    color: #fff;
  background-color: rgba(<?php echo hexToRgb($button_color, 1); ?>, 0.7); /* Reduce opacity to 70% (0.7) */
    /*border-color: #f25621;*/
}

.btn-secondary:focus,
.btn-secondary.focus {
    color: #fff;
    /*background-color: #f3602d;*/
    border-color: #f25621;
    box-shadow: 0 0 0 0.2rem rgba(213, 110, 75, 0.5);
}

.btn-secondary.disabled,
.btn-secondary:disabled {
    color: #212529;
    background-color: #f57b51;
    border-color: #f57b51;
}

.btn-secondary:not(:disabled):not(.disabled):active,
.btn-secondary:not(:disabled):not(.disabled).active,
.show>.btn-secondary.dropdown-toggle {
    color: #fff;
    background-color: #f25621;
    border-color: #f24d15;
}

.btn-secondary:not(:disabled):not(.disabled):active:focus,
.btn-secondary:not(:disabled):not(.disabled).active:focus,
.show>.btn-secondary.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.2rem rgba(213, 110, 75, 0.5);
}
a {
  /*color: #d63447;*/
   <?php if(!empty($link_color )) { ?> color: <?php echo $link_color; ?>; <?php }else { ?>  color: #d63447; <?php   } ?>
  text-decoration: none;
  background-color: transparent; }
  a:hover {
    color: #9e202f;
    text-decoration: underline; }

a:not([href]) {
  color: inherit;
  text-decoration: none; }
  a:not([href]):hover {
    color: inherit;
    text-decoration: none; }

    .w3l-footer-29-main #movetop {
    display: none;
    position: fixed;
    bottom: 90px;
    right: 15px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    cursor: pointer;
    color: #fff;
    width: 36px;
    height: 36px;
    background-color: <?php if (!empty($button_color)) echo $button_color; else echo '#f57b51'; ?>;
    padding: 0;
    line-height: 36px;
    border-radius: 4px;
    transition: 0.3s ease-out;
}

.w3l-footer-29-main #movetop:hover {
    background-color: <?php if (!empty($primary_color)) echo darkenColor($primary_color, 10); else echo '#d63447'; ?>;
    transform: translate3d(0, -5px, 0);
    -webkit-transform: translate3d(0, -5px, 0);
    transition: 0.3s ease-out;
}

.social-icons-section a {
  border-radius: 50px;
  display: inline-block;
  background: var(--theme-light);
  width: 40px;
  height: 40px;
  line-height: 40px;
  text-align: center;
  /*color: #f57b51;*/
   color: <?php if (!empty($primary_color)) echo darkenColor($primary_color, 10); else echo '#f57b51'; ?>;
  margin: 0 2px; }

.social-icons-section a span.fa {
  line-height: 40px; }

.team-grids img {
  border-radius: 10px;
  border: 1px solid #dedede;
  width: 100%; }

.social-icons-section a:hover {
  color: var(--theme-light);
  background: #f57b51; }

.room-single-block .content-with-slider span.price {
    /*color: #f57b51;*/
    <?php if(!empty($button_color )) { ?> color: <?php echo $button_color; ?>; <?php }else { ?>  color: #ffffff; <?php   } ?>
    font-size: 25px;
    font-weight: 600;
    line-height: 30px;
}
.room-single-block .border-line:after {
    position: absolute;
    content: '';
   
    <?php if(!empty($button_color )) { ?> 
 border: 2px solid <?php echo $button_color; ?>;
       <?php }else { ?>   border: 2px solid #f57b51; <?php   } ?>
    top: 20px;
    bottom: 20px;
    left: 0;
    right: 0;
    width: 300px;
    margin: auto;
    z-index: -1;
    border-radius: 10px;
}
</style>
<?php
// Function to convert HEX to RGB
function hexToRgb($hex, $alpha = 1) {
    $hex = ltrim($hex, '#');
    $length = strlen($hex);
    list($r, $g, $b) = str_split($hex, $length / 3);
    return "($r, $g, $b, $alpha)";
}
?>
<?php
// Function to darken a color by a percentage (e.g., 10%)
function darkenColor($color, $percentage) {
    $percentage = 100 - $percentage;
    list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");
    $r = floor($r * $percentage / 100);
    $g = floor($g * $percentage / 100);
    $b = floor($b * $percentage / 100);
    return sprintf("#%02x%02x%02x", $r, $g, $b);
}
?>

<script>
    document.querySelector('.nav-item.dropdown').addEventListener('mouseleave', function () {
        document.querySelector('.dropdown-menu').style.display = 'none';
    });
</script>

<header class="w3l-header-nav">
	<!--/nav-->
	<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
		<div class="container">
			<a class="navbar-brand" href="./">
				<?php if (!empty($hotel_logo)) {
    ?>
    <img src="<?php echo $hotel_logo; ?>" style="height: 60px; width: 110%; " />
<?php }else{ echo $hotel_name;
 } ?> </a>
			<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index">Home
</a>
					</li>
					<li class="nav-item @@about__active">
						<a class="nav-link" href="about">About </a>
					</li>
					<!-- New item with dropdown for More Properties -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="morePropertiesDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More Properties
                        </a>
                        <div class="dropdown-menu" aria-labelledby="morePropertiesDropdown">
                          <!--   <a class="dropdown-item" href="./more-property">Property 1</a>
                            <a class="dropdown-item" href="./more-property">Property 2</a> -->
                         <!--  -->

    <?php foreach ($hotel_list_data as $list_data): ?>
      <a class="dropdown-item" href="./single-property?hotel_id=<?php echo $list_data->hotel_id; ?>"><?php echo $list_data->name; ?></a>
    <?php endforeach; ?>


                            <!-- Add more property links as needed -->
                        </div>
                    </li>
					<li class="nav-item @@services__active">
						<a class="nav-link" href="rooms">rooms</a>
					</li>
					<li class="nav-item @@contact__active">
						<a class="nav-link" href="./contact">Contact</a>
					</li>

				</ul>
				<a href="<?php echo$booking_url; ?>" target="_blank" class="ml-3 book btn btn-secondary btn-style"   >Book Now</a>
			</div>
		</div>
	</nav>
	<!--//nav-->
</header>
<!-- //w3l-header -->
