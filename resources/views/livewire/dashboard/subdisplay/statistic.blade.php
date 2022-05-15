<div class="row" x-data="{open: false}">
    <div class="col-sm-12">
        <div class="statistics-details d-flex justify-content-between">
            <div>
                <p class="statistics-title">PRK</p>
                <h3 class="rate-percentage">{{ $data['prk']['number'] }}</h3>
                <p class="d-flex mb-0">&nbsp;</p>
                <a href="javascript:void(0)" @click="open = !open" x-html="open ? '<i class=\'mdi mdi-eye-off\'></i> <span>Sembunyikan</span>' : '<i class=\'mdi mdi-eye\'></i> <span>Lihat detail</span>'" style="color: #aaa; font-size: .7rem" class="text-decoration-none" role="button"></a>
                <div x-show="open" class="mt-3">
                    <label for="" class="text-small"><i class="mdi mdi-sigma"></i> Total</label>
                    <p>Rp12.123.123.124,-</p>
                </div>
            </div>
            <div>
                <p class="statistics-title">SKKI</p>
                <h3 class="rate-percentage">7,682</h3>
                <p class="d-flex mb-0"><span class="text-success me-1">+0.1%</span><span style="color: #666; font-size: .6rem">thd. PRK</span></p>
                <a href="javascript:void(0)" @click="open = !open" x-html="open ? '<i class=\'mdi mdi-eye-off\'></i> <span>Sembunyikan</span>' : '<i class=\'mdi mdi-eye\'></i> <span>Lihat detail</span>'"  style="color: #aaa; font-size: .7rem" class="text-decoration-none" role="button"></a>
                <div x-show="open" class="mt-3">
                    <label for="" class="text-small"><i class="mdi mdi-sigma"></i> Total</label>
                    <p>Rp34.344.344.344,-</p>
                    <label for="" class="text-small"><i class="mdi mdi-human-handsdown"></i> Jasa</label>
                    <p>Rp12.123.123.123,-</p>
                    <label for="" class="text-small"><i class="mdi mdi-package-variant"></i> Material</label>
                    <p>Rp34.344.344.344,-</p>
                </div>
            </div>
            <div>
                <p class="statistics-title">Pengadaan</p>
                <h3 class="rate-percentage">68.8</h3>
                <p class="d-flex mb-0"><span class="text-success me-1">+0.1%</span><span style="color: #666; font-size: .6rem">thd. SKKI</span></p>
                <a href="javascript:void(0)" @click="open = !open" x-html="open ? '<i class=\'mdi mdi-eye-off\'></i> <span>Sembunyikan</span>' : '<i class=\'mdi mdi-eye\'></i> <span>Lihat detail</span>'"  style="color: #aaa; font-size: .7rem" class="text-decoration-none" role="button"></a>
                <div x-show="open" class="mt-3">
                    <label for="" class="text-small"><i class="mdi mdi-sigma"></i> Total</label>
                    <p>Rp34.344.344.344,-</p>
                    <label for="" class="text-small"><i class="mdi mdi-human-handsdown"></i> Jasa</label>
                    <p>Rp12.123.123.123,-</p>
                    <label for="" class="text-small"><i class="mdi mdi-package-variant"></i> Material</label>
                    <p>Rp34.344.344.344,-</p>
                </div>
                </p>
            </div>
            <div class="d-none d-md-block">
                <p class="statistics-title">Kontrak</p>
                <h3 class="rate-percentage">2m:35s</h3>
                <p class="d-flex mb-0"><span class="text-success me-1">+0.1%</span><span style="color: #666; font-size: .6rem">thd. Pengadaan</span></p>
                <a href="javascript:void(0)" @click="open = !open" x-html="open ? '<i class=\'mdi mdi-eye-off\'></i> <span>Sembunyikan</span>' : '<i class=\'mdi mdi-eye\'></i> <span>Lihat detail</span>'"  style="color: #aaa; font-size: .7rem" class="text-decoration-none" role="button"></a>
                <div x-show="open" class="mt-3">
                    <label for="" class="text-small"><i class="mdi mdi-sigma"></i> Total</label>
                    <p>Rp34.344.344.344,-</p>
                    <label for="" class="text-small"><i class="mdi mdi-human-handsdown"></i> Jasa</label>
                    <p>Rp12.123.123.123,-</p>
                    <label for="" class="text-small"><i class="mdi mdi-package-variant"></i> Material</label>
                    <p>Rp34.344.344.344,-</p>
                </div>
            </div>
            <div class="d-none d-md-block">
                <p class="statistics-title">Pelaksanaan</p>
                <h3 class="rate-percentage">68.8</h3>
                <p class="d-flex mb-0"><span class="text-success me-1">+0.1%</span><span style="color: #666; font-size: .6rem">thd. Kontrak</span></p>
                <a href="javascript:void(0)" @click="open = !open" x-html="open ? '<i class=\'mdi mdi-eye-off\'></i> <span>Sembunyikan</span>' : '<i class=\'mdi mdi-eye\'></i> <span>Lihat detail</span>'"  style="color: #aaa; font-size: .7rem" class="text-decoration-none" role="button"></a>
                <div x-show="open" class="mt-3">
                    <label for="" class="text-small"><i class="mdi mdi-sigma"></i> Total</label>
                    <p>Rp34.344.344.344,-</p>
                    <label for="" class="text-small"><i class="mdi mdi-human-handsdown"></i> Jasa</label>
                    <p>Rp12.123.123.123,-</p>
                    <label for="" class="text-small"><i class="mdi mdi-package-variant"></i> Material</label>
                    <p>Rp34.344.344.344,-</p>
                </div>
                </p>
            </div>
            <div class="d-none d-md-block">
                <p class="statistics-title">Pembayaran</p>
                <h3 class="rate-percentage">2m:35s</h3>
                <p class="d-flex mb-0"><span class="text-success me-1">+0.1%</span><span style="color: #666; font-size: .6rem">thd. Pelaksanaan</span></p>
                <a href="javascript:void(0)" @click="open = !open" x-html="open ? '<i class=\'mdi mdi-eye-off\'></i> <span>Sembunyikan</span>' : '<i class=\'mdi mdi-eye\'></i> <span>Lihat detail</span>'"  style="color: #aaa; font-size: .7rem" class="text-decoration-none" role="button"></a>
                <div x-show="open" class="mt-3">
                    <label for="" class="text-small"><i class="mdi mdi-sigma"></i> Total</label>
                    <p>Rp34.344.344.344,-</p>
                </div>
            </div>
        </div>
    </div>
</div>