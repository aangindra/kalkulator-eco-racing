<div class="row" style="max-width: 100%">
  <div class="col-md-12">
    <div class="eco-card card text-center">
      <div class="card-header" style="background-color: #6a9087; color: #fff;"><h4>Kalkulator Eco Racing</h4></div>
      <div class="card-body" style="padding: 0 0 1.25rem 0">
        <ul class="eco-nav nav nav-tabs justify-content-center" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" href="#pertaliteMobil" role="tab" data-toggle="tab">Pertalite Mobil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pertamaxMobil" role="tab" data-toggle="tab">Pertamax Mobil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#solar" role="tab" data-toggle="tab">Solar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pertaliteMotor" role="tab" data-toggle="tab">Pertalite Motor</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#pertamaxMotor" role="tab" data-toggle="tab">Pertamax Motor</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="eco-tab tab-content">
          <div role="tabpanel" class="tab-pane fade in active" data-type-bbm="PERTALITE_MOBIL" id="pertaliteMobil">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Masukan Penggunaan Premium Per Bulan (Rp.)</label>
                  <p id="textError" class="text-danger d-none" style="margin-bottom: 0.5em;">jumlah uang tidak valid!</p>
                  <input type="number" class="form-control" placeholder="contoh: 100000">
                </div>
                <!-- <button type="button" class="eco-btn btn btn-success calculate">Hitung</button> -->
              </div>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-md-8">
                <ul class="list-group eco-result d-none mb-5" style="margin: 0;">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Premium per bulan
                    <span class="eco-badge konsumsi-per-bulan">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Harga Pertalite per liter
                    <span class="eco-badge harga">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengunaan Premium (liter per bulan)
                    <span class="eco-badge penggunaan-per-liter">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Asumsi Penghematan BBM 40%
                    <span class="eco-badge asumsi">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga ecer
                    <span class="eco-badge harga-ecer">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga member
                    <span class="eco-badge harga-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan non member
                    <span class="penghematan-non-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan member
                    <span class="penghematan-member">0</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" data-type-bbm="PERTAMAX_MOBIL" id="pertamaxMobil">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Masukan Penggunaan Premium Per Bulan (Rp.)</label>
                  <p id="textError" class="text-danger d-none" style="margin-bottom: 0.5em;">jumlah uang tidak valid!</p>
                  <input type="text" class="form-control" placeholder="contoh: 100000">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-md-8">
                <ul class="list-group eco-result d-none mb-5" style="margin: 0;">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Premium per bulan
                    <span class="eco-badge konsumsi-per-bulan">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Harga Pertamax per liter
                    <span class="eco-badge harga">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengunaan Premium (liter per bulan)
                    <span class="eco-badge penggunaan-per-liter">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Asumsi Penghematan BBM 40%
                    <span class="eco-badge asumsi">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga ecer
                    <span class="eco-badge harga-ecer">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga member
                    <span class="eco-badge harga-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan non member
                    <span class="penghematan-non-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan member
                    <span class="penghematan-member">0</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" data-type-bbm="SOLAR" id="solar">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Masukan Penggunaan Premium Per Bulan (Rp.)</label>
                  <p id="textError" class="text-danger d-none" style="margin-bottom: 0.5em;">jumlah uang tidak valid!</p>
                  <input type="text" class="form-control" placeholder="contoh: 100000">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-md-8">
                <ul class="list-group eco-result d-none mb-5" style="margin: 0;">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Premium per bulan
                    <span class="eco-badge konsumsi-per-bulan">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Harga Bio Solar per liter
                    <span class="eco-badge harga">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengunaan Premium (liter per bulan)
                    <span class="eco-badge penggunaan-per-liter">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Asumsi Penghematan BBM 40%
                    <span class="eco-badge asumsi">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga ecer
                    <span class="eco-badge harga-ecer">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga member
                    <span class="eco-badge harga-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan non member
                    <span class="penghematan-non-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan member
                    <span class="penghematan-member">0</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" data-type-bbm="PERTALITE_MOTOR" id="pertaliteMotor">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Masukan Penggunaan Premium Per Bulan (Rp.)</label>
                  <p id="textError" class="text-danger d-none" style="margin-bottom: 0.5em;">jumlah uang tidak valid!</p>
                  <input type="text" class="form-control" placeholder="contoh: 100000">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-md-8">
                <ul class="list-group eco-result d-none mb-5" style="margin: 0;">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Premium per bulan
                    <span class="eco-badge konsumsi-per-bulan">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Harga Pertalite per liter
                    <span class="eco-badge harga">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengunaan Premium (liter per bulan)
                    <span class="eco-badge penggunaan-per-liter">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Asumsi Penghematan BBM 40%
                    <span class="eco-badge asumsi">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga ecer
                    <span class="eco-badge harga-ecer">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga member
                    <span class="eco-badge harga-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan non member
                    <span class="penghematan-non-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan member
                    <span class="penghematan-member">0</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" data-type-bbm="PERTAMAX_MOTOR" id="pertamaxMotor">
            <div class="row justify-content-center mt-5">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Masukan Penggunaan Premium Per Bulan (Rp.)</label>
                  <p id="textError" class="text-danger d-none" style="margin-bottom: 0.5em;">jumlah uang tidak valid!</p>
                  <input type="text" class="form-control" placeholder="contoh: 100000">
                </div>
              </div>
            </div>
            <div class="row justify-content-center mt-5">
              <div class="col-md-8">
                <ul class="list-group eco-result d-none mb-5" style="margin: 0;">
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Premium per bulan
                    <span class="eco-badge konsumsi-per-bulan">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Harga Pertamax per liter
                    <span class="eco-badge harga">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengunaan Premium (liter per bulan)
                    <span class="eco-badge penggunaan-per-liter">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Asumsi Penghematan BBM 40%
                    <span class="eco-badge asumsi">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga ecer
                    <span class="eco-badge harga-ecer">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Konsumsi Eco Racing harga member
                    <span class="eco-badge harga-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan non member
                    <span class="penghematan-non-member">0</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                    Pengematan BBM per bulan member
                    <span class="penghematan-member">0</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <button type="button" class="eco-btn btn btn-success calculate">Hitung</button>
        </div>
      </div>
    </div>
  </div>
</div>