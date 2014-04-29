<?php echo "<?"; ?>xml version="1.0" encoding="utf-8"<?php echo "?>"; ?>
<countrydata>
<?php
$uid=0;
include("usr_check.php");
include("config.php");
$query=mysql_query("SELECT conqured FROM users WHERE uid='$uid'"); 
while($temp=mysql_fetch_array($query))
{
$conqured=$temp["conqured"];
}
$ch=NULL;
$rt=0;
for($i=0;$i<strlen($conqured);$i++)
{
if($conqured[$i]=='n')
$rt=1;
if($rt==0)
$ch=$ch.$conqured[$i];
if($rt==1)
{
?>
<state id="range">
		<data><?php echo $ch; ?></data>
		<color>f16784</color>
</state>
<?php
$ch=NULL;
$rt=0;
}
else
continue;
}
include("close.php");
?>
<state id="default_color">
		<color>bbbbaa</color>
</state>
<state id="background_color">
		<color>409aff</color>
</state>
<state id="outline_color">
		<color>330000</color>
</state>

<state id="AF">
		<name>Afghanistan</name>
		<data>181</data>
		<url>ques.php/?id=181</url>
                <target>_self</target>
		
</state>
<state id="AL">
		<name>Albania</name>
		<data>95</data>
		<url>ques.php/?id=95</url>
                <target>_self</target>
</state>
<state id="AG">
		<name>Algeria</name>
		<data>107</data>
		<url>ques.php/?id=107</url>
                <target>_self</target>
</state>
<state id="AN">
		<name>Andorra</name>
		<data>180</data>
		<url>ques.php/?id=180</url>
                <target>_self</target>
</state>
<state id="AO">
		<name>Angola</name>
		<data>164</data>
		<url>ques.php/?id=164</url>
                <target>_self</target>
</state>
<state id="AC">
		<name>Antigua and Barbuda</name>
		<data>56</data>
</state>
<state id="AR">
		<name>Argentina</name>
		<data>34</data>
		<url>ques.php/?id=34</url>
                <target>_self</target>
		
</state>
<state id="AM">
		<name>Armenia</name>
		<data>100</data>
</state>
<state id="AA">
		<name>Aruba</name>
</state>
<state id="AS">
		<name>Australia</name>
		<data>4</data>
		<url>ques.php/?id=4</url>
                <target>_self</target>
</state>
<state id="AU">
		<name>Austria</name>
		<data>16</data>
		<url>ques.php/?id=16</url>
                <target>_self</target>
</state>
<state id="AJ">
		<name>Azerbaijan</name>
		<data>89</data>
</state>
<state id="AZ">
	<name>Azores (Pt.)</name>
</state>
<state id="BF">
		<name>Bahamas</name>
		<data>49</data>
</state>
<state id="BA">
		<name>Bahrain</name>
		<data>37</data>
</state>
<state id="BG">
		<name>Bangladesh</name>
		<data>139</data>
		<url>ques.php/?id=139</url>
                <target>_self</target>
</state>
<state id="BB">
		<name>Barbados</name>
		<data>27</data>
</state>
<state id="BO">
		<name>Belarus</name>
		<data>53</data>
		<url>ques.php/?id=53</url>
                <target>_self</target>
</state>
<state id="BE">
		<name>Belgium</name>
		<data>6</data>
		<url>ques.php/?id=6</url>
                <target>_self</target>
</state>
<state id="BH">
		<name>Belize</name>
		<data>67</data>
		<url>ques.php/?id=67</url>
                <target>_self</target>
</state>
<state id="BN">
		<name>Benin</name>
		<data>159</data>
</state>
<state id="BD">
		<name>Bermuda</name>
</state>
<state id="BT">
		<name>Bhutan</name>
		<data>136</data>
		<url>ques.php/?id=136</url>
                <target>_self</target>
</state>
<state id="BL">
		<name>Bolivia</name>
		<data>114</data>
		<url>ques.php/?id=114</url>
                <target>_self</target>
</state>
<state id="BK">
		<name>Bosnia and Herzegovina</name>
		<data>66</data>
</state>
<state id="BC">
		<name>Botswana</name>
		<data>125</data>
</state>
<state id="BR">
		<name>Brazil</name>
		<data>65</data>
		<url>ques.php/?id=65</url>
                <target>_self</target>
</state>
<state id="IO">
	<name>British Indian Ocean Territory</name>
