<?php
session_start();    //session start
if(!isset($_SESSION['username']))     //if session not found redirect to homepage
{
header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Analytics Traffic - Organic Pageview Generator Suite with Mixed Traffic</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <style type="text/css">
    .space {
        height: 15px;
    }   
    </style>
</head>

<body>
    <div class="space"></div>
    <!-- Main component for a primary marketing message or call to action -->
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-pills nav-justified thumbnail">
                    <li data-target-id='2' class="active">
                        <a href="#">
                            <h4 class="list-group-item-heading">PC and Mobile Traffic Pageview Generator [Organic Suite]</h4>
                            <p class="list-group-item-text">Send Unlimited random desktop, mobile and tablet traffic to your website</p>
                        </a>
                    </li>
                </ul>
                <div class="wells">
                    <div class="well well-sm" data-id='2'>
                        <!--
                        *
                        * Trafico MIXTO
                        *
                          -->
                        <form action="pageviewsmixed.php" method="post" target="traficomixto">
                        <div class="fondomixto"></div>
                            <h4><small><strong>General Settings</strong></small></h4>
                            <ul class="list-inline">
                                <li>
                                    <input type="text" name="cantidaddehits" class="form-control" placeholder="Hits Quantity" required>
                                </li>
                                <li>
                                    <select id="pageviews" class="form-control" name="pageviewshits" required>
                                        <option value="" disabled selected>Quantity of Pageview per Hits</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </li>                              
                                <li>
                                    <input type="text" name="CodigoAnalytics" class="form-control" placeholder="UA Code (UA-123456-12)" required>
                                </li>
                                <li>
                                    <input type="text" name="titulodelapagina" class="form-control" placeholder="Website Title (Optional)">
                                </li>
                            </ul>
                            <h4><small><strong>Search Engine Option & Keyword Acquisition</strong></small></h4>
                            <ul class="list-inline">
                                <li>
                                    <input list="buscadores" class="form-control" name="searchengine" placeholder="Search Engine" required>
                                    <datalist id="buscadores" style="height: 50px;">
                                        <option value="google">Google</option>
                                        <option value="bing">Bing</option>
                                        <option value="yahoo">Yahoo</option>
                                        <option value="ask">Ask</option>
                                        <option value="baidu">Baidu</option>
                                        <option value="yandex">Yandex</option>
                                        <option value="aol">AOL</option>
                                        <option value="naver">Naver</option>
                                    </datalist>                              
                                </li>
                                <li>
                                    <input type="text" name="palabraclave" class="form-control" placeholder="Keyword" required>
                                </li>
                            </ul>
                            <h4><small><strong>Pages Settings</strong></small></h4>
                            <ul class="list-inline">
                                <li>
                                    <input type="text" name="urluno" class="form-control" placeholder="First page" required>
                                </li>
                                <li>
                                    <input type="text" name="urldos" class="form-control" placeholder="Second page" required>
                                </li>
                                <li>
                                    <input type="text" name="urltres" class="form-control" placeholder="Third page" required>
                                </li>
                                <li>
                                    <input type="text" name="urlcuatro" class="form-control" placeholder="Fourth page" required>
                                </li>
                                <li>
                                    <input type="text" name="urlcinco" class="form-control" placeholder="Fifth page" required>
                                </li>                                                                                                                                
                            </ul>
                            <h4><small><strong>Location Settings</strong></small>
                            <ul class="list-inline">    
                                <li>
                                    <input list="country" class="form-control" name="UbicacionGeografica" placeholder="Traffic Location Country" required>
                                    <datalist id="country" style="height: 50px;">
                                        <option value="AX">Aaland Islands</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua And Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia</option>
                                        <option value="BA">Bosnia And Herzegowina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CD">Congo, Democratic Republic Of (Was Zaire)</option>
                                        <option value="CG">Congo, Republic Of</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Cote D'ivoire</option>
                                        <option value="HR">Croatia (Local Name: Hrvatska)</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard And Mc Donald Islands</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran (Islamic Republic Of)</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, North</option>
                                        <option value="KR">Korea, Republic Of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libyan Arab Jamahiriya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macau</option>
                                        <option value="MK">Macedonia, The Former Yugoslav Republic Of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States Of</option>
                                        <option value="MD">Moldova, Republic Of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="AN">Netherlands Antilles</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Reunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="SH">Saint Helena</option>
                                        <option value="KN">Saint Kitts And Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="PM">Saint Pierre And Miquelon</option>
                                        <option value="VC">Saint Vincent And The Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome And Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="CS">Serbia And Montenegro</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia And The South Sandwich Islands</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard And Jan Mayen Islands</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic Of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad And Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks And Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VA">Vatican City State (Holy See)</option>
                                        <option value="VE">Venezuela</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands (British)</option>
                                        <option value="VI">Virgin Islands (U.s.)</option>
                                        <option value="WF">Wallis And Futuna Islands</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                    </datalist>
                                </li>
                            </ul>
                            <h4><small><strong>Pageviews Settings</strong></small></h4>
                            <ul class="list-inline">
                                <li>
                                    <input type="text" name="tiempoporusuario" class="form-control" placeholder="Avg. Session Duration" required>
                                </li>
                                <li>
                                    <input type="text" name="tagidioma" class="form-control" placeholder="Languaje Tag (en-US)" required>
                                </li>                                                              
                            </ul>
                            <hr>
                            <button class="btn btn-large btn-block btn-success" type="submit">Send Traffic</button>
                            <iframe name="traficomixto" width='0' height='0' frameheight='0' framewidth='0' frameborder='0'>
                            </iframe>
                        </form>
                        <!--
                        *
                        * FIN del Trafico MIXTO
                        *
                          -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var li = $(".nav-pills>li:not(.disabled)");
        $(li).click(function() {
            $(li).each(function() {
                $(this)[0].className = ""; // Deactivate all <li> 
                $(".well").hide();
            });
            $(this)[0].className = "active";
            $(".well[data-id=" + $(this).data("target-id") + "]").show();
        });
    });
    </script>
    <script type="text/javascript">
    document.oncontextmenu = function(){return false;}
    </script>
</body>

</html>
