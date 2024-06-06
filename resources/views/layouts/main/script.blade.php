<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('assets/vendors/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/carousel.js') }}"></script>
<script src="{{ asset('js/moment/moment.js') }}"></script>

<script>
    let apiBMKG = 'https://data.bmkg.go.id/DataMKG/MEWS/DigitalForecast/DigitalForecast-JawaTimur.xml';

    getBMKG();
    async function getBMKG(){
        let dateTime = moment().format('YYYYMMDDHH');
        let response = await fetch(apiBMKG);
        let xmlString = await response.text();
        let parse = new DOMParser();
        let xmlData = parse.parseFromString(xmlString, 'text/xml');
        let areas = xmlData.querySelectorAll('area');
        let area = areas[31];
        let temperatures = area.querySelectorAll('parameter[id="t"] timerange');
        let weathers = area.querySelectorAll('parameter[id="weather"] timerange');
        let tempPrakiraan = [];
        let weatherPrakiraan = [];

        weathers.forEach((weather, i)=>{
            let getDateTime = weather.getAttribute('datetime').substring(0, 10);
            if(getDateTime>=dateTime){
                weatherPrakiraan += i;
                nextDate = getDateTime;
            }
        });

        temperatures.forEach((temperature, i)=>{
            let getDateTime = temperature.getAttribute('datetime').substring(0, 10);
            if(getDateTime>=dateTime){
                tempPrakiraan += i;
                nextDate = getDateTime;
            }
        });
        let prakiraanSuhu = temperatures[tempPrakiraan[0]].querySelector('value').textContent;
        let prakiraanCuaca = weathers[weatherPrakiraan[0]].querySelector('value').textContent;
        document.getElementById("temperatureBMKG").innerText = prakiraanSuhu + " °C";
        if (prakiraanCuaca == 0) {
            document.getElementById("weatherBMKG").innerText += " Cerah";
        } else if (prakiraanCuaca == 1 || 2) {
            document.getElementById("weatherBMKG").innerText += " Cerah Berawan";
        } else if (prakiraanCuaca == 3 || 4 || 5) {
            document.getElementById("weatherBMKG").innerText += " Berawan";
        } else if (prakiraanCuaca == 10) {
            document.getElementById("weatherBMKG").innerText += " Berasap";
        } else if (prakiraanCuaca == 45) {
            document.getElementById("weatherBMKG").innerText += " Berkabut";
        } else if (prakiraanCuaca == 60 || 61) {
            document.getElementById("weatherBMKG").innerText += " Hujan";
        } else if (prakiraanCuaca == 63) {
            document.getElementById("weatherBMKG").innerText += " Hujan Lebat";
        } else if (prakiraanCuaca == 80) {
            document.getElementById("weatherBMKG").innerText += " Hujan Lokal";
        } else if (prakiraanCuaca == 95 || 97) {
            document.getElementById("weatherBMKG").innerText += " Hujan Petir";
        }
    }
</script>