</state>
<state id="VI">
	<name>British Virgin Islands</name>
</state>
<state id="BX">
		<name>Brunei Darussalam</name>
		<data>31</data>
</state>
<state id="BU">
		<name>Bulgaria</name>
		<data>57</data>
		<url>ques.php/?id=57</url>
                <target>_self</target>
</state>
<state id="UV">
		<name>Burkina Faso</name>
		<data>173</data>
		<url>ques.php/?id=173</url>
                <target>_self</target>
</state>
<state id="BY">
		<name>Burundi</name>
		<data>171</data>
</state>
<state id="CB">
		<name>Cambodia</name>
		<data>130</data>
		<url>ques.php/?id=130</url>
                <target>_self</target>
</state>
<state id="CM">
		<name>Cameroon</name>
		<data>142</data>
</state>
<state id="CA">
		<name>Canada</name>
		<data>8</data>
		<url>ques.php/?id=8</url>
                <target>_self</target>
</state>
<state id="CV">
		<name>Cape Verde</name>
		<data>103</data>
</state>
<state id="CJ">
	<name>Cayman Islands</name>
</state>
<state id="CT">
		<name>Central African Republic</name>
		<data>168</data>
</state>
<state id="CD">
		<name>Chad</name>
		<data>165</data>
</state>
<state id="CI">
		<name>Chile</name>
		<data>43</data>
		<url>ques.php/?id=43</url>
                <target>_self</target>

</state>
<state id="CH">
		<name>China</name>
		<data>104</data>
		<url>ques.php/?id=104</url>
                <target>_self</target>
</state>
<state id="CO">
		<name>Colombia</name>
		<data>64</data>
		<url>ques.php/?id=64</url>
                <target>_self</target>
</state>
<state id="CN">
		<name>Comoros</name>
		<data>134</data>
</state>
<state id="CF">
		<name>Republic of Congo</name>
		<data>140</data>
		<url>ques.php/?id=140</url>
                <target>_self</target>

</state>
<state id="CW">
	<name>Cook Islands</name>
</state>
<state id="CP">
	<name>Canary Islands (Sp.)</name>
</state>
<state id="CG">
		<name>Democratic Republic of the Congo</name>
		<data>167</data>
		<url>ques.php/?id=167</url>
                <target>_self</target>
</state>
<state id="CS">
		<name>Costa Rica</name>
		<data>42</data>
		<url>ques.php/?id=42</url>
                <target>_self</target>
</state>
<state id="IV">
		<name>Cote d'Ivoire</name>
		<data>161</data>
		<url>ques.php/?id=161</url>
                <target>_self</target>
</state>
<state id="HR">
		<name>Croatia</name>
		<data>47</data>
</state>
<state id="CU">
		<name>Cuba</name>
		<data>52</data>
		<url>ques.php/?id=52</url>
                <target>_self</target>

</state>
<state id="CY">
		<name>Cyprus</name>
		<data>25</data>
</state>
<state id="EZ">
		<name>Czech Republic</name>
		<data>32</data>
</state>
<state id="DA">
		<name>Denmark</name>
		<data>11</data>
		<url>ques.php/?id=11</url>
                <target>_self</target>
</state>
<state id="DJ">
		<name>Djibouti</name>
		<data>153</data>
</state>
<state id="DO">
		<name>Dominica</name>
		<data>68</data>
</state>
<state id="DR">
		<name>Dominican Republic</name>
		<data>94</data>
</state>
<state id="EC">
		<name>Ecuador</name>
		<data>97</data>
		<url>ques.php/?id=97</url>
                <target>_self</target>

</state>
<state id="EG">
		<name>Egypt</name>
		<data>120</data>
		<url>ques.php/?id=120</url>
                <target>_self</target>
</state>
<state id="ES">
		<name>El Salvador</name>
		<data>105</data>
		<url>ques.php/?id=105</url>
                <target>_self</target>
</state>
<state id="EK">
		<name>Equatorial Guinea</name>
		<data>116</data>
</state>
<state id="ER">
		<name>Eritrea</name>
		<data>155</data>
</state>
<state id="EN">
		<name>Estonia</name>
		<data>41</data>
</state>
<state id="ET">
		<name>Ethiopia</name>
		<data>169</data>
		<url>ques.php/?id=169</url>
                <target>_self</target>
</state>
<state id="FK">
	<name>Falkland Islands (Islas Malvinas)</name>
