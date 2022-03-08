
        class Gempa {
            constructor(lokasi, skala) {
                this.lokasi = lokasi;
                this.skala = skala;
            }

            //fungsi dampak
            dampak() {
                let dampak,isi_tbody
                if (this.skala <= 2) {
                    dampak = "Tidak terasa";
                } else if (this.skala > 2 && this.skala <= 4) {
                    dampak = "Retak-retak";
                } else if (this.skala > 4 && this.skala <= 6) {
                    dampak = "Roboh";
                } else {
                    dampak = "Roboh dan berpotensi tsunami";
                }

                //Tampilkan hasil pada tag <tbody> dengan id isi_tbody
                isi_tbody = document.getElementById('isi_tbody');
                isi_tbody.innerHTML += `<tr>
                                            <td>${this.lokasi}</td>
                                            <td>${this.skala}</td>
                                            <td>${dampak}</td>
                                        </tr>`;
            }
        }

        //cetak dampak
        let gempa_1 = new Gempa("Jakarta", 2);
        let gempa_2 = new Gempa("Bandung", 3);
        let gempa_3 = new Gempa("Semarang", 4);
        let gempa_4 = new Gempa("Surabaya", 5);
        let gempa_5 = new Gempa("Medan", 6);
        let gempa_6 = new Gempa("Palembang", 7);
        let gempa_7 = new Gempa("Pekanbaru", 8);
        let gempa_8 = new Gempa("Bogor", 9);
        let gempa_9 = new Gempa("Jakarta", 10);
        let gempa_10 = new Gempa("Bandung", 11);
        
        gempa_1.dampak();
        gempa_2.dampak();
        gempa_3.dampak();
        gempa_4.dampak();
        gempa_5.dampak();
        gempa_6.dampak();
        gempa_7.dampak();
        gempa_8.dampak();
        gempa_9.dampak();
        gempa_10.dampak();