@php
    $arrayList=[
        "Afghanistan",
        "Albania",
        "Algeria",
        "Andorra",
        "Angola",
        "Antigua and Barbuda",
        "Argentina",
        "Armenia",
        "Australia",
        "Austria",
        "Azerbaijan",
        "Bahamas",
        "Bahrain",
        "Bangladesh",
        "Barbados",
        "Belarus",
        "Belgium",
        "Belize",
        "Benin",
        "Bhutan",
        "Bolivia",
        "Bosnia and Herzegovina",
        "Botswana",
        "Brazil",
        "Brunei",
        "Bulgaria",
        "Burkina Faso",
        "Burundi",
        "Cabo Verde",
        "Cambodia",
        "Cameroon",
        "Canada",
        "Central African Republic",
        "Chad",
        "Chile",
        "China",
        "Colombia",
        "Comoros",
        "Congo",
        "Costa Rica",
        "Croatia",
        "Cuba",
        "Cyprus",
        "Czech Republic",
        "Democratic Republic of the Congo",
        "Denmark",
        "Djibouti",
        "Dominica",
        "Dominican Republic",
        "East Timor (Timor-Leste)",
        "Ecuador",
        "Egypt",
        "El Salvador",
        "Equatorial Guinea",
        "Eritrea",
        "Estonia",
        "Eswatini",
        "Ethiopia",
        "Fiji",
        "Finland",
        "France",
        "Gabon",
        "Gambia",
        "Georgia",
        "Germany",
        "Ghana",
        "Greece",
        "Grenada",
        "Guatemala",
        "Guinea",
        "Guinea-Bissau",
        "Guyana",
        "Haiti",
        "Honduras",
        "Hungary",
        "Iceland",
        "India",
        "Indonesia",
        "Iran",
        "Iraq",
        "Ireland",
        "Israel",
        "Italy",
        "Ivory Coast",
        "Jamaica",
        "Japan",
        "Jordan",
        "Kazakhstan",
        "Kenya",
        "Kiribati",
        "Kosovo",
        "Kuwait",
        "Kyrgyzstan",
        "Laos",
        "Latvia",
        "Lebanon",
        "Lesotho",
        "Liberia",
        "Libya",
        "Liechtenstein",
        "Lithuania",
        "Luxembourg",
        "Madagascar",
        "Malawi",
        "Malaysia",
        "Maldives",
        "Mali",
        "Malta",
        "Marshall Islands",
        "Mauritania",
        "Mauritius",
        "Mexico",
        "Micronesia",
        "Moldova",
        "Monaco",
        "Mongolia",
        "Montenegro",
        "Morocco",
        "Mozambique",
        "Myanmar (Burma)",
        "Namibia",
        "Nauru",
        "Nepal",
        "Netherlands",
        "New Zealand",
        "Nicaragua",
        "Niger",
        "Nigeria",
        "North Korea",
        "North Macedonia (formerly Macedonia)",
        "Norway",
        "Oman",
        "Pakistan",
        "Palau",
        "Palestine",
        "Panama",
        "Papua New Guinea",
        "Paraguay",
        "Peru",
        "Philippines",
        "Poland",
        "Portugal",
        "Qatar",
        "Romania",
        "Russia",
        "Rwanda",
        "Saint Kitts and Nevis",
        "Saint Lucia",
        "Saint Vincent and the Grenadines",
        "Samoa",
        "San Marino",
        "Sao Tome and Principe",
        "Saudi Arabia",
        "Senegal",
        "Serbia",
        "Seychelles",
        "Sierra Leone",
        "Singapore",
        "Slovakia",
        "Slovenia",
        "Solomon Islands",
        "Somalia",
        "South Africa",
        "South Korea",
        "South Sudan",
        "Spain",
        "Sri Lanka",
        "Sudan",
        "Suriname",
        "Sweden",
        "Switzerland",
        "Syria",
        "Taiwan",
        "Tajikistan",
        "Tanzania",
        "Thailand",
        "Togo",
        "Tonga",
        "Trinidad and Tobago",
        "Tunisia",
        "Turkey",
        "Turkmenistan",
        "Tuvalu",
        "Uganda",
        "Ukraine",
        "United Arab Emirates (UAE)",
        "United Kingdom (UK)",
        "United States of America (USA)",
        "Uruguay",
        "Uzbekistan",
        "Vanuatu",
        "Vatican City (Holy See)",
        "Venezuela",
        "Vietnam",
        "Yemen",
        "Zambia",
        "Zimbabwe"
    ];
    $gameArray=[
        "Archery",
        "Athletics (Track and Field)",
        "Badminton",
        "Baseball",
        "Basketball",
        "Boxing",
        "Canoeing",
        "Cycling",
        "Diving",
        "Equestrian",
        "Fencing",
        "Football (Soccer)",
        "Golf",
        "Gymnastics",
        "Handball",
        "Hockey",
        "Judo",
        "Karate",
        "Modern Pentathlon",
        "Rowing",
        "Rugby Sevens",
        "Sailing",
        "Shooting",
        "Skateboarding",
        "Sport Climbing",
        "Surfing",
        "Swimming",
        "Table Tennis",
        "Taekwondo",
        "Tennis",
        "Triathlon",
        "Volleyball",
        "Water Polo",
        "Weightlifting",
        "Wrestling"
    ];