</state>
<state id="FO">
	<name>Faroe Islands</name>
</state>
<state id="FM">
	<name>Federated States of Micronesia</name>
</state>
<state id="FJ">
		<name>Fiji</name>
		<data>81</data>
		<url>ques.php/?id=81</url>
                <target>_self</target>
</state>
<state id="FI">
		<name>Finland</name>
		<data>14</data>
		<url>ques.php/?id=14</url>
                <target>_self</target>
</state>
<state id="FR">
		<name>France</name>
		<data>17</data>
		<url>ques.php/?id=17</url>
                <target>_self</target>

</state>
<state id="FG">
	<name>French Guiana</name>
</state>
<state id="GB">
		<name>Gabon</name>
		<data>118</data>
</state>
<state id="GA">
		<name>Gambia</name>
		<data>151</data>
</state>
<state id="GG">
		<name>Georgia</name>
		<data>88</data>
</state>
<state id="GM">
		<name>Germany</name>
		<data>18</data>
		<url>ques.php/?id=18</url>
                <target>_self</target>
</state>
<state id="GH">
		<name>Ghana</name>
		<data>129</data>
</state>
<state id="GI">
	<name>Gibraltar (UK)</name>
</state>
<state id="GO">
	<name>Glorioso Islands</name>
</state>
<state id="GR">
		<name>Greece</name>
		<data>24</data>
		<url>ques.php/?id=24</url>
                <target>_self</target>
</state>
<state id="GL">
	<name>Greenland</name>
</state>
<state id="GJ">
		<name>Grenada</name>
		<data>93</data>
</state>
<state id="GP">
	<name>Guadeloupe</name>
</state>
<state id="GQ">
	<name>Guam</name>
</state>
<state id="GT">
		<name>Guatemala</name>
		<data>119</data>
		<url>ques.php/?id=119</url>
                <target>_self</target>
</state>
<state id="GV">
		<name>Guinea</name>
		<data>157</data>
</state>
<state id="GK">
	<name>Guernsey</name>
</state>
<state id="PU">
		<name>Guinea-Bissau</name>
		<data>166</data>
</state>
<state id="GY">
		<name>Guyana</name>
		<data>92</data>
</state>
<state id="HA">
		<name>Haiti</name>
		<data>150</data>
</state>
<state id="HO">
		<name>Honduras</name>
		<data>115</data>
		<url>ques.php/?id=115</url>
                <target>_self</target>
</state>
<state id="HK">
	<name>Hong Kong</name>
</state>
<state id="HU">
		<name>Hungary</name>
		<data>38</data>
</state>
<state id="IC">
		<name>Iceland</name>
		<data>2</data>
</state>
<state id="IN">
		<name>India</name>
		<data>127</data>
		<url>ques.php/?id=127</url>
                <target>_self</target>

</state>
<state id="IO">
	<name>British Indian Ocean Territory</name>
</state>
<state id="ID">
		<name>Indonesia</name>
		<data>112</data>
		<url>ques.php/?id=112</url>
                <target>_self</target>
</state>
<state id="IR">
		<name>Iran</name>
		<data>106</data>
		<url>ques.php/?id=106</url>
                <target>_self</target>

</state>
<state id="IZ">
	<name>Iraq</name>
</state>
<state id="EI">
		<name>Ireland</name>
		<data>12</data>
		<url>ques.php/?id=12</url>
                <target>_self</target>
</state>
<state id="IM">
	<name>Isle of Man</name>
</state>
<state id="IS">
		<name>Israel</name>
		<data>22</data>
		<url>ques.php/?id=22</url>
                <target>_self</target>

</state>
<state id="IT">
		<name>Italy</name>
		<data>21</data>
		<url>ques.php/?id=21</url>
                <target>_self</target>

</state>
<state id="JM">
		<name>Jamaica</name>
		<data>78</data>
</state>
<state id="JN">
	<name>Jan Mayen</name>
</state>
<state id="JA">
		<name>Japan</name>
		<data>9</data>
		<url>ques.php/?id=9</url>
                <target>_self</target>
</state>
<state id="DQ">
	<name>Jarvis Island</name>
</state>
<state id="JE">
	<name>Jersey</name>
</state>
<state id="JQ">
	<name>Johnston Atoll</name>
</state>
<state id="JO">
		<name>Jordan</name>
		<data>90</data>
