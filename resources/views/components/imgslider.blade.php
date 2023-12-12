<div class="owl-carousel owl-theme">
    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s1.png') }}" alt="">
            {{-- <h3>
                Someone Famous 1
            </h3> --}}
        </div>
    </div>

    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s2.jpg') }}" alt="">
        </div>
    </div>

    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s3.png') }}" alt="">
        </div>
    </div>

    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s4.jpg') }}" alt="">
        </div>
    </div>

    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s6.png') }}" alt="">
        </div>
    </div>
    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s5.jpg') }}" alt="">
        </div>
    </div>
    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s10.png') }}" alt="">
        </div>
    </div>

    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s9.jpg') }}" alt="">
        </div>
    </div>

    <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s8.png') }}" alt="">
        </div>
    </div>
    {{-- <div class="item">
        <div class="carousel-item">
            <img src="{{ url('/public/assets/img/all/s7.jpg') }}" alt="">
        </div>
    </div> --}}
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>
<br>
