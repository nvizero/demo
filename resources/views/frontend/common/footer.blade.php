<footer class="bg-green page text-white">
    <div class="container">
        <div class="row     align-items-end">
            <div class="mb-lg-0 mb-4 col-lg-2">
                <div class="infoBox">
                    <div><i class="bi bi-telephone-fill"></i> Tel <a href="tel:+886-3-6670300">+886-3-6670300</a></div>
                    <div><i class="bi bi-newspaper"></i> Fax +886-3-5583011</div>
                    <div></div>
                </div>
            </div>
            <div class="mb-lg-0 mb-4 col-lg-5">
                <i class="bi bi-envelope-fill"></i>{{ __("contacts.email") }}：<a href="/contact#section11">Sales@fumagnet.com</a> <br>
                <!--
                <i class="bi bi-geo-alt-fill" style="display:none;"></i> {{ __("contacts.address") }}：
54041南投縣南投市新興路327巷2號
                    <small class="d-block"> No.2, Ln 327, Nanxin Rd. Nantou City,Nantou Country 54041 Taiwan(R.O.C)</small>
                  -->
            </div>
            <div class="mb-lg-0 mb-4 col-lg-5">


                <i class="bi bi-geo-alt-fill"></i> {{ __("contacts.factroy") }}：
{{ __("contacts.factory_add") }}
<small class="d-block">Jinlida, Stamping Park, Wuzhong Dist., Suzhou City, Jiangxian, China</small>
            </div>

            <div class="col-12 text-center">
        <p class="copyright">

                                    @if (App::getLocale() == 'cn')
          Copyright © 富磁特科技. All rights reserved.
                                    @else
          Copyright © Full Magnetic Tech. Co., Ltd.
                                    @endif
        </p>
            </div>
        </div>
    </div>
</footer>

<script>
    $("section").attr("data-aos", "fade-up").attr("data-aos-delay", "100");
    $(".unitTitle").attr("data-aos", "fade-up").attr("data-aos-delay", "100");
    AOS.init({
        duration: 1500,
        anchorPlacement: 'center-center',
    });
</script>