</state>
<state id="JU">
	<name>Juan De Nova Island</name>
</state>
<state id="KZ">
		<name>Kazakhstan</name>
		<data>76</data>
</state>
<state id="KR">
		<name>Kiribati</name>
</state>
<state id="KE">
		<name>Kenya</name>
		<data>146</data>
		<url>ques.php/?id=146</url>
                <target>_self</target>
</state>
<state id="KS">
		<name>South Korea</name>
		<data>30</data>
</state>
<state id="KU">
		<name>Kuwait</name>
		<data>46</data>
</state>
<state id="KG">
		<name>Kyrgyzstan</name>
		<data>102</data>
</state>
<state id="LA">
		<name>Laos</name>
		<data>135</data>
</state>
<state id="LG">
		<name>Latvia</name>
		<data>50</data>
</state>
<state id="LE">
		<name>Lebanon</name>
		<data>83</data>
</state>
<state id="LT">
		<name>Lesotho</name>
		<data>137</data>
</state>
<state id="LI">
	<name>Liberia</name>
</state>
<state id="LY">
		<name>Libya</name>
		<data>61</data>
		<url>ques.php/?id=61</url>
                <target>_self</target>
</state>
<state id="LS">
	<name>Liechtenstein</name>
</state>
<state id="LH">
		<name>Lithuania</name>
		<data>45</data>
		<url>ques.php/?id=45</url>
                <target>_self</target>
</state>
<state id="LU">
		<name>Luxembourg</name>
		<data>15</data>
</state>
<state id="MK">
		<name>Macedonia,TFYR</name>
		<data>60</data>
</state>
<state id="MA">
		<name>Madagascar</name>
		<data>149</data>
</state>
<state id="ME">
	<name>Madeira (Pt.)</name>
</state>
<state id="MI">
		<name>Malawi</name>
		<data>162</data>
</state>
<state id="MY">
		<name>Malaysia</name>
		<data>58</data>
		<url>ques.php/?id=58</url>
                <target>_self</target>
</state>
<state id="MV">
		<name>Maldives</name>
		<data>86</data>
</state>
<state id="ML">
		<name>Mali</name>
		<data>172</data>
</state>
<state id="MT">
		<name>Malta</name>
		<data>33</data>
</state>
<state id="RM">
	<name>Marshall Islands</name>
</state>
<state id="MB">
	<name>Martinique</name>
</state>
<state id="MR">
		<name>Mauritania</name>
		<data>154</data>
</state>
<state id="MP">
		<name>Mauritius</name>
		<data>62</data>
</state>
<state id="MF">
		<name>Mayotte</name>
</state>
<state id="MX">
		<name>Mexico</name>
		<data>55</data>
		<url>ques.php/?id=55</url>
                <target>_self</target>
</state>
<state id="MQ">
	<name>Midway Islands</name>
</state>
<state id="MD">
	<name>Moldova</name>
		<data>108</data>
		<hover>Rank: 108</hover>
</state>
<state id="MN">
		<name>Monaco</name>
</state>
<state id="MG">
		<name>Mongolia</name>
		<data>117</data>
</state>
<state id="MH">
		<name>Montserrat</name>
</state>
<state id="MW">
	<name>Montenegro</name>
</state>
<state id="MO">
		<name>Morocco</name>
		<data>126</data>
		<url>ques.php/?id=126</url>
                <target>_self</target>
</state>
<state id="MZ">
		<name>Mozambique</name>
		<data>170</data>
		<url>ques.php/?id=170</url>
                <target>_self</target>
</state>
<state id="BM">
		<name>Myanmar (Burma)</name>
		<data>131</data>
		<url>ques.php/?id=131</url>
                <target>_self</target>
</state>
<state id="WA">
		<name>Namibia</name>
		<data>124</data>
</state>
<state id="NR">
	<name>Nauru</name>
</state>
<state id="NP">
		<name>Nepal</name>
		<data>143</data>
		<url>ques.php/?id=143</url>
                <target>_self</target>
</state>
<state id="NT">
	<name>Netherlands Antilles</name>
</state>
<state id="NL">
		<name>Netherlands</name>
		<data>5</data>
		<url>ques.php/?id=5</url>
                <target>_self</target>
</state>
<state id="NC">
	<name>New Caledonia</name>
</state>
<state id="NZ">
		<name>New Zealand</name>
		<data>20</data>
		<url>ques.php/?id=20</url>
                <target>_self</target>
