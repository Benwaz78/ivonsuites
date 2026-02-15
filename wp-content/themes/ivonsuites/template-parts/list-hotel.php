    <div class="container py-5">

        <div class="row">

            <div class="col">

                <ul class="nav nav-pills nav-pills-center sort-source text-2 text-uppercase mb-4 mt-0" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                    <li class="nav-item active" data-option-value="*"><a class="nav-link text-uppercase font-weight-bold text-3 active" href="#">Show All</a></li>
                    <li class="nav-item" data-option-value=".rooms"><a class="nav-link text-uppercase font-weight-bold text-3" href="#">Rooms</a></li>
                    <li class="nav-item" data-option-value=".apartments"><a class="nav-link text-uppercase font-weight-bold text-3" href="#">Apartment</a></li>
                </ul>

                <div class="sort-destination-loader sort-destination-loader-showing mb-0">
                    <?php  get_template_part('template-parts/rooms/room', 'loop');  ?>
                </div>

            </div>

        </div>

    </div>