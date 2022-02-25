    //mendeklarasikan variabel
    let opti , pil, i, gender, text, bulan, tahun, umur, desc, x, z
    bulan = ['January','February','March','April','May','June','July','August','September','October','November','December']
    gender = ['Pria','Wanita']
    
    //tanggal
    pil = '<option > --- Pilih Tanggal --- </option>'
    i = 1
    while(i<=31){
        opti += `<option value='${i}'>${i}</option>`
        i++;
    }
    document.getElementById('tanggal').innerHTML = pil + opti

    //Bulan
    pil = '<option > --- Pilih Bulan --- </option>';
    for(x in bulan){
        text += `<option value='${bulan[x]}'>${bulan[x]}</option>`
    }
    document.getElementById('bulan').innerHTML = pil + text

    //tahun
    pil = '<option > --- Pilih Tahun --- </option>'
    tahun = 2022;
    for(i=tahun; i>=tahun-100;i--){
        umur = tahun - i;
        if(umur < 13) continue; if(umur > 60) break;
        desc += `<option>${i}</option>`
    }
    document.getElementById('tahun').innerHTML = pil + desc

    //gender
    text = '';
    for(z in gender){
        text += `<input type='radio' id="gender" name='gender' value='${gender[z]}'>${gender[z]}`
    }
    document.getElementById('gender').innerHTML = text