</state>
<state id="NU">
		<name>Nicaragua</name>
		<data>121</data>
		<url>ques.php/?id=121</url>
                <target>_self</target>
</state>
<state id="NG">
		<name>Niger</name>
		<data>174</data>
		<url>ques.php/?id=174</url>
                <target>_self</target>
</state>
<state id="NI">
		<name>Nigeria</name>
		<data>152</data>
</state>
<state id="NE">
	<name>Niue</name>
</state>
<state id="NF">
	<name>Norfolk Island</name>
</state>
<state id="KN">
	<name>North Korea</name>
</state>
<state id="CQ">
	<name>Northern Mariana Islands</name>
</state>
<state id="NO">
		<name>Norway</name>
		<data>1</data>
		<url>ques.php/?id=1</url>
                <target>_self</target>
</state>
<state id="GZ">
		<name>Occupied Palestinian Territories</name>
		<data>98</data>
</state>
<state id="MU">
		<name>Oman</name>
		<data>79</data>
</state>
<state id="PS">
	<name>Pacific Islands (Palau)</name>
</state>
<state id="PK">
		<name>Pakistan</name>
		<data>144</data>
</state>
<state id="PM">
		<name>Panama</name>
		<data>59</data>
		<url>ques.php/?id=59</url>
                <target>_self</target>
</state>
<state id="PP">
		<name>Papua New Guinea</name>
		<data>132</data>
		<url>ques.php/?id=132</url>
                <target>_self</target>
</state>
<state id="PA">
		<name>Paraguay</name>
		<data>84</data>
		<url>ques.php/?id=84</url>
                <target>_self</target>
</state>
<state id="PE">
		<name>Peru</name>
		<data>82</data>
</state>
<state id="RP">
		<name>Philippines</name>
		<data>85</data>
		<url>ques.php/?id=85</url>
                <target>_self</target>
</state>
<state id="PL">
		<name>Poland</name>
		<data>35</data>
		<url>ques.php/?id=35</url>
                <target>_self</target>
</state>
<state id="PO">
		<name>Portugal</name>
		<data>23</data>
		<url>ques.php/?id=23</url>
                <target>_self</target>
</state>
<state id="RQ">
	<name>Puerto Rico</name>
</state>
<state id="QA">
		<name>Qatar</name>
		<data>44</data>
</state>
<state id="RE">
	<name>Reunion</name>
</state>
<state id="RO">
		<name>Romania</name>
		<data>72</data>
</state>
<state id="RS">
		<name>Russian Federation</name>
		<data>63</data>
		<url>ques.php/?id=63</url>
                <target>_self</target>
</state>
<state id="RW">
		<name>Rwanda</name>
		<data>158</data>
</state>
<state id="SC">
		<name>Saint Kitts and Nevis</name>
		<data>51</data>
</state>
<state id="ST">
		<name>Saint Lucia</name>
		<data>71</data>
</state>
<state id="SM">
	<name>San Marino</name>
</state>
<state id="WS">
	<name>Western Samoa</name>
		<data>70</data>
</state>
<state id="TP">
		<name>Sao Tome and Principe</name>
		<data>122</data>
</state>
<state id="SA">
		<name>Saudi Arabia</name>
		<data>73</data>
		<url>ques.php/?id=73</url>
                <target>_self</target>
</state>
<state id="SG">
		<name>Senegal</name>
		<data>156</data>
</state>
<state id="SR">
	<name>Serbia</name>
</state>
<state id="KV">
	<name>Kosovo</name>
</state>
<state id="SE">
		<name>Seychelles</name>
		<data>36</data>
</state>
<state id="SL">
		<name>Sierra Leone</name>
		<data>175</data>
</state>
<state id="SN">
		<name>Singapore</name>
		<data>28</data>
</state>
<state id="LO">
		<name>Slovakia</name>
		<data>39</data>
</state>
<state id="SI">
		<name>Slovenia</name>
		<data>29</data>
</state>
<state id="BP">
		<name>Solomon Islands</name>
		<data>123</data>
		<url>ques.php/?id=123</url>
                <target>_self</target>
</state>
<state id="SO">
	<name>Somalia</name>
</state>
<state id="SF">
		<name>South Africa</name>
		<data>111</data>
		<url>ques.php/?id=111</url>
                <target>_self</target>
</state>
<state id="SX">
	<name>South Georgia and the South Sandwich Islands</name>
