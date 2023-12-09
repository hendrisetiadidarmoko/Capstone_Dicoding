var locations = [
    [1, 'Biomagg - Industri Maggot BSF Pakan Ternak Waste Management', 'Koperasi, Jl. Koperasi Raya No.84, Curug, Kec. Cimanggis, Kota Depok, Jawa Barat 16453', -6.430865121088085, 106.86105874865247, 'https://maps.app.goo.gl/8dd9rVG64S1o3FHq8'],
    [2, 'Putra Maggot BSF', 'Gg. Eme Atas No.64, Sukabungah, Kec. Sukajadi, Kota Bandung, Jawa Barat 40162', -6.891902596761132, 107.60263583405191, 'https://maps.app.goo.gl/ATv6e2gXnTvRX7iC7'],
    [3, 'Gubuklarva BSF', 'Komplek TNI AD 1 No. 2, RT.2/RW.6, Cakung Bar., Kec. Cakung, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 19310', -6.180050121181656, 106.93258875270794, 'https://maps.app.goo.gl/fF1WTavufJoEqHNYA'],
    [4, 'Mr Maggot', 'Dusun II, Banjaranyar, Kec. Sokaraja, Kabupaten Banyumas, Jawa Tengah 53181', -7.430015580640273, 109.32027954327015, 'https://maps.app.goo.gl/asQvE9qEPAUerNB27'],
    [5, 'MAGGOT BSF PURWOREJO', 'Gintungan 01/08, Dusun II, Gintungan, Kec. Gebang, Kabupaten Purworejo, Jawa Tengah 54191', -7.684590124742283, 110.00143187534646, 'https://maps.app.goo.gl/uo71VcdnP86r8m2q8'],
    [6, 'Dadali BSF - Jual Maggot BSF', 'Jl Sultan Agung Kp. Rawa Pasung, Jl. Bali V No.129 001/004, RT.003/RW.004, Kota Baru, Kecamatan Medan Satria, Kabupaten Bekasi, Jawa Barat 17183', -6.218277420754651, 106.97928064327014, 'https://maps.app.goo.gl/75kHwYbYhUt5TJWPA'],
];

var map = L.map('map').setView([-7.411098489278937, 109.22631444005974], 8);
mapLink =
    '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
    'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; ' + mapLink + ' Contributors',
        maxZoom: 18,
    }).addTo(map);

for (var i = 0; i < locations.length; i++) {
    marker = new L.marker([locations[i][3], locations[i][4]])
        .bindPopup(
            '<div id="content" class="">' +
            '<h5 id="firstHeading" class="firstHeading">' + locations[i][1] + '</h5>' +
            '<div id="bodyContent">' +
            '<h6>Alamat : </h6>' +
            '<p class="">' + locations[i][2] + '</p>' +
            '<div class="view-link"> Klik untuk melihat lokasi : ' +
            '<a target="_blank" href="' + locations[i][5] +
            '"><span>View on Google Maps</span></a> ' +
            '</div>' +
            '</div>' +
            '</div>'
        )
        .addTo(map);
}