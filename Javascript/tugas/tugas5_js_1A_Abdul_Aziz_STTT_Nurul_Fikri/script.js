        let text, dataBarang, ket
        text ="" ;
        dataBarang = ['TV','Kulkas','AC']
        ket = `<option >Pilih Barang</option>`;
        for(let x of dataBarang){
            text += `<option value='${x}'>${x}</option>`;
        }
        document.getElementById("barang").innerHTML = ket + text;

        const transaksi = () => {
            let nama, barang, jumlah, harga, diskon, ppn, harga_kotor, total_harga, grup, dom
            grup = Intl.NumberFormat('id-ID')
            dom =  window.document.getElementById('formBelanja');
            nama = dom.nama.value;
            barang = dom.barang.value;
            jumlah = dom.jumlah.value;

            //swith case harga  barang
            switch(barang){
                case barang: harga = 2000000; break;
                case barang: harga = 400000; break;
                case barang: harga = 3000000; break;
                default: harga = 0;
            }
            //harga barang
            harga_kotor = harga * jumlah;

            //if harga diskon
            if(barang == 'Kulkas' && jumlah >= 3) diskon = harga_kotor * 30/100;
            else if(barang == 'AC' && jumlah >= 3) diskon = harga_kotor * 20/100;   
            else diskon = harga_kotor * 10/100;
                
            //pajak PPN 10%
            ppn = 10/100 * (harga_kotor - diskon);

            //total bayar
            total_harga = (harga_kotor - diskon) + ppn;

            //output
            alert(`Nama Pelanggan : ${nama} 
                \nNama Barang : ${barang} 
                \nJumlah Barang : ${jumlah} 
                \nHarga Satuan : ${grup.format(harga)} 
                \nHarga Kotor : ${grup.format(harga_kotor)} 
                \nDiskon : ${grup.format(diskon)} 
                \nPPN : ${grup.format(ppn)} 
                \nTotal Bayar : ${grup.format(Math.ceil(total_harga))}`);
        }