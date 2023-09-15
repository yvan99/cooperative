@include('components.dashboard.dashcss')

<body class="  dual-compact">
    <span class="screen-darken"></span>
    <main class="main-content">
        @include('components.dashboard.topnav')
        @include('owner.components.navbar')
        <div class="container-fluid content-inner pb-0" id="page_layout">

            @include('owner.components.breadcrumb')



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">

                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#createCategoryModal">
                                Register Cooperative
                            </button>
                        </div>
                        <div class="card-body">
                            @include('components.dashboard.alert')
                            <div class="table-responsive border rounded">

                                <table id="datatable" class="table" data-toggle="data-table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Currency</th>
                                            <th>Address</th>
                                            <th>Status</th>
                                            <th>Members</th>
                                            <th>Created At</th>
                                            <th>Certificate</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cooperatives as $cooperative)
                                            <tr>
                                                <td>{{ $cooperative->name }}</td>
                                                <td>{{ $cooperative->category->name }}</td>
                                                <td>{{ $cooperative->currency }}</td>
                                                <td>{{ $cooperative->address }}</td>
                                                <td><button
                                                        class="
                                                    @if ($cooperative->status === 'pending') btn-sm btn btn-warning
                                                    @elseif ($cooperative->status === 'cancelled')
                                                        btn-sm btn btn-danger
                                                    @elseif ($cooperative->status === 'approved')
                                                        btn-sm btn btn-success @endif
                                                ">
                                                        {{ $cooperative->status }}
                                                    </button></td>
                                                <td>{{ $cooperative->members }}</td>
                                                <td>{{ $cooperative->created_at }}</td>
                                                <td>
                                                    @if ($cooperative->certificate)
                                                        <a href="{{ Storage::url($cooperative->certificate) }}"
                                                            class="btn btn-success btn-sm" target="_blank">Download
                                                            Certificate</a>
                                                    @else
                                                        No Certificate
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="modal fade" id="createCategoryModal" tabindex="-1" role="dialog"
                                    aria-labelledby="createCategoryModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="createCategoryModalLabel">Register
                                                    Cooperative
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('cooperatives.store') }}" class="row"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="name">Cooperative Name</label>
                                                        <input type="text" class="form-control" id="name"
                                                            name="name" required>
                                                    </div>

                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="certificate">Certificate
                                                            (PDF)</label>
                                                        <input type="file" class="form-control" id="certificate"
                                                            name="certificate" accept=".pdf" required>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="category_id">Category</label>
                                                        <select class="form-control form-select" id="category_id"
                                                            name="category_id" required>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="currency">Currency</label>

                                                        <select class="form-select form-control" id="currency"
                                                            name="currency">
                                                            <option>select currency</option>
                                                            <option value="AFN">Afghan Afghani</option>
                                                            <option value="ALL">Albanian Lek</option>
                                                            <option value="DZD">Algerian Dinar</option>
                                                            <option value="AOA">Angolan Kwanza</option>
                                                            <option value="ARS">Argentine Peso</option>
                                                            <option value="AMD">Armenian Dram</option>
                                                            <option value="AWG">Aruban Florin</option>
                                                            <option value="AUD">Australian Dollar</option>
                                                            <option value="AZN">Azerbaijani Manat</option>
                                                            <option value="BSD">Bahamian Dollar</option>
                                                            <option value="BHD">Bahraini Dinar</option>
                                                            <option value="BDT">Bangladeshi Taka</option>
                                                            <option value="BBD">Barbadian Dollar</option>
                                                            <option value="BYR">Belarusian Ruble</option>
                                                            <option value="BEF">Belgian Franc</option>
                                                            <option value="BZD">Belize Dollar</option>
                                                            <option value="BMD">Bermudan Dollar</option>
                                                            <option value="BTN">Bhutanese Ngultrum</option>
                                                            <option value="BTC">Bitcoin</option>
                                                            <option value="BOB">Bolivian Boliviano</option>
                                                            <option value="BAM">Bosnia-Herzegovina Convertible Mark
                                                            </option>
                                                            <option value="BWP">Botswanan Pula</option>
                                                            <option value="BRL">Brazilian Real</option>
                                                            <option value="GBP">British Pound Sterling</option>
                                                            <option value="BND">Brunei Dollar</option>
                                                            <option value="BGN">Bulgarian Lev</option>
                                                            <option value="BIF">Burundian Franc</option>
                                                            <option value="KHR">Cambodian Riel</option>
                                                            <option value="CAD">Canadian Dollar</option>
                                                            <option value="CVE">Cape Verdean Escudo</option>
                                                            <option value="KYD">Cayman Islands Dollar</option>
                                                            <option value="XOF">CFA Franc BCEAO</option>
                                                            <option value="XAF">CFA Franc BEAC</option>
                                                            <option value="XPF">CFP Franc</option>
                                                            <option value="CLP">Chilean Peso</option>
                                                            <option value="CNY">Chinese Yuan</option>
                                                            <option value="COP">Colombian Peso</option>
                                                            <option value="KMF">Comorian Franc</option>
                                                            <option value="CDF">Congolese Franc</option>
                                                            <option value="CRC">Costa Rican ColÃ³n</option>
                                                            <option value="HRK">Croatian Kuna</option>
                                                            <option value="CUC">Cuban Convertible Peso</option>
                                                            <option value="CZK">Czech Republic Koruna</option>
                                                            <option value="DKK">Danish Krone</option>
                                                            <option value="DJF">Djiboutian Franc</option>
                                                            <option value="DOP">Dominican Peso</option>
                                                            <option value="XCD">East Caribbean Dollar</option>
                                                            <option value="EGP">Egyptian Pound</option>
                                                            <option value="ERN">Eritrean Nakfa</option>
                                                            <option value="EEK">Estonian Kroon</option>
                                                            <option value="ETB">Ethiopian Birr</option>
                                                            <option value="EUR">Euro</option>
                                                            <option value="FKP">Falkland Islands Pound</option>
                                                            <option value="FJD">Fijian Dollar</option>
                                                            <option value="GMD">Gambian Dalasi</option>
                                                            <option value="GEL">Georgian Lari</option>
                                                            <option value="DEM">German Mark</option>
                                                            <option value="GHS">Ghanaian Cedi</option>
                                                            <option value="GIP">Gibraltar Pound</option>
                                                            <option value="GRD">Greek Drachma</option>
                                                            <option value="GTQ">Guatemalan Quetzal</option>
                                                            <option value="GNF">Guinean Franc</option>
                                                            <option value="GYD">Guyanaese Dollar</option>
                                                            <option value="HTG">Haitian Gourde</option>
                                                            <option value="HNL">Honduran Lempira</option>
                                                            <option value="HKD">Hong Kong Dollar</option>
                                                            <option value="HUF">Hungarian Forint</option>
                                                            <option value="ISK">Icelandic KrÃ³na</option>
                                                            <option value="INR">Indian Rupee</option>
                                                            <option value="IDR">Indonesian Rupiah</option>
                                                            <option value="IRR">Iranian Rial</option>
                                                            <option value="IQD">Iraqi Dinar</option>
                                                            <option value="ILS">Israeli New Sheqel</option>
                                                            <option value="ITL">Italian Lira</option>
                                                            <option value="JMD">Jamaican Dollar</option>
                                                            <option value="JPY">Japanese Yen</option>
                                                            <option value="JOD">Jordanian Dinar</option>
                                                            <option value="KZT">Kazakhstani Tenge</option>
                                                            <option value="KES">Kenyan Shilling</option>
                                                            <option value="KWD">Kuwaiti Dinar</option>
                                                            <option value="KGS">Kyrgystani Som</option>
                                                            <option value="LAK">Laotian Kip</option>
                                                            <option value="LVL">Latvian Lats</option>
                                                            <option value="LBP">Lebanese Pound</option>
                                                            <option value="LSL">Lesotho Loti</option>
                                                            <option value="LRD">Liberian Dollar</option>
                                                            <option value="LYD">Libyan Dinar</option>
                                                            <option value="LTL">Lithuanian Litas</option>
                                                            <option value="MOP">Macanese Pataca</option>
                                                            <option value="MKD">Macedonian Denar</option>
                                                            <option value="MGA">Malagasy Ariary</option>
                                                            <option value="MWK">Malawian Kwacha</option>
                                                            <option value="MYR">Malaysian Ringgit</option>
                                                            <option value="MVR">Maldivian Rufiyaa</option>
                                                            <option value="MRO">Mauritanian Ouguiya</option>
                                                            <option value="MUR">Mauritian Rupee</option>
                                                            <option value="MXN">Mexican Peso</option>
                                                            <option value="MDL">Moldovan Leu</option>
                                                            <option value="MNT">Mongolian Tugrik</option>
                                                            <option value="MAD">Moroccan Dirham</option>
                                                            <option value="MZM">Mozambican Metical</option>
                                                            <option value="MMK">Myanmar Kyat</option>
                                                            <option value="NAD">Namibian Dollar</option>
                                                            <option value="NPR">Nepalese Rupee</option>
                                                            <option value="ANG">Netherlands Antillean Guilder
                                                            </option>
                                                            <option value="TWD">New Taiwan Dollar</option>
                                                            <option value="NZD">New Zealand Dollar</option>
                                                            <option value="NIO">Nicaraguan CÃ³rdoba</option>
                                                            <option value="NGN">Nigerian Naira</option>
                                                            <option value="KPW">North Korean Won</option>
                                                            <option value="NOK">Norwegian Krone</option>
                                                            <option value="OMR">Omani Rial</option>
                                                            <option value="PKR">Pakistani Rupee</option>
                                                            <option value="PAB">Panamanian Balboa</option>
                                                            <option value="PGK">Papua New Guinean Kina</option>
                                                            <option value="PYG">Paraguayan Guarani</option>
                                                            <option value="PEN">Peruvian Nuevo Sol</option>
                                                            <option value="PHP">Philippine Peso</option>
                                                            <option value="PLN">Polish Zloty</option>
                                                            <option value="QAR">Qatari Rial</option>
                                                            <option value="RON">Romanian Leu</option>
                                                            <option value="RUB">Russian Ruble</option>
                                                            <option value="RWF" selected>Rwandan Franc</option>
                                                            <option value="SVC">Salvadoran ColÃ³n</option>
                                                            <option value="WST">Samoan Tala</option>
                                                            <option value="SAR">Saudi Riyal</option>
                                                            <option value="RSD">Serbian Dinar</option>
                                                            <option value="SCR">Seychellois Rupee</option>
                                                            <option value="SLL">Sierra Leonean Leone</option>
                                                            <option value="SGD">Singapore Dollar</option>
                                                            <option value="SKK">Slovak Koruna</option>
                                                            <option value="SBD">Solomon Islands Dollar</option>
                                                            <option value="SOS">Somali Shilling</option>
                                                            <option value="ZAR">South African Rand</option>
                                                            <option value="KRW">South Korean Won</option>
                                                            <option value="XDR">Special Drawing Rights</option>
                                                            <option value="LKR">Sri Lankan Rupee</option>
                                                            <option value="SHP">St. Helena Pound</option>
                                                            <option value="SDG">Sudanese Pound</option>
                                                            <option value="SRD">Surinamese Dollar</option>
                                                            <option value="SZL">Swazi Lilangeni</option>
                                                            <option value="SEK">Swedish Krona</option>
                                                            <option value="CHF">Swiss Franc</option>
                                                            <option value="SYP">Syrian Pound</option>
                                                            <option value="STD">São Tomé and Príncipe Dobra</option>
                                                            <option value="TJS">Tajikistani Somoni</option>
                                                            <option value="TZS">Tanzanian Shilling</option>
                                                            <option value="THB">Thai Baht</option>
                                                            <option value="TOP">Tongan pa'anga</option>
                                                            <option value="TTD">Trinidad & Tobago Dollar</option>
                                                            <option value="TND">Tunisian Dinar</option>
                                                            <option value="TRY">Turkish Lira</option>
                                                            <option value="TMT">Turkmenistani Manat</option>
                                                            <option value="UGX">Ugandan Shilling</option>
                                                            <option value="UAH">Ukrainian Hryvnia</option>
                                                            <option value="AED">United Arab Emirates Dirham</option>
                                                            <option value="UYU">Uruguayan Peso</option>
                                                            <option value="USD">US Dollar</option>
                                                            <option value="UZS">Uzbekistan Som</option>
                                                            <option value="VUV">Vanuatu Vatu</option>
                                                            <option value="VEF">Venezuelan BolÃ­var</option>
                                                            <option value="VND">Vietnamese Dong</option>
                                                            <option value="YER">Yemeni Rial</option>
                                                            <option value="ZMK">Zambian Kwacha</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="address">Address</label>
                                                        <input type="text" class="form-control" id="address"
                                                            name="address" required>
                                                    </div>

                                                    <div class="form-group col-6">
                                                        <label class="mb-3" for="members">Members</label>
                                                        <input type="number" class="form-control" id="members"
                                                            name="members" required>
                                                    </div>

                                                    <div class="form-group col-12">
                                                        <label class="mb-3" for="description">Description</label>
                                                        <textarea class="form-control" id="description" name="description" required></textarea>
                                                    </div>

                                                    <div class="form-group col-12">
                                                        <button type="submit" class="btn btn-success">Create</button>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('components.dashboard.dashfooter')
    </main>
    @include('components.dashboard.dashjs')