@endphp
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

         <!-- country -->
         <div class="mt-4">
            <x-input-label for="country" :value="__('Country')" />
            <input type="text" id="country" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" name="country" list="suggestions">
            <datalist id="suggestions">
                @foreach($arrayList as $item)
                    <option class="countryOptions" value="{{ $item }}">
                @endforeach
            </datalist>
            <ul class="text-sm text-red-600 space-y-1 mt-2">
                <li id="errorCountry"></li>
            </ul>
            <x-input-error :messages="$errors->get('country')" class="mt-2" />
        </div>

        {{--  phone --}}
        <div class="mt-4">
            <x-input-label for="phone" :value="__('Phone')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>
        
        {{--  game --}}
        <div class="mt-4">
            <x-input-label for="game" :value="__('Game (That your are intrested in...)')" />
            <input type="text" id="game" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" name="game" list="gameSuggestions">
            <datalist id="gameSuggestions">
                @foreach($gameArray as $game)
                    <option class="gameOptions" value="{{ $game }}">
                @endforeach
            </datalist>
            <ul class="text-sm text-red-600 space-y-1 mt-2">
                <li id="errorGame"></li>
            </ul>
            <x-input-error :messages="$errors->get('game')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<script>
    

    const countryPhoneCodes = {
            "Afghanistan": "+93",
            "Albania": "+355",
            "Algeria": "+213",
            "Andorra": "+376",
            "Angola": "+244",
            "Antigua and Barbuda": "+1-268",
            "Argentina": "+54",
            "Armenia": "+374",
            "Australia": "+61",
            "Austria": "+43",
            "Azerbaijan": "+994",
            "Bahamas": "+1-242",
            "Bahrain": "+973",
            "Bangladesh": "+880",
            "Barbados": "+1-246",
            "Belarus": "+375",
            "Belgium": "+32",
            "Belize": "+501",
            "Benin": "+229",
            "Bhutan": "+975",
            "Bolivia": "+591",
            "Bosnia and Herzegovina": "+387",
            "Botswana": "+267",
            "Brazil": "+55",
            "Brunei": "+673",
            "Bulgaria": "+359",
            "Burkina Faso": "+226",
            "Burundi": "+257",
            "Cabo Verde": "+238",
            "Cambodia": "+855",
            "Cameroon": "+237",
            "Canada": "+1",
            "Central African Republic": "+236",
            "Chad": "+235",
            "Chile": "+56",
            "China": "+86",
            "Colombia": "+57",
            "Comoros": "+269",
            "Congo": "+242",
            "Costa Rica": "+506",
            "Croatia": "+385",
            "Cuba": "+53",
            "Cyprus": "+357",
            "Czech Republic": "+420",
            "Denmark": "+45",
            "Djibouti": "+253",
            "Dominica": "+1-767",
            "Dominican Republic": "+1-809",
            "Ecuador": "+593",
            "Egypt": "+20",
            "El Salvador": "+503",
            "Equatorial Guinea": "+240",
            "Eritrea": "+291",
            "Estonia": "+372",
            "Eswatini": "+268",
            "Ethiopia": "+251",
            "Fiji": "+679",
            "Finland": "+358",
            "France": "+33",
            "Gabon": "+241",
            "Gambia": "+220",
            "Georgia": "+995",
            "Germany": "+49",
            "Ghana": "+233",
            "Greece": "+30",
            "Grenada": "+1-473",
            "Guatemala": "+502",
            "Guinea": "+224",
            "Guinea-Bissau": "+245",
            "Guyana": "+592",
            "Haiti": "+509",
            "Honduras": "+504",
            "Hungary": "+36",
            "Iceland": "+354",
            "India": "+91",
            "Indonesia": "+62",
            "Iran": "+98",
            "Iraq": "+964",
            "Ireland": "+353",
            "Israel": "+972",
            "Italy": "+39",
            "Jamaica": "+1-876",
            "Japan": "+81",
            "Jordan": "+962",
            "Kazakhstan": "+7",
            "Kenya": "+254",
            "Kiribati": "+686",
            "Kosovo": "+383",
            "Kuwait": "+965",
            "Kyrgyzstan": "+996",
            "Laos": "+856",
            "Latvia": "+371",
            "Lebanon": "+961",
            "Lesotho": "+266",
            "Liberia": "+231",
            "Libya": "+218",
            "Liechtenstein": "+423",
            "Lithuania": "+370",
            "Luxembourg": "+352",
            "Madagascar": "+261",
            "Malawi": "+265",
            "Malaysia": "+60",
            "Maldives": "+960",
            "Mali": "+223",
            "Malta": "+356",
            "Marshall Islands": "+692",
            "Mauritania": "+222",
            "Mauritius": "+230",
            "Mexico": "+52",
            "Micronesia": "+691",
            "Moldova": "+373",
            "Monaco": "+377",
            "Mongolia": "+976",
            "Montenegro": "+382",
            "Morocco": "+212",
            "Mozambique": "+258",
            "Myanmar (Burma)": "+95",
            "Namibia": "+264",
            "Nauru": "+674",
            "Nepal": "+977",
            "Netherlands": "+31",
            "New Zealand": "+64",
            "Nicaragua": "+505",
            "Niger": "+227",
            "Nigeria": "+234",
            "North Korea": "+850",
            "North Macedonia (formerly Macedonia)": "+389",
            "Norway": "+47",
            "Oman": "+968",
            "Pakistan": "+92",
            "Palau": "+680",
            "Palestine": "+970",
            "Panama": "+507",
            "Papua New Guinea": "+675",
            "Paraguay": "+595",
            "Peru": "+51",
            "Philippines": "+63",
            "Poland": "+48",
            "Portugal": "+351",
            "Qatar": "+974",
            "Romania": "+40",
            "Russia": "+7",
            "Rwanda": "+250",
            "Saint Kitts and Nevis": "+1-869",
            "Saint Lucia": "+1-758",
            "Saint Vincent and the Grenadines": "+1-784",
            "Samoa": "+685",
            "San Marino": "+378",
            "Sao Tome and Principe": "+239",
            "Saudi Arabia": "+966",
            "Senegal": "+221",
            "Serbia": "+381",
            "Seychelles": "+248",
            "Sierra Leone": "+232",
            "Singapore": "+65",
            "Slovakia": "+421",
            "Slovenia": "+386",
            "Solomon Islands": "+677",
            "Somalia": "+252",
            "South Africa": "+27",
            "South Korea": "+82",
            "South Sudan": "+211",
            "Spain": "+34",
            "Sri Lanka": "+94",
            "Sudan": "+249",
            "Suriname": "+597",
            "Sweden": "+46",
            "Switzerland": "+41",
            "Syria": "+963",
            "Taiwan": "+886",
            "Tajikistan": "+992",
            "Tanzania": "+255",
            "Thailand": "+66",
            "Togo": "+228",
            "Tonga": "+676",
            "Trinidad and Tobago": "+1-868",
            "Tunisia": "+216",
            "Turkey": "+90",
            "Turkmenistan": "+993",
            "Tuvalu": "+688",
            "Uganda": "+256",
            "Ukraine": "+380",
            "United Arab Emirates (UAE)": "+971",
            "United Kingdom (UK)": "+44",
            "United States of America (USA)": "+1",
            "Uruguay": "+598",
            "Uzbekistan": "+998",
            "Vanuatu": "+678",
            "Vatican City (Holy See)": "+379",
            "Venezuela": "+58",
            "Vietnam": "+84",
            "Yemen": "+967",
            "Zambia": "+260",
            "Zimbabwe": "+263"
    };
    var inputField = document.getElementById('country');
    var dataList = document.getElementById('suggestions');
    var options = dataList.getElementsByClassName('countryOptions');
    var game = document.getElementById('game');
    var dataListGame = document.getElementById('gameSuggestions');
    var gameOptions = dataListGame.getElementsByClassName('gameOptions');
    
    inputField.addEventListener('blur', function() {
        var inputValue = this.value;
        var found = false;

        for (var i = 0; i < options.length; i++) {
            if (options[i].value === inputValue) {
                found = true;
                var code=countryPhoneCodes[inputValue];
                    document.getElementById("phone").value=code;
                document.getElementById("errorCountry").innerHTML="";
                break;
            }
        }

        if (!found) {
            document.getElementById("errorCountry").innerHTML="country doesnot exist";
            // alert("Error: Input does not exist in the suggestion list.");
            this.value = ""; // Clear the input field
        }
    });

    inputField.addEventListener('keypress', function(event) {
        if (event.key === 'Enter' || event.key === 'Tab') {
            var inputValue = this.value;
            var found = false;

            for (var i = 0; i < options.length; i++) {
                if (options[i].value === inputValue) {
                    found = true;
                    var code=countryPhoneCodes[inputValue];
                    document.getElementById("phone").value=code;
                    document.getElementById("errorCountry").innerHTML="";
                    break;
                }
            }

            if (!found) {
                document.getElementById("errorCountry").innerHTML="country doesnot exist";
                // alert("Error: Input does not exist in the suggestion list.");
                this.value = ""; // Clear the input field
            }
        }
    });
    game.addEventListener('blur', function() {
        var inputValue = this.value;
        var found = false;

        for (var i = 0; i < gameOptions.length; i++) {
            if (gameOptions[i].value === inputValue) {
                found = true;
                
                document.getElementById("errorGame").innerHTML="";
                break;
            }
        }

        if (!found) {
            document.getElementById("errorGame").innerHTML="Game doesnot exist";
            // alert("Error: Input does not exist in the suggestion list.");
            this.value = ""; // Clear the input field
        }
    });

    game.addEventListener('keypress', function(event) {
        if (event.key === 'Enter' || event.key === 'Tab') {
            var inputValue = this.value;
            var found = false;

            for (var i = 0; i < gameOptions.length; i++) {
                if (gameOptions[i].value === inputValue) {
                    found = true;
                    
                    document.getElementById("errorGame").innerHTML="";
                    break;
                }
            }

            if (!found) {
                document.getElementById("errorGame").innerHTML="Game doesnot exist";
                // alert("Error: Input does not exist in the suggestion list.");
                this.value = ""; // Clear the input field
            }
        }
    });
</script>