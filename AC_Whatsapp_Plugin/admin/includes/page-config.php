<style type="text/css">
	#ac-config-all{
		display: flex;
		justify-content: space-between;
		flex-direction: row;
		padding-right: 20px;
	}
	#ac-config-card-1{
	    background-color: white;
	    padding: 20px;
	    border-radius: 10px;
	    margin: 20px 0px;
	    width: 500px;
	}
	#ac-config-card-2{
	    background: url('https://i.insider.com/5dd42a3e7eece50609155eae?width=1200&format=jpeg');
	    background-position: center;
	    background-size: cover;
	    padding: 30px;
	    border-radius: 10px;
	    margin: 20px 0px;
	    width: auto;    
	    width: 100%;
		margin-left: 20px;
	}
	.ac-config-label{
		font-weight: bolder;
		font-size: 14px;
	}
	.ac-config-input{
		display: flex;
	    padding-top: 6px;
	    flex-direction: row;
	}
	.ac-input-color{
		width: 100%;
	    border: none !important;
	    height: 71px;
	    padding: 0;
	    margin: 0;
	}
	#ac-colors-config{
		display: flex;
		justify-content: space-between;
	}
	.ac-colors-config{
		width: 50%;
	}
	.ac-position-01{
		justify-content: flex-end;
	}
	.ac-position-02{
		align-items: flex-end;
	}
	.ac-position-03{
		justify-content: flex-end;
		align-items: flex-end;
	}
	.AC_wpp_plugin {
		background-position: center;
		background-repeat: no-repeat;
		background-image: url("<?php echo(AC_ZAP_PATH.'includes/img/wpp.svg'); ?>");
		background-size: 50% auto;
		background-color: <?=$ac_zap_config['data']['color_01']?>; /* Cor do fundo */
		position: fixed;
		z-index: 1000;
		width: 60px;
		height: 60px;
		-webkit-border-radius: 50%;
		cursor: pointer;
		transition: .3s;
	}
	.AC_wpp_plugin:hover {background-color: <?=$ac_zap_config['data']['color_02']?>; /* Cor do fundo ao passar o mouse */}
	.AC_wpp_plugin:after,
	.AC_wpp_plugin:before {
		content: '';
		position: absolute;
		opacity: 0;
		border: 4px solid <?=$ac_zap_config['data']['color_01']?>  /* Cor do fundo efeito*/;
		left: -10px;
		top: -10px;
		right: -10px;
		bottom: -10px;
		-webkit-border-radius: 50%;
		animation: AC_WhatsApp_Animation 1.5s ease infinite
	}
	.AC_wpp_plugin:after {animation-delay: .5s}
	.AC_wpp_plugin:hover:after {border: 4px solid <?=$ac_zap_config['data']['color_02']?> /* Cor do fundo ao passar o mouse */}
	.AC_wpp_plugin:hover:before {border: 4px solid <?=$ac_zap_config['data']['color_02']?> /* Cor do fundo ao passar o mouse */}

	@keyframes AC_WhatsApp_Animation {
		0% {transform: scale(.5)}
		50% {opacity: 1}
		100% {transform: scale(1.2);opacity: 0}
	}
	#ac-msg-admin-01{    
		background: #0cbc55;
	    padding: 20px;
	    margin-right: 20px;
	    border-radius: 5px;
	    margin-top: 20px;
	    color: white;
	}
	#ac-msg-admin-02{    
		background: #ea4a1a;
	    padding: 20px;
	    margin-right: 20px;
	    border-radius: 5px;
	    margin-top: 20px;
	    color: white;
	}
	#ac-msg-admin-01 p, #ac-msg-admin-02 p{
		padding: 0;
		margin: 0;
	    font-weight: 400;
	    font-size: 30px;
	}
</style>

<script type="text/javascript">
    function mark_zap(t, mask){
        var i = t.value.length;
        var saida = mask.substring(1,0);
        var texto = mask.substring(i)
        if (texto.substring(0,1) != saida){
        t.value += texto.substring(0,1);
        }
    }
