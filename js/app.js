jQuery(document).ready(function () {
    jQuery('#pertaliteMobil').addClass("show");
    const statusColor = ["eco-bg-green","eco-bg-tosca","eco-bg-red","eco-bg-silver","eco-bg-midnight"];
    let i = 0;
    const pot = 40;
    const listDataBBM = {
      "PERTALITE_MOBIL": {
        "harga": 7650,
        "per_tablet": 30, // liter
        "harga_ecer_tablet": 25000,
        "harga_member_tablet": 12500
      },
      "PERTAMAX_MOBIL": {
        "harga": 9000,
        "per_tablet": 30, // liter
        "harga_ecer_tablet": 25000,
        "harga_member_tablet": 12500
      },
      "SOLAR": {
        "harga": 9400,
        "per_tablet": 60, // liter
        "harga_ecer_tablet": 25000,
        "harga_member_tablet": 12500
      },
      "PERTALITE_MOTOR": {
        "harga": 7650,
        "per_tablet": 3, // liter
        "harga_ecer_tablet": 5000,
        "harga_member_tablet": 2500
      },
      "PERTAMAX_MOTOR": {
        "harga": 9000,
        "per_tablet": 3, // liter
        "harga_ecer_tablet": 5000,
        "harga_member_tablet": 2500
      },
    };
  jQuery(".eco-nav.nav.nav-tabs .nav-item").each(function(){
     jQuery(this).addClass(statusColor[i])
     i++
   });

   jQuery(".calculate").on("click", function(e){
    const tabPanel = ".eco-tab .tab-pane.active.show";
    const typeBBM = jQuery(".eco-tab .tab-pane.active.show").attr("data-type-bbm");
    const konsumsiPerBulan = jQuery(`${tabPanel} input`).val() ? jQuery(`${tabPanel} input`).val() : 0;
    if(konsumsiPerBulan <= 0){
      jQuery(`${tabPanel} #textError`).removeClass("d-none");
      return;
    }else{
      jQuery(`${tabPanel} #textError`).addClass("d-none");
    }
    const harga = listDataBBM[typeBBM].harga;
    const penggunaanPerLiter = Math.ceil(konsumsiPerBulan / harga);
    const asumsi = Math.round(konsumsiPerBulan * pot / 100);
    const hargaEcer = listDataBBM[typeBBM].harga_ecer_tablet;
    const hargaMember = listDataBBM[typeBBM].harga_member_tablet;
    const jumlahTablet = Math.round(penggunaanPerLiter / listDataBBM[typeBBM].per_tablet);
    const totalKonsumsiHargaEcer = hargaEcer * jumlahTablet;
    const totalKonsumsiHargaMember = hargaMember * jumlahTablet;
    const penghematanNonMember = asumsi - totalKonsumsiHargaEcer;
    const penghematanMember = asumsi - totalKonsumsiHargaMember;
    jQuery(".konsumsi-per-bulan").text(formatRupiah(konsumsiPerBulan,"Rp."));
    jQuery(".harga").text(formatRupiah(harga.toString(),"Rp."));
    jQuery(".penggunaan-per-liter").text(`${penggunaanPerLiter} liter`);
    jQuery(".asumsi").text(formatRupiah(asumsi.toString(),"Rp."));
    jQuery(".harga-ecer").text(`${jumlahTablet} Tablet = ${formatRupiah(totalKonsumsiHargaEcer.toString(),"Rp.")}`);
    jQuery(".harga-member").text(`${jumlahTablet} Tablet = ${formatRupiah(totalKonsumsiHargaMember.toString(),"Rp.")}`);
    jQuery(".penghematan-non-member").text(formatRupiah(penghematanNonMember.toString(),"Rp."));
    jQuery(".penghematan-member").text(formatRupiah(penghematanMember.toString(),"Rp."));
    jQuery(`${tabPanel} .eco-result`).removeClass("d-none");
    
   });
   jQuery(".eco-nav .nav-link").on("click", function(){
     const idTab = jQuery(this).attr("href");
     jQuery(".eco-tab .tab-pane.active.show #textError").addClass("d-none");
     jQuery(".eco-tab .tab-pane.active.show input").val("");
     jQuery(".eco-result").addClass("d-none");
   })
});
function formatRupiah(angka, prefix){
  var number_string = angka.replace(/[^,\d]/g, '').toString(),
  split   		= number_string.split(','),
  sisa     		= split[0].length % 3,
  rupiah     		= split[0].substr(0, sisa),
  ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if(ribuan){
    separator = sisa ? '.' : '';
    rupiah += separator + ribuan.join('.');
  }

  rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
  return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
}
