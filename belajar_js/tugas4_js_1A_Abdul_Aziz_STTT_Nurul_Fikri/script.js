        //data karyawan dengan array asosiatif
        let karyawan = new Array()
        karyawan['Budi'] = "Manager"
        karyawan['Siti'] = "Manager"
        karyawan['Andi'] = "Kabag"
        karyawan['Deden'] = "Asisten Manager"
        karyawan['Wawan'] = "Staff"
        karyawan['Mimin'] = "Staff"

        //Array kolom thead
        let kolom = ['No','Nama','Jabatan','Gaji Pokok','Tunjangan Jabatan', 'Total Gaji']
        for(let i in kolom){
            document.getElementById('dataKolom').innerHTML += `<th>${kolom[i]}</th>`
        }
        let grup = Intl.NumberFormat('id-ID')
        let no=1
        for(let i in karyawan){
            //warna baris tabel
            let warna = (no % 2 == 1) ? '#f2f2f2' : 'white'
            //switch case untuk menentukan gaji pokok
            switch(karyawan[i]){
                case 'Manager':
                    gajiPokok = 20000000
                    break;
                case 'Kabag':
                    gajiPokok = 10000000
                    break;
                case 'Asisten Manager':
                    gajiPokok = 15000000
                    break;
                case 'Staff':
                    gajiPokok = 5000000
                    break;
            }
            let tunjab = gajiPokok*20/100
            let totalGaji = gajiPokok+tunjab
            let data = new Array()
            data = [no,i,karyawan[i],gajiPokok,tunjab,totalGaji]
            //menggunakan for of untuk menampilkan data di tbody
            for(let j of data){
            if(j == data[0]){
                document.getElementById('dataKaryawan2').innerHTML += `<tr bgcolor="${warna}">
                                                                        <td>${no++}</td>
                                                                        <td>${i}</td>
                                                                        <td>${karyawan[i]}</td>
                                                                        <td>${grup.format(gajiPokok)}</td>
                                                                        <td>${grup.format(tunjab)}</td>
                                                                        <td>${grup.format(totalGaji)}</td>
                                                                        </tr>`
                }
            }
        }