</script>
<?php if (isset($_GET['msg']) && $_GET['msg'] = "1") { ?>
	<div id="ac-msg-admin-01">
		<p><?php echo(__('Configurações salvas com sucesso!','ac_zap'))?></p>
	</div>
<?php } elseif (isset($_GET['msg']) && $_GET['msg'] = "2") { ?>
	<div id="ac-msg-admin-02">
		<p><?php echo(__('Falha ao salvar, tente novamente mais tarde!','ac_zap'))?></p>
	</div>
<?php } ?>

<div id="ac-config-all">
	<form id="ac-config-card-1">				
	    <h1 style="text-align: center;"><?php echo(__('Configurações do Whatsapp','ac_zap'))?></h1>
	    <br>			    
	    <input type="text" name="url_1" id="url_1" value="<?=AC_ZAP_PATH?>" style="display: none">
	    <input type="text" name="url_2" id="url_2" value="<?=AC_ZAP_PATH_SERVER?>" style="display: none">
	    <label for="number" class="ac-config-label"><?php echo(__('Número de telefone','ac_zap'))?></label>
	    <div class="ac-config-input">
			<select name="area_code" id="area_code" style="width: 110px;vertical-align: top;">
				<optgroup label="<?php echo(__('Atual','ac_zap'))?>">
					<option data-countryCode="BR" value="55" Selected>Brasil (+55)</option>
				</optgroup>
				<optgroup label="<?php echo(__('Disponível','ac_zap'))?>">
					<option data-countryCode="DZ" value="213">Algeria (+213)</option>
					<option data-countryCode="AD" value="376">Andorra (+376)</option>
					<option data-countryCode="AO" value="244">Angola (+244)</option>
					<option data-countryCode="AI" value="1264">Anguilla (+1264)</option>
					<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda (+1268)</option>
					<option data-countryCode="AR" value="54">Argentina (+54)</option>
					<option data-countryCode="AM" value="374">Armenia (+374)</option>
					<option data-countryCode="AW" value="297">Aruba (+297)</option>
					<option data-countryCode="AU" value="61">Australia (+61)</option>
					<option data-countryCode="AT" value="43">Austria (+43)</option>
					<option data-countryCode="AZ" value="994">Azerbaijan (+994)</option>
					<option data-countryCode="BS" value="1242">Bahamas (+1242)</option>
					<option data-countryCode="BH" value="973">Bahrain (+973)</option>
					<option data-countryCode="BD" value="880">Bangladesh (+880)</option>
					<option data-countryCode="BB" value="1246">Barbados (+1246)</option>
					<option data-countryCode="BY" value="375">Belarus (+375)</option>
					<option data-countryCode="BE" value="32">Belgium (+32)</option>
					<option data-countryCode="BZ" value="501">Belize (+501)</option>
					<option data-countryCode="BJ" value="229">Benin (+229)</option>
					<option data-countryCode="BM" value="1441">Bermuda (+1441)</option>
					<option data-countryCode="BT" value="975">Bhutan (+975)</option>
					<option data-countryCode="BO" value="591">Bolivia (+591)</option>
					<option data-countryCode="BA" value="387">Bosnia Herzegovina (+387)</option>
					<option data-countryCode="BW" value="267">Botswana (+267)</option>
					<option data-countryCode="BR" value="55">Brazil (+55)</option>
					<option data-countryCode="BN" value="673">Brunei (+673)</option>
					<option data-countryCode="BG" value="359">Bulgaria (+359)</option>
					<option data-countryCode="BF" value="226">Burkina Faso (+226)</option>
					<option data-countryCode="BI" value="257">Burundi (+257)</option>
					<option data-countryCode="KH" value="855">Cambodia (+855)</option>
					<option data-countryCode="CM" value="237">Cameroon (+237)</option>
					<option data-countryCode="CA" value="1">Canada (+1)</option>
					<option data-countryCode="CV" value="238">Cape Verde Islands (+238)</option>
					<option data-countryCode="KY" value="1345">Cayman Islands (+1345)</option>
					<option data-countryCode="CF" value="236">Central African Republic (+236)</option>
					<option data-countryCode="CL" value="56">Chile (+56)</option>
					<option data-countryCode="CN" value="86">China (+86)</option>
					<option data-countryCode="CO" value="57">Colombia (+57)</option>
					<option data-countryCode="KM" value="269">Comoros (+269)</option>
					<option data-countryCode="CG" value="242">Congo (+242)</option>
					<option data-countryCode="CK" value="682">Cook Islands (+682)</option>
					<option data-countryCode="CR" value="506">Costa Rica (+506)</option>
					<option data-countryCode="HR" value="385">Croatia (+385)</option>
					<option data-countryCode="CU" value="53">Cuba (+53)</option>
					<option data-countryCode="CY" value="90392">Cyprus North (+90392)</option>
					<option data-countryCode="CY" value="357">Cyprus South (+357)</option>
					<option data-countryCode="CZ" value="42">Czech Republic (+42)</option>
					<option data-countryCode="DK" value="45">Denmark (+45)</option>
					<option data-countryCode="DJ" value="253">Djibouti (+253)</option>
					<option data-countryCode="DM" value="1809">Dominica (+1809)</option>
					<option data-countryCode="DO" value="1809">Dominican Republic (+1809)</option>
					<option data-countryCode="EC" value="593">Ecuador (+593)</option>
					<option data-countryCode="EG" value="20">Egypt (+20)</option>
					<option data-countryCode="SV" value="503">El Salvador (+503)</option>
					<option data-countryCode="GQ" value="240">Equatorial Guinea (+240)</option>
					<option data-countryCode="ER" value="291">Eritrea (+291)</option>
					<option data-countryCode="EE" value="372">Estonia (+372)</option>
					<option data-countryCode="ET" value="251">Ethiopia (+251)</option>
					<option data-countryCode="FK" value="500">Falkland Islands (+500)</option>
					<option data-countryCode="FO" value="298">Faroe Islands (+298)</option>
					<option data-countryCode="FJ" value="679">Fiji (+679)</option>
					<option data-countryCode="FI" value="358">Finland (+358)</option>
					<option data-countryCode="FR" value="33">France (+33)</option>
					<option data-countryCode="GF" value="594">French Guiana (+594)</option>
					<option data-countryCode="PF" value="689">French Polynesia (+689)</option>
					<option data-countryCode="GA" value="241">Gabon (+241)</option>
					<option data-countryCode="GM" value="220">Gambia (+220)</option>
					<option data-countryCode="GE" value="7880">Georgia (+7880)</option>
					<option data-countryCode="DE" value="49">Germany (+49)</option>
					<option data-countryCode="GH" value="233">Ghana (+233)</option>
					<option data-countryCode="GI" value="350">Gibraltar (+350)</option>
					<option data-countryCode="GR" value="30">Greece (+30)</option>
					<option data-countryCode="GL" value="299">Greenland (+299)</option>
					<option data-countryCode="GD" value="1473">Grenada (+1473)</option>
					<option data-countryCode="GP" value="590">Guadeloupe (+590)</option>
					<option data-countryCode="GU" value="671">Guam (+671)</option>
					<option data-countryCode="GT" value="502">Guatemala (+502)</option>
					<option data-countryCode="GN" value="224">Guinea (+224)</option>
					<option data-countryCode="GW" value="245">Guinea - Bissau (+245)</option>
					<option data-countryCode="GY" value="592">Guyana (+592)</option>
					<option data-countryCode="HT" value="509">Haiti (+509)</option>
					<option data-countryCode="HN" value="504">Honduras (+504)</option>
					<option data-countryCode="HK" value="852">Hong Kong (+852)</option>
					<option data-countryCode="HU" value="36">Hungary (+36)</option>
					<option data-countryCode="IS" value="354">Iceland (+354)</option>
					<option data-countryCode="IN" value="91">India (+91)</option>
					<option data-countryCode="ID" value="62">Indonesia (+62)</option>
					<option data-countryCode="IR" value="98">Iran (+98)</option>
					<option data-countryCode="IQ" value="964">Iraq (+964)</option>
					<option data-countryCode="IE" value="353">Ireland (+353)</option>
					<option data-countryCode="IL" value="972">Israel (+972)</option>
					<option data-countryCode="IT" value="39">Italy (+39)</option>
					<option data-countryCode="JM" value="1876">Jamaica (+1876)</option>
					<option data-countryCode="JP" value="81">Japan (+81)</option>
					<option data-countryCode="JO" value="962">Jordan (+962)</option>
					<option data-countryCode="KZ" value="7">Kazakhstan (+7)</option>
					<option data-countryCode="KE" value="254">Kenya (+254)</option>
					<option data-countryCode="KI" value="686">Kiribati (+686)</option>
					<option data-countryCode="KP" value="850">Korea North (+850)</option>
					<option data-countryCode="KR" value="82">Korea South (+82)</option>
					<option data-countryCode="KW" value="965">Kuwait (+965)</option>
					<option data-countryCode="KG" value="996">Kyrgyzstan (+996)</option>
					<option data-countryCode="LA" value="856">Laos (+856)</option>
					<option data-countryCode="LV" value="371">Latvia (+371)</option>
					<option data-countryCode="LB" value="961">Lebanon (+961)</option>
					<option data-countryCode="LS" value="266">Lesotho (+266)</option>
					<option data-countryCode="LR" value="231">Liberia (+231)</option>
					<option data-countryCode="LY" value="218">Libya (+218)</option>
					<option data-countryCode="LI" value="417">Liechtenstein (+417)</option>
					<option data-countryCode="LT" value="370">Lithuania (+370)</option>
					<option data-countryCode="LU" value="352">Luxembourg (+352)</option>
					<option data-countryCode="MO" value="853">Macao (+853)</option>
					<option data-countryCode="MK" value="389">Macedonia (+389)</option>
					<option data-countryCode="MG" value="261">Madagascar (+261)</option>
					<option data-countryCode="MW" value="265">Malawi (+265)</option>
					<option data-countryCode="MY" value="60">Malaysia (+60)</option>
					<option data-countryCode="MV" value="960">Maldives (+960)</option>
					<option data-countryCode="ML" value="223">Mali (+223)</option>
					<option data-countryCode="MT" value="356">Malta (+356)</option>
					<option data-countryCode="MH" value="692">Marshall Islands (+692)</option>
					<option data-countryCode="MQ" value="596">Martinique (+596)</option>
					<option data-countryCode="MR" value="222">Mauritania (+222)</option>
					<option data-countryCode="YT" value="269">Mayotte (+269)</option>
					<option data-countryCode="MX" value="52">Mexico (+52)</option>
					<option data-countryCode="FM" value="691">Micronesia (+691)</option>
					<option data-countryCode="MD" value="373">Moldova (+373)</option>
					<option data-countryCode="MC" value="377">Monaco (+377)</option>
					<option data-countryCode="MN" value="976">Mongolia (+976)</option>
					<option data-countryCode="MS" value="1664">Montserrat (+1664)</option>
					<option data-countryCode="MA" value="212">Morocco (+212)</option>
					<option data-countryCode="MZ" value="258">Mozambique (+258)</option>
					<option data-countryCode="MN" value="95">Myanmar (+95)</option>
					<option data-countryCode="NA" value="264">Namibia (+264)</option>
					<option data-countryCode="NR" value="674">Nauru (+674)</option>
					<option data-countryCode="NP" value="977">Nepal (+977)</option>
					<option data-countryCode="NL" value="31">Netherlands (+31)</option>
					<option data-countryCode="NC" value="687">New Caledonia (+687)</option>
					<option data-countryCode="NZ" value="64">New Zealand (+64)</option>
					<option data-countryCode="NI" value="505">Nicaragua (+505)</option>
					<option data-countryCode="NE" value="227">Niger (+227)</option>
					<option data-countryCode="NG" value="234">Nigeria (+234)</option>
					<option data-countryCode="NU" value="683">Niue (+683)</option>
					<option data-countryCode="NF" value="672">Norfolk Islands (+672)</option>
					<option data-countryCode="NP" value="670">Northern Marianas (+670)</option>
					<option data-countryCode="NO" value="47">Norway (+47)</option>
					<option data-countryCode="OM" value="968">Oman (+968)</option>
					<option data-countryCode="PW" value="680">Palau (+680)</option>
					<option data-countryCode="PA" value="507">Panama (+507)</option>
					<option data-countryCode="PG" value="675">Papua New Guinea (+675)</option>
					<option data-countryCode="PY" value="595">Paraguay (+595)</option>
					<option data-countryCode="PE" value="51">Peru (+51)</option>
					<option data-countryCode="PH" value="63">Philippines (+63)</option>
					<option data-countryCode="PL" value="48">Poland (+48)</option>
					<option data-countryCode="PT" value="351">Portugal (+351)</option>
					<option data-countryCode="PR" value="1787">Puerto Rico (+1787)</option>
					<option data-countryCode="QA" value="974">Qatar (+974)</option>
					<option data-countryCode="RE" value="262">Reunion (+262)</option>
					<option data-countryCode="RO" value="40">Romania (+40)</option>
					<option data-countryCode="RU" value="7">Russia (+7)</option>
					<option data-countryCode="RW" value="250">Rwanda (+250)</option>
					<option data-countryCode="SM" value="378">San Marino (+378)</option>
					<option data-countryCode="ST" value="239">Sao Tome &amp; Principe (+239)</option>
					<option data-countryCode="SA" value="966">Saudi Arabia (+966)</option>
					<option data-countryCode="SN" value="221">Senegal (+221)</option>
					<option data-countryCode="CS" value="381">Serbia (+381)</option>
					<option data-countryCode="SC" value="248">Seychelles (+248)</option>
					<option data-countryCode="SL" value="232">Sierra Leone (+232)</option>
					<option data-countryCode="SG" value="65">Singapore (+65)</option>
					<option data-countryCode="SK" value="421">Slovak Republic (+421)</option>
					<option data-countryCode="SI" value="386">Slovenia (+386)</option>
					<option data-countryCode="SB" value="677">Solomon Islands (+677)</option>
					<option data-countryCode="SO" value="252">Somalia (+252)</option>
					<option data-countryCode="ZA" value="27">South Africa (+27)</option>
					<option data-countryCode="ES" value="34">Spain (+34)</option>
					<option data-countryCode="LK" value="94">Sri Lanka (+94)</option>
					<option data-countryCode="SH" value="290">St. Helena (+290)</option>
					<option data-countryCode="KN" value="1869">St. Kitts (+1869)</option>
					<option data-countryCode="SC" value="1758">St. Lucia (+1758)</option>
					<option data-countryCode="SD" value="249">Sudan (+249)</option>
					<option data-countryCode="SR" value="597">Suriname (+597)</option>
					<option data-countryCode="SZ" value="268">Swaziland (+268)</option>
					<option data-countryCode="SE" value="46">Sweden (+46)</option>
					<option data-countryCode="CH" value="41">Switzerland (+41)</option>
					<option data-countryCode="SI" value="963">Syria (+963)</option>
					<option data-countryCode="TW" value="886">Taiwan (+886)</option>
					<option data-countryCode="TJ" value="7">Tajikstan (+7)</option>
					<option data-countryCode="TH" value="66">Thailand (+66)</option>
					<option data-countryCode="TG" value="228">Togo (+228)</option>
					<option data-countryCode="TO" value="676">Tonga (+676)</option>
					<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago (+1868)</option>
					<option data-countryCode="TN" value="216">Tunisia (+216)</option>
					<option data-countryCode="TR" value="90">Turkey (+90)</option>
					<option data-countryCode="TM" value="7">Turkmenistan (+7)</option>
					<option data-countryCode="TM" value="993">Turkmenistan (+993)</option>
					<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands (+1649)</option>
					<option data-countryCode="TV" value="688">Tuvalu (+688)</option>
					<option data-countryCode="UG" value="256">Uganda (+256)</option>
					<option data-countryCode="GB" value="44">UK (+44)</option>
					<option data-countryCode="UA" value="380">Ukraine (+380)</option>
					<option data-countryCode="AE" value="971">United Arab Emirates (+971)</option>
					<option data-countryCode="UY" value="598">Uruguay (+598)</option>
					<option data-countryCode="US" value="1">USA (+1)</option>
					<option data-countryCode="UZ" value="7">Uzbekistan (+7)</option>
					<option data-countryCode="VU" value="678">Vanuatu (+678)</option>
					<option data-countryCode="VA" value="379">Vatican City (+379)</option>
					<option data-countryCode="VE" value="58">Venezuela (+58)</option>
					<option data-countryCode="VN" value="84">Vietnam (+84)</option>
					<option data-countryCode="VG" value="84">Virgin Islands - British (+1284)</option>
					<option data-countryCode="VI" value="84">Virgin Islands - US (+1340)</option>
					<option data-countryCode="WF" value="681">Wallis &amp; Futuna (+681)</option>
					<option data-countryCode="YE" value="969">Yemen (North)(+969)</option>
					<option data-countryCode="YE" value="967">Yemen (South)(+967)</option>
					<option data-countryCode="ZM" value="260">Zambia (+260)</option>
					<option data-countryCode="ZW" value="263">Zimbabwe (+263)</option>
				</optgroup>
			</select>
        	<input name="number" type="text" id="number" value="<?php echo($ac_zap_config['data']['number']) ?>" style="width: 100%" placeholder="<?php echo(__('Exemplo: (17) 9.97755-5598','ac_zap'))?>" />
        </div>
        <p class="description" id="tagline-description"><?php echo(__('IMPORTANTE: Preencher também o DDD!','ac_zap'))?></p>
	    <br>
        <div id="ac-colors-config">
            <div class="ac-colors-config">	            	
		        <label for="color_01" class="ac-config-label"><?php echo(__('Cor do botão','ac_zap'))?></label>
		        <input name="color_01" id="color_01" type="color" value="<?php echo($ac_zap_config['data']['color_01']) ?>" class="ac-config-input ac-input-color"/>
            </div>
            <div class="ac-colors-config">	            	
		        <label for="color_02" class="ac-config-label"><?php echo(__('Ao passar o mouse','ac_zap'))?></label>
		        <input name="color_02" id="color_02" type="color" value="<?php echo($ac_zap_config['data']['color_02']) ?>" class="ac-config-input ac-input-color"/>
            </div>
        </div>
        <br>
	    <label for="active" class="ac-config-label"><?php echo(__('Onde mostrar botão','ac_zap'))?></label>
	    <div class="ac-config-input">
        	<select id="active" name="active" style="width: 100%">
        		<option value="1"<?php if($ac_zap_config['data']['active'] == 1){ echo('selected'); } ?>><?php echo(__('Não Mostrar','ac_zap'))?></option>
        		<option value="2"<?php if($ac_zap_config['data']['active'] == 2){ echo('selected'); } ?>><?php echo(__('Esquerda, em cima','ac_zap'))?></option>
        		<option value="3"<?php if($ac_zap_config['data']['active'] == 3){ echo('selected'); } ?>><?php echo(__('Direita, em cima','ac_zap'))?></option>
        		<option value="4"<?php if($ac_zap_config['data']['active'] == 4){ echo('selected'); } ?>><?php echo(__('Esquerda, em baixo','ac_zap'))?></option>
        		<option value="5"<?php if($ac_zap_config['data']['active'] == 5){ echo('selected'); } ?>><?php echo(__('Direita, em baixo','ac_zap'))?></option>
        	</select>
	    </div>
        <br>
	    <label for="language" class="ac-config-label"><?php echo(__('Idioma do Whatsapp','ac_zap'))?></label>
	    <div class="ac-config-input">
        	<select name="language" id="language" style="width: 100%;">
			    <optgroup label="<?php echo(__('Atual','ac_zap'))?>">
			        <option value="pt_BR" lang="pt" selected="selected" data-installed="1">Português do Brasil</option>
			    </optgroup>
			    <optgroup label="<?php echo(__('Disponível','ac_zap'))?>">
			        <option value="en-us" lang="en">English (United States)</option>
			        <option value="pt_BR" lang="pt">Português do Brasil</option>
			        <option value="af" lang="af">Afrikaans</option>
			        <option value="ar" lang="ar">العربية</option>
			        <option value="ary" lang="ar">العربية المغربية</option>
			        <option value="as" lang="as">অসমীয়া</option>
			        <option value="az" lang="az">Azərbaycan dili</option>
			        <option value="azb" lang="az">گؤنئی آذربایجان</option>
			        <option value="bel" lang="be">Беларуская мова</option>
			        <option value="bg_BG" lang="bg">Български</option>
			        <option value="bn_BD" lang="bn">বাংলা</option>
			        <option value="bo" lang="bo">བོད་ཡིག</option>
			        <option value="bs_BA" lang="bs">Bosanski</option>
			        <option value="ca" lang="ca">Català</option>
			        <option value="ceb" lang="ceb">Cebuano</option>
			        <option value="cs_CZ" lang="cs">Čeština</option>
			        <option value="cy" lang="cy">Cymraeg</option>
			        <option value="da_DK" lang="da">Dansk</option>
			        <option value="de_AT" lang="de">Deutsch (Österreich)</option>
			        <option value="de_DE" lang="de">Deutsch</option>
			        <option value="de_DE_formal" lang="de">Deutsch (Sie)</option>
			        <option value="de_CH_informal" lang="de">Deutsch (Schweiz, Du)</option>
			        <option value="de_CH" lang="de">Deutsch (Schweiz)</option>
			        <option value="dzo" lang="dz">རྫོང་ཁ</option>
			        <option value="el" lang="el">Ελληνικά</option>
			        <option value="en_GB" lang="en">English (UK)</option>
			        <option value="en_ZA" lang="en">English (South Africa)</option>
			        <option value="en_AU" lang="en">English (Australia)</option>
			        <option value="en_CA" lang="en">English (Canada)</option>
			        <option value="en_NZ" lang="en">English (New Zealand)</option>
			        <option value="eo" lang="eo">Esperanto</option>
			        <option value="es_CO" lang="es">Español de Colombia</option>
			        <option value="es_CR" lang="es">Español de Costa Rica</option>
			        <option value="es_AR" lang="es">Español de Argentina</option>
			        <option value="es_PE" lang="es">Español de Perú</option>
			        <option value="es_PR" lang="es">Español de Puerto Rico</option>
			        <option value="es_UY" lang="es">Español de Uruguay</option>
			        <option value="es_GT" lang="es">Español de Guatemala</option>
			        <option value="es_ES" lang="es">Español</option>
			        <option value="es_MX" lang="es">Español de México</option>
			        <option value="es_CL" lang="es">Español de Chile</option>
			        <option value="es_VE" lang="es">Español de Venezuela</option>
			        <option value="et" lang="et">Eesti</option>
			        <option value="eu" lang="eu">Euskara</option>
			        <option value="fa_IR" lang="fa">فارسی</option>
			        <option value="fi" lang="fi">Suomi</option>
			        <option value="fr_BE" lang="fr">Français de Belgique</option>
			        <option value="fr_FR" lang="fr">Français</option>
			        <option value="fr_CA" lang="fr">Français du Canada</option>
			        <option value="fur" lang="fur">Friulian</option>
			        <option value="gd" lang="gd">Gàidhlig</option>
			        <option value="gl_ES" lang="gl">Galego</option>
			        <option value="gu" lang="gu">ગુજરાતી</option>
			        <option value="haz" lang="haz">هزاره گی</option>
			        <option value="he_IL" lang="he">עִבְרִית</option>
			        <option value="hi_IN" lang="hi">हिन्दी</option>
			        <option value="hr" lang="hr">Hrvatski</option>
			        <option value="hsb" lang="hsb">Hornjoserbšćina</option>
			        <option value="hu_HU" lang="hu">Magyar</option>
			        <option value="hy" lang="hy">Հայերեն</option>
			        <option value="id_ID" lang="id">Bahasa Indonesia</option>
			        <option value="is_IS" lang="is">Íslenska</option>
			        <option value="it_IT" lang="it">Italiano</option>
			        <option value="ja" lang="ja">日本語</option>
			        <option value="jv_ID" lang="jv">Basa Jawa</option>
			        <option value="ka_GE" lang="ka">ქართული</option>
			        <option value="kab" lang="kab">Taqbaylit</option>
			        <option value="kk" lang="kk">Қазақ тілі</option>
			        <option value="km" lang="km">ភាសាខ្មែរ</option>
			        <option value="kn" lang="kn">ಕನ್ನಡ</option>
			        <option value="ko_KR" lang="ko">한국어</option>
			        <option value="ckb" lang="ku">كوردی&lrm;</option>
			        <option value="lo" lang="lo">ພາສາລາວ</option>
			        <option value="lt_LT" lang="lt">Lietuvių kalba</option>
			        <option value="lv" lang="lv">Latviešu valoda</option>
			        <option value="mk_MK" lang="mk">Македонски јазик</option>
			        <option value="ml_IN" lang="ml">മലയാളം</option>
			        <option value="mn" lang="mn">Монгол</option>
			        <option value="mr" lang="mr">मराठी</option>
			        <option value="ms_MY" lang="ms">Bahasa Melayu</option>
			        <option value="my_MM" lang="my">ဗမာစာ</option>
			        <option value="nb_NO" lang="nb">Norsk bokmål</option>
			        <option value="ne_NP" lang="ne">नेपाली</option>
			        <option value="nl_BE" lang="nl">Nederlands (België)</option>
			        <option value="nl_NL_formal" lang="nl">Nederlands (Formeel)</option>
			        <option value="nl_NL" lang="nl">Nederlands</option>
			        <option value="nn_NO" lang="nn">Norsk nynorsk</option>
			        <option value="oci" lang="oc">Occitan</option>
			        <option value="pa_IN" lang="pa">ਪੰਜਾਬੀ</option>
			        <option value="pl_PL" lang="pl">Polski</option>
			        <option value="ps" lang="ps">پښتو</option>
			        <option value="pt_PT" lang="pt">Português</option>
			        <option value="pt_PT_ao90" lang="pt">Português (AO90)</option>
			        <option value="pt_AO" lang="pt">Português de Angola</option>
			        <option value="rhg" lang="rhg">Ruáinga</option>
			        <option value="ro_RO" lang="ro">Română</option>
			        <option value="ru_RU" lang="ru">Русский</option>
			        <option value="sah" lang="sah">Сахалыы</option>
			        <option value="snd" lang="sd">سنڌي</option>
			        <option value="si_LK" lang="si">සිංහල</option>
			        <option value="sk_SK" lang="sk">Slovenčina</option>
			        <option value="skr" lang="skr">سرائیکی</option>
			        <option value="sl_SI" lang="sl">Slovenščina</option>
			        <option value="sq" lang="sq">Shqip</option>
			        <option value="sr_RS" lang="sr">Српски језик</option>
			        <option value="sv_SE" lang="sv">Svenska</option>
			        <option value="sw" lang="sw">Kiswahili</option>
			        <option value="szl" lang="szl">Ślōnskŏ gŏdka</option>
			        <option value="ta_IN" lang="ta">தமிழ்</option>
			        <option value="te" lang="te">తెలుగు</option>
			        <option value="th" lang="th">ไทย</option>
			        <option value="tl" lang="tl">Tagalog</option>
			        <option value="tr_TR" lang="tr">Türkçe</option>
			        <option value="tt_RU" lang="tt">Татар теле</option>
			        <option value="tah" lang="ty">Reo Tahiti</option>
			        <option value="ug_CN" lang="ug">ئۇيغۇرچە</option>
			        <option value="uk" lang="uk">Українська</option>
			        <option value="ur" lang="ur">اردو</option>
			        <option value="uz_UZ" lang="uz">O‘zbekcha</option>
			        <option value="vi" lang="vi">Tiếng Việt</option>
			        <option value="zh_TW" lang="zh">繁體中文</option>
			        <option value="zh_CN" lang="zh">简体中文</option>
			        <option value="zh_HK" lang="zh">香港中文版 </option>
			    </optgroup>
			</select>

	    </div>
        <br>
	    <input type="submit" name="submit" id="ac-zap-submit" class="button button-primary" value="Salvar alterações" style="width: 100%">
	</form>
	<div id="ac-config-card-2">		
		<?php if ($ac_zap_config['data']['active'] != 1): ?>				
			<a class="AC_wpp_plugin" href="https://api.whatsapp.com/send?phone=<?=$ac_zap_config['data']['area_code']?><?=$ac_zap_config['data']['number']?>&text&lang=pt_br" target="_blank"></a>
		<?php endif ?>	
	</div>
</div>