</state>
<state id="SP">
		<name>Spain</name>
		<data>19</data>
		<url>ques.php/?id=19</url>
                <target>_self</target>
</state>
<state id="CE">
		<name>Sri Lanka</name>
		<data>99</data>
		<url>ques.php/?id=99</url>
                <target>_self</target>
</state>
<state id="VC">
		<name>St. Vincent and the Grenadines</name>
		<data>80</data>
</state>
<state id="SU">
		<name>Sudan</name>
		<data>138</data>
</state>
<state id="TE">
	<name>East Timor</name>
</state>
<state id="NS">
		<name>Suriname</name>
		<data>77</data>
</state>
<state id="SV">
		<name>Svalbard</name>
</state>
<state id="WZ">
		<name>Swaziland</name>
		<data>133</data>
</state>
<state id="SW">
		<name>Sweden</name>
		<data>3</data>
		<url>ques.php/?id=3</url>
                <target>_self</target>

</state>
<state id="SZ">
		<name>Switzerland</name>
		<data>10</data>
		<url>ques.php/?id=10</url>
                <target>_self</target>
</state>
<state id="SY">
	<name>Syrian Arab Republic</name>
		<data>110</data>
</state>
<state id="FP">
	<name>Tahiti (French Polynesia)</name>
</state>
<state id="TW">
	<name>Taiwan</name>
</state>
<state id="TI">
		<name>Tajikistan</name>
		<data>113</data>
</state>
<state id="TZ">
	<name>United Republic of Tanzania</name>
		<data>160</data>
</state>
<state id="TH">
		<name>Thailand</name>
		<data>74</data>
		<url>ques.php/?id=74</url>
                <target>_self</target>
</state>
<state id="TO">
		<name>Togo</name>
		<data>141</data>
</state>
<state id="TN">
		<name>Tonga</name>
</state>
<state id="TD">
		<name>Trinidad and Tobago</name>
		<data>54</data>
</state>
<state id="TS">
		<name>Tunisia</name>
		<data>91</data>
		<url>ques.php/?id=91</url>
                <target>_self</target>
</state>
<state id="TU">
		<name>Turkey</name>
		<data>96</data>
		<url>ques.php/?id=96</url>
                <target>_self</target>
</state>
<state id="TX">
		<name>Turkmenistan</name>
		<data>87</data>
</state>
<state id="TK">
	<name>Turks and Caicos Islands</name>
</state>
<state id="TV">
	<name>Tuvalu</name>
</state>
<state id="UG">
		<name>Uganda</name>
		<data>147</data>
</state>
<state id="UP">
		<name>Ukraine</name>
		<data>75</data>
</state>
<state id="TC">
		<name>United Arab Emirates</name>
		<data>48</data>
		<url>ques.php/?id=48</url>
                <target>_self</target>
</state>
<state id="UK">
		<name>United Kingdom</name>
		<data>13</data>
		<url>ques.php/?id=13</url>
                <target>_self</target>
</state>
<state id="US">
	<name>United States</name>
                   <data>7</data>
		<url>ques.php/?id=7</url>
                <target>_self</target>
</state>
<state id="UY">
		<name>Uruguay</name>
		<data>40</data>
		<url>ques.php/?id=40</url>
                <target>_self</target>
</state>
<state id="UZ">
		<name>Uzbekistan</name>
		<data>101</data>
</state>
<state id="NH">
		<name>Vanuatu</name>
		<data>128</data>
</state>
<state id="VE">
		<name>Venezuela</name>
		<data>69</data>
		<url>ques.php/?id=69</url>
                <target>_self</target>

</state>
<state id="VM">
		<name>Vietnam</name>
		<data>109</data>
		<url>ques.php/?id=109</url>
                <target>_self</target>
</state>
<state id="WQ">
	<name>Wake Island</name>
</state>
<state id="WQ">
	<name>Wake Island</name>
</state>
<state id="WF">
	<name>Wallis and Futuna</name>
</state>
<state id="WI">
	<name>Western Sahara</name>
</state>
<state id="WS">
	<name>Western Samoa</name>
</state>
<state id="YM">
		<name>Yemen</name>
		<data>148</data>
</state>
<state id="ZA">
		<name>Zambia</name>
		<data>163</data>
</state>
<state id="ZI">
		<name>Zimbabwe</name>
		<data>145</data>
</state>
</countrydata>
