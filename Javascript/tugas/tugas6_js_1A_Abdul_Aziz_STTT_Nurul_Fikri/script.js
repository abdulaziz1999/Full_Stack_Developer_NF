        //function onfocus looping
        let form = window.document.getElementById('formulir');
        let input = form.getElementsByTagName('input');
        for (let i = 0; i < 3; i++) {
            input[i].onfocus = function() {
                this.value = '';
                form.hasil.value = '';
            }
        }

        //funtion kalkulator
        function hitung(e){
            let angka1, angka2, v_hasil, hasil, el_angka1, el_angka2, el_hasil
            angka1 = form.angka1.value
            angka2 = form.angka2.value
            el_hasil  = form.hasil
            el_angka1  = form.angka1
            el_angka2  = form.angka2

            //validate input angka dana angka kosong
            if(isNaN(angka1) || isNaN(angka2)){
                alert("Input harus angka")
                return false
            }else if(angka1 == "" || angka2 == ""){
                alert("Input tidak boleh kosong")
                return false
            }

            //logika kalkulator
            if(e == "+"){
                hasil = parseInt(angka1) + parseInt(angka2)
                el_hasil.value = hasil
            }else if(e == "-"){
                hasil = parseInt(angka1) - parseInt(angka2)
                el_hasil.value = hasil
            }else if(e == "/"){
                hasil = parseInt(angka1) / parseInt(angka2)
                el_hasil.value = hasil
            }else if(e == "*"){
                hasil = parseInt(angka1) * parseInt(angka2)
                el_hasil.value = hasil
            }else if(e == "^"){
                hasil = Math.pow(parseInt(angka1), parseInt(angka2))
                el_hasil.value = hasil
            }else if(e == "clear"){
                el_angka1.value = ""
                el_angka2.value = ""
                el_hasil.value = ""
            }      
        }