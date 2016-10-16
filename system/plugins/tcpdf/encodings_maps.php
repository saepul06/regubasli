<?php
//============================================================+
// File name   : encodings_maps.php
// Version     : 1.0.000
// Begin       : 2011-10-01
// Last Update : 2011-10-01
// Author      : Nicola Asuni - Tecnick.com S.r.l - Via Della Pace, 11 - 09044 - Quartucciu (CA) - ITALY - www.tecnick.com - info@tecnick.com
// License     : GNU-LGPL v3 (http://www.gnu.org/copyleft/lesser.html)
// -------------------------------------------------------------------
// Copyright (C) 2008-2011  Nicola Asuni - Tecnick.com S.r.l.
//
// This file is part of TCPDF software library.
//
// TCPDF is free software: you can redistribute it and/or modify it
// under the terms of the GNU Lesser General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// TCPDF is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// See the GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with TCPDF.  If not, see <http://www.gnu.org/licenses/>.
//
// See LICENSE.TXT file for more information.
// -------------------------------------------------------------------
//
// Description : Unicode data for TCPDF library.
//
//============================================================+

/**
 * @file
 * Font encodings maps class for TCPDF library.
 * @author Nicola Asuni
 * @package com.tecnick.tcpdf
 * @since 5.9.123 (2011-10-01)
 */

/**
 * @class TCPDF_ENCODING_MAPS
 * This is a PHP class containing Font encodings maps class for TCPDF library.
 * @package com.tecnick.tcpdf
 * @version 1.0.000
 * @author Nicola Asuni - info@tecnick.com
 */
class TCPDF_ENCODING_MAPS {

/**
 * Array of Encoding Maps.
 * @public
 */
public $encmap = array(

// encoding map for: cp1251
'cp1251' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'afii10051',129=>'afii10052',130=>'quotesinglbase',131=>'afii10100',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'Euro',137=>'perthousand',138=>'afii10058',139=>'guilsinglleft',140=>'afii10059',141=>'afii10061',142=>'afii10060',143=>'afii10145',
144=>'afii10099',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'.notdef',153=>'trademark',154=>'afii10106',155=>'guilsinglright',156=>'afii10107',157=>'afii10109',158=>'afii10108',159=>'afii10193',
160=>'space',161=>'afii10062',162=>'afii10110',163=>'afii10057',164=>'currency',165=>'afii10050',166=>'brokenbar',167=>'section',
168=>'afii10023',169=>'copyright',170=>'afii10053',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'afii10056',
176=>'degree',177=>'plusminus',178=>'afii10055',179=>'afii10103',180=>'afii10098',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'afii10071',185=>'afii61352',186=>'afii10101',187=>'guillemotright',188=>'afii10105',189=>'afii10054',190=>'afii10102',191=>'afii10104',
192=>'afii10017',193=>'afii10018',194=>'afii10019',195=>'afii10020',196=>'afii10021',197=>'afii10022',198=>'afii10024',199=>'afii10025',
200=>'afii10026',201=>'afii10027',202=>'afii10028',203=>'afii10029',204=>'afii10030',205=>'afii10031',206=>'afii10032',207=>'afii10033',
208=>'afii10034',209=>'afii10035',210=>'afii10036',211=>'afii10037',212=>'afii10038',213=>'afii10039',214=>'afii10040',215=>'afii10041',
216=>'afii10042',217=>'afii10043',218=>'afii10044',219=>'afii10045',220=>'afii10046',221=>'afii10047',222=>'afii10048',223=>'afii10049',
224=>'afii10065',225=>'afii10066',226=>'afii10067',227=>'afii10068',228=>'afii10069',229=>'afii10070',230=>'afii10072',231=>'afii10073',
232=>'afii10074',233=>'afii10075',234=>'afii10076',235=>'afii10077',236=>'afii10078',237=>'afii10079',238=>'afii10080',239=>'afii10081',
240=>'afii10082',241=>'afii10083',242=>'afii10084',243=>'afii10085',244=>'afii10086',245=>'afii10087',246=>'afii10088',247=>'afii10089',
248=>'afii10090',249=>'afii10091',250=>'afii10092',251=>'afii10093',252=>'afii10094',253=>'afii10095',254=>'afii10096',255=>'afii10097'),

// encoding map for: iso-8859-4
'iso-8859-4' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'Aogonek',162=>'kgreenlandic',163=>'Rcommaaccent',164=>'currency',165=>'Itilde',166=>'Lcommaaccent',167=>'section',
168=>'dieresis',169=>'Scaron',170=>'Emacron',171=>'Gcommaaccent',172=>'Tbar',173=>'hyphen',174=>'Zcaron',175=>'macron',
176=>'degree',177=>'aogonek',178=>'ogonek',179=>'rcommaaccent',180=>'acute',181=>'itilde',182=>'lcommaaccent',183=>'caron',
184=>'cedilla',185=>'scaron',186=>'emacron',187=>'gcommaaccent',188=>'tbar',189=>'Eng',190=>'zcaron',191=>'eng',
192=>'Amacron',193=>'Aacute',194=>'Acircumflex',195=>'Atilde',196=>'Adieresis',197=>'Aring',198=>'AE',199=>'Iogonek',
200=>'Ccaron',201=>'Eacute',202=>'Eogonek',203=>'Edieresis',204=>'Edotaccent',205=>'Iacute',206=>'Icircumflex',207=>'Imacron',
208=>'Dcroat',209=>'Ncommaaccent',210=>'Omacron',211=>'Kcommaaccent',212=>'Ocircumflex',213=>'Otilde',214=>'Odieresis',215=>'multiply',
216=>'Oslash',217=>'Uogonek',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Utilde',222=>'Umacron',223=>'germandbls',
224=>'amacron',225=>'aacute',226=>'acircumflex',227=>'atilde',228=>'adieresis',229=>'aring',230=>'ae',231=>'iogonek',
232=>'ccaron',233=>'eacute',234=>'eogonek',235=>'edieresis',236=>'edotaccent',237=>'iacute',238=>'icircumflex',239=>'imacron',
240=>'dcroat',241=>'ncommaaccent',242=>'omacron',243=>'kcommaaccent',244=>'ocircumflex',245=>'otilde',246=>'odieresis',247=>'divide',
248=>'oslash',249=>'uogonek',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'utilde',254=>'umacron',255=>'dotaccent'),

// encoding map for: cp1255
'cp1255' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'quotesinglbase',131=>'florin',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'circumflex',137=>'perthousand',138=>'.notdef',139=>'guilsinglleft',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'tilde',153=>'trademark',154=>'.notdef',155=>'guilsinglright',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'exclamdown',162=>'cent',163=>'sterling',164=>'afii57636',165=>'yen',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'multiply',171=>'guillemotleft',172=>'logicalnot',173=>'sfthyphen',174=>'registered',175=>'macron',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'acute',181=>'mu',182=>'paragraph',183=>'middot',
184=>'cedilla',185=>'onesuperior',186=>'divide',187=>'guillemotright',188=>'onequarter',189=>'onehalf',190=>'threequarters',191=>'questiondown',
192=>'afii57799',193=>'afii57801',194=>'afii57800',195=>'afii57802',196=>'afii57793',197=>'afii57794',198=>'afii57795',199=>'afii57798',
200=>'afii57797',201=>'afii57806',202=>'.notdef',203=>'afii57796',204=>'afii57807',205=>'afii57839',206=>'afii57645',207=>'afii57841',
208=>'afii57842',209=>'afii57804',210=>'afii57803',211=>'afii57658',212=>'afii57716',213=>'afii57717',214=>'afii57718',215=>'gereshhebrew',
216=>'gershayimhebrew',217=>'.notdef',218=>'.notdef',219=>'.notdef',220=>'.notdef',221=>'.notdef',222=>'.notdef',223=>'.notdef',
224=>'afii57664',225=>'afii57665',226=>'afii57666',227=>'afii57667',228=>'afii57668',229=>'afii57669',230=>'afii57670',231=>'afii57671',
232=>'afii57672',233=>'afii57673',234=>'afii57674',235=>'afii57675',236=>'afii57676',237=>'afii57677',238=>'afii57678',239=>'afii57679',
240=>'afii57680',241=>'afii57681',242=>'afii57682',243=>'afii57683',244=>'afii57684',245=>'afii57685',246=>'afii57686',247=>'afii57687',
248=>'afii57688',249=>'afii57689',250=>'afii57690',251=>'.notdef',252=>'.notdef',253=>'afii299',254=>'afii300',255=>'.notdef'),

// encoding map for: iso-8859-11
'iso-8859-11' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'kokaithai',162=>'khokhaithai',163=>'khokhuatthai',164=>'khokhwaithai',165=>'khokhonthai',166=>'khorakhangthai',167=>'ngonguthai',
168=>'chochanthai',169=>'chochingthai',170=>'chochangthai',171=>'sosothai',172=>'chochoethai',173=>'yoyingthai',174=>'dochadathai',175=>'topatakthai',
176=>'thothanthai',177=>'thonangmonthothai',178=>'thophuthaothai',179=>'nonenthai',180=>'dodekthai',181=>'totaothai',182=>'thothungthai',183=>'thothahanthai',
184=>'thothongthai',185=>'nonuthai',186=>'bobaimaithai',187=>'poplathai',188=>'phophungthai',189=>'fofathai',190=>'phophanthai',191=>'fofanthai',
192=>'phosamphaothai',193=>'momathai',194=>'yoyakthai',195=>'roruathai',196=>'ruthai',197=>'lolingthai',198=>'luthai',199=>'wowaenthai',
200=>'sosalathai',201=>'sorusithai',202=>'sosuathai',203=>'hohipthai',204=>'lochulathai',205=>'oangthai',206=>'honokhukthai',207=>'paiyannoithai',
208=>'saraathai',209=>'maihanakatthai',210=>'saraaathai',211=>'saraamthai',212=>'saraithai',213=>'saraiithai',214=>'sarauethai',215=>'saraueethai',
216=>'sarauthai',217=>'sarauuthai',218=>'phinthuthai',219=>'.notdef',220=>'.notdef',221=>'.notdef',222=>'.notdef',223=>'bahtthai',
224=>'saraethai',225=>'saraaethai',226=>'saraothai',227=>'saraaimaimuanthai',228=>'saraaimaimalaithai',229=>'lakkhangyaothai',230=>'maiyamokthai',231=>'maitaikhuthai',
232=>'maiekthai',233=>'maithothai',234=>'maitrithai',235=>'maichattawathai',236=>'thanthakhatthai',237=>'nikhahitthai',238=>'yamakkanthai',239=>'fongmanthai',
240=>'zerothai',241=>'onethai',242=>'twothai',243=>'threethai',244=>'fourthai',245=>'fivethai',246=>'sixthai',247=>'seventhai',
248=>'eightthai',249=>'ninethai',250=>'angkhankhuthai',251=>'khomutthai',252=>'.notdef',253=>'.notdef',254=>'.notdef',255=>'.notdef'),

// encoding map for: cp1257
'cp1257' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'quotesinglbase',131=>'.notdef',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'.notdef',137=>'perthousand',138=>'.notdef',139=>'guilsinglleft',140=>'.notdef',141=>'dieresis',142=>'caron',143=>'cedilla',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'.notdef',153=>'trademark',154=>'.notdef',155=>'guilsinglright',156=>'.notdef',157=>'macron',158=>'ogonek',159=>'.notdef',
160=>'space',161=>'.notdef',162=>'cent',163=>'sterling',164=>'currency',165=>'.notdef',166=>'brokenbar',167=>'section',
168=>'Oslash',169=>'copyright',170=>'Rcommaaccent',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'AE',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'acute',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'oslash',185=>'onesuperior',186=>'rcommaaccent',187=>'guillemotright',188=>'onequarter',189=>'onehalf',190=>'threequarters',191=>'ae',
192=>'Aogonek',193=>'Iogonek',194=>'Amacron',195=>'Cacute',196=>'Adieresis',197=>'Aring',198=>'Eogonek',199=>'Emacron',
200=>'Ccaron',201=>'Eacute',202=>'Zacute',203=>'Edotaccent',204=>'Gcommaaccent',205=>'Kcommaaccent',206=>'Imacron',207=>'Lcommaaccent',
208=>'Scaron',209=>'Nacute',210=>'Ncommaaccent',211=>'Oacute',212=>'Omacron',213=>'Otilde',214=>'Odieresis',215=>'multiply',
216=>'Uogonek',217=>'Lslash',218=>'Sacute',219=>'Umacron',220=>'Udieresis',221=>'Zdotaccent',222=>'Zcaron',223=>'germandbls',
224=>'aogonek',225=>'iogonek',226=>'amacron',227=>'cacute',228=>'adieresis',229=>'aring',230=>'eogonek',231=>'emacron',
232=>'ccaron',233=>'eacute',234=>'zacute',235=>'edotaccent',236=>'gcommaaccent',237=>'kcommaaccent',238=>'imacron',239=>'lcommaaccent',
240=>'scaron',241=>'nacute',242=>'ncommaaccent',243=>'oacute',244=>'omacron',245=>'otilde',246=>'odieresis',247=>'divide',
248=>'uogonek',249=>'lslash',250=>'sacute',251=>'umacron',252=>'udieresis',253=>'zdotaccent',254=>'zcaron',255=>'dotaccent'),

// encoding map for: cp1258
'cp1258' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'quotesinglbase',131=>'florin',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'circumflex',137=>'perthousand',138=>'.notdef',139=>'guilsinglleft',140=>'OE',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'tilde',153=>'trademark',154=>'.notdef',155=>'guilsinglright',156=>'oe',157=>'.notdef',158=>'.notdef',159=>'Ydieresis',
160=>'space',161=>'exclamdown',162=>'cent',163=>'sterling',164=>'currency',165=>'yen',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'ordfeminine',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'macron',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'acute',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'cedilla',185=>'onesuperior',186=>'ordmasculine',187=>'guillemotright',188=>'onequarter',189=>'onehalf',190=>'threequarters',191=>'questiondown',
192=>'Agrave',193=>'Aacute',194=>'Acircumflex',195=>'Abreve',196=>'Adieresis',197=>'Aring',198=>'AE',199=>'Ccedilla',
200=>'Egrave',201=>'Eacute',202=>'Ecircumflex',203=>'Edieresis',204=>'gravecomb',205=>'Iacute',206=>'Icircumflex',207=>'Idieresis',
208=>'Dcroat',209=>'Ntilde',210=>'hookabovecomb',211=>'Oacute',212=>'Ocircumflex',213=>'Ohorn',214=>'Odieresis',215=>'multiply',
216=>'Oslash',217=>'Ugrave',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Uhorn',222=>'tildecomb',223=>'germandbls',
224=>'agrave',225=>'aacute',226=>'acircumflex',227=>'abreve',228=>'adieresis',229=>'aring',230=>'ae',231=>'ccedilla',
232=>'egrave',233=>'eacute',234=>'ecircumflex',235=>'edieresis',236=>'acutecomb',237=>'iacute',238=>'icircumflex',239=>'idieresis',
240=>'dcroat',241=>'ntilde',242=>'dotbelowcomb',243=>'oacute',244=>'ocircumflex',245=>'ohorn',246=>'odieresis',247=>'divide',
248=>'oslash',249=>'ugrave',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'uhorn',254=>'dong',255=>'ydieresis'),

// encoding map for: cp1253
'cp1253' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'quotesinglbase',131=>'florin',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'.notdef',137=>'perthousand',138=>'.notdef',139=>'guilsinglleft',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'.notdef',153=>'trademark',154=>'.notdef',155=>'guilsinglright',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'dieresistonos',162=>'Alphatonos',163=>'sterling',164=>'currency',165=>'yen',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'.notdef',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'afii00208',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'tonos',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'Epsilontonos',185=>'Etatonos',186=>'Iotatonos',187=>'guillemotright',188=>'Omicrontonos',189=>'onehalf',190=>'Upsilontonos',191=>'Omegatonos',
192=>'iotadieresistonos',193=>'Alpha',194=>'Beta',195=>'Gamma',196=>'Delta',197=>'Epsilon',198=>'Zeta',199=>'Eta',
200=>'Theta',201=>'Iota',202=>'Kappa',203=>'Lambda',204=>'Mu',205=>'Nu',206=>'Xi',207=>'Omicron',
208=>'Pi',209=>'Rho',210=>'.notdef',211=>'Sigma',212=>'Tau',213=>'Upsilon',214=>'Phi',215=>'Chi',
216=>'Psi',217=>'Omega',218=>'Iotadieresis',219=>'Upsilondieresis',220=>'alphatonos',221=>'epsilontonos',222=>'etatonos',223=>'iotatonos',
224=>'upsilondieresistonos',225=>'alpha',226=>'beta',227=>'gamma',228=>'delta',229=>'epsilon',230=>'zeta',231=>'eta',
232=>'theta',233=>'iota',234=>'kappa',235=>'lambda',236=>'mu',237=>'nu',238=>'xi',239=>'omicron',
240=>'pi',241=>'rho',242=>'sigma1',243=>'sigma',244=>'tau',245=>'upsilon',246=>'phi',247=>'chi',
248=>'psi',249=>'omega',250=>'iotadieresis',251=>'upsilondieresis',252=>'omicrontonos',253=>'upsilontonos',254=>'omegatonos',255=>'.notdef'),

// encoding map for: cp874
'cp874' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'ellipsis',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'kokaithai',162=>'khokhaithai',163=>'khokhuatthai',164=>'khokhwaithai',165=>'khokhonthai',166=>'khorakhangthai',167=>'ngonguthai',
168=>'chochanthai',169=>'chochingthai',170=>'chochangthai',171=>'sosothai',172=>'chochoethai',173=>'yoyingthai',174=>'dochadathai',175=>'topatakthai',
176=>'thothanthai',177=>'thonangmonthothai',178=>'thophuthaothai',179=>'nonenthai',180=>'dodekthai',181=>'totaothai',182=>'thothungthai',183=>'thothahanthai',
184=>'thothongthai',185=>'nonuthai',186=>'bobaimaithai',187=>'poplathai',188=>'phophungthai',189=>'fofathai',190=>'phophanthai',191=>'fofanthai',
192=>'phosamphaothai',193=>'momathai',194=>'yoyakthai',195=>'roruathai',196=>'ruthai',197=>'lolingthai',198=>'luthai',199=>'wowaenthai',
200=>'sosalathai',201=>'sorusithai',202=>'sosuathai',203=>'hohipthai',204=>'lochulathai',205=>'oangthai',206=>'honokhukthai',207=>'paiyannoithai',
208=>'saraathai',209=>'maihanakatthai',210=>'saraaathai',211=>'saraamthai',212=>'saraithai',213=>'saraiithai',214=>'sarauethai',215=>'saraueethai',
216=>'sarauthai',217=>'sarauuthai',218=>'phinthuthai',219=>'.notdef',220=>'.notdef',221=>'.notdef',222=>'.notdef',223=>'bahtthai',
224=>'saraethai',225=>'saraaethai',226=>'saraothai',227=>'saraaimaimuanthai',228=>'saraaimaimalaithai',229=>'lakkhangyaothai',230=>'maiyamokthai',231=>'maitaikhuthai',
232=>'maiekthai',233=>'maithothai',234=>'maitrithai',235=>'maichattawathai',236=>'thanthakhatthai',237=>'nikhahitthai',238=>'yamakkanthai',239=>'fongmanthai',
240=>'zerothai',241=>'onethai',242=>'twothai',243=>'threethai',244=>'fourthai',245=>'fivethai',246=>'sixthai',247=>'seventhai',
248=>'eightthai',249=>'ninethai',250=>'angkhankhuthai',251=>'khomutthai',252=>'.notdef',253=>'.notdef',254=>'.notdef',255=>'.notdef'),

// encoding map for: iso-8859-2
'iso-8859-2' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'Aogonek',162=>'breve',163=>'Lslash',164=>'currency',165=>'Lcaron',166=>'Sacute',167=>'section',
168=>'dieresis',169=>'Scaron',170=>'Scedilla',171=>'Tcaron',172=>'Zacute',173=>'hyphen',174=>'Zcaron',175=>'Zdotaccent',
176=>'degree',177=>'aogonek',178=>'ogonek',179=>'lslash',180=>'acute',181=>'lcaron',182=>'sacute',183=>'caron',
184=>'cedilla',185=>'scaron',186=>'scedilla',187=>'tcaron',188=>'zacute',189=>'hungarumlaut',190=>'zcaron',191=>'zdotaccent',
192=>'Racute',193=>'Aacute',194=>'Acircumflex',195=>'Abreve',196=>'Adieresis',197=>'Lacute',198=>'Cacute',199=>'Ccedilla',
200=>'Ccaron',201=>'Eacute',202=>'Eogonek',203=>'Edieresis',204=>'Ecaron',205=>'Iacute',206=>'Icircumflex',207=>'Dcaron',
208=>'Dcroat',209=>'Nacute',210=>'Ncaron',211=>'Oacute',212=>'Ocircumflex',213=>'Ohungarumlaut',214=>'Odieresis',215=>'multiply',
216=>'Rcaron',217=>'Uring',218=>'Uacute',219=>'Uhungarumlaut',220=>'Udieresis',221=>'Yacute',222=>'Tcommaaccent',223=>'germandbls',
224=>'racute',225=>'aacute',226=>'acircumflex',227=>'abreve',228=>'adieresis',229=>'lacute',230=>'cacute',231=>'ccedilla',
232=>'ccaron',233=>'eacute',234=>'eogonek',235=>'edieresis',236=>'ecaron',237=>'iacute',238=>'icircumflex',239=>'dcaron',
240=>'dcroat',241=>'nacute',242=>'ncaron',243=>'oacute',244=>'ocircumflex',245=>'ohungarumlaut',246=>'odieresis',247=>'divide',
248=>'rcaron',249=>'uring',250=>'uacute',251=>'uhungarumlaut',252=>'udieresis',253=>'yacute',254=>'tcommaaccent',255=>'dotaccent'),

// encoding map for: cp1250
'cp1250' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'quotesinglbase',131=>'.notdef',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'.notdef',137=>'perthousand',138=>'Scaron',139=>'guilsinglleft',140=>'Sacute',141=>'Tcaron',142=>'Zcaron',143=>'Zacute',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'.notdef',153=>'trademark',154=>'scaron',155=>'guilsinglright',156=>'sacute',157=>'tcaron',158=>'zcaron',159=>'zacute',
160=>'space',161=>'caron',162=>'breve',163=>'Lslash',164=>'currency',165=>'Aogonek',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'Scedilla',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'Zdotaccent',
176=>'degree',177=>'plusminus',178=>'ogonek',179=>'lslash',180=>'acute',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'cedilla',185=>'aogonek',186=>'scedilla',187=>'guillemotright',188=>'Lcaron',189=>'hungarumlaut',190=>'lcaron',191=>'zdotaccent',
192=>'Racute',193=>'Aacute',194=>'Acircumflex',195=>'Abreve',196=>'Adieresis',197=>'Lacute',198=>'Cacute',199=>'Ccedilla',
200=>'Ccaron',201=>'Eacute',202=>'Eogonek',203=>'Edieresis',204=>'Ecaron',205=>'Iacute',206=>'Icircumflex',207=>'Dcaron',
208=>'Dcroat',209=>'Nacute',210=>'Ncaron',211=>'Oacute',212=>'Ocircumflex',213=>'Ohungarumlaut',214=>'Odieresis',215=>'multiply',
216=>'Rcaron',217=>'Uring',218=>'Uacute',219=>'Uhungarumlaut',220=>'Udieresis',221=>'Yacute',222=>'Tcommaaccent',223=>'germandbls',
224=>'racute',225=>'aacute',226=>'acircumflex',227=>'abreve',228=>'adieresis',229=>'lacute',230=>'cacute',231=>'ccedilla',
232=>'ccaron',233=>'eacute',234=>'eogonek',235=>'edieresis',236=>'ecaron',237=>'iacute',238=>'icircumflex',239=>'dcaron',
240=>'dcroat',241=>'nacute',242=>'ncaron',243=>'oacute',244=>'ocircumflex',245=>'ohungarumlaut',246=>'odieresis',247=>'divide',
248=>'rcaron',249=>'uring',250=>'uacute',251=>'uhungarumlaut',252=>'udieresis',253=>'yacute',254=>'tcommaaccent',255=>'dotaccent'),

// encoding map for: iso-8859-7
'iso-8859-7' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'quoteleft',162=>'quoteright',163=>'sterling',164=>'.notdef',165=>'.notdef',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'.notdef',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'.notdef',175=>'afii00208',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'tonos',181=>'dieresistonos',182=>'Alphatonos',183=>'periodcentered',
184=>'Epsilontonos',185=>'Etatonos',186=>'Iotatonos',187=>'guillemotright',188=>'Omicrontonos',189=>'onehalf',190=>'Upsilontonos',191=>'Omegatonos',
192=>'iotadieresistonos',193=>'Alpha',194=>'Beta',195=>'Gamma',196=>'Delta',197=>'Epsilon',198=>'Zeta',199=>'Eta',
200=>'Theta',201=>'Iota',202=>'Kappa',203=>'Lambda',204=>'Mu',205=>'Nu',206=>'Xi',207=>'Omicron',
208=>'Pi',209=>'Rho',210=>'.notdef',211=>'Sigma',212=>'Tau',213=>'Upsilon',214=>'Phi',215=>'Chi',
216=>'Psi',217=>'Omega',218=>'Iotadieresis',219=>'Upsilondieresis',220=>'alphatonos',221=>'epsilontonos',222=>'etatonos',223=>'iotatonos',
224=>'upsilondieresistonos',225=>'alpha',226=>'beta',227=>'gamma',228=>'delta',229=>'epsilon',230=>'zeta',231=>'eta',
232=>'theta',233=>'iota',234=>'kappa',235=>'lambda',236=>'mu',237=>'nu',238=>'xi',239=>'omicron',
240=>'pi',241=>'rho',242=>'sigma1',243=>'sigma',244=>'tau',245=>'upsilon',246=>'phi',247=>'chi',
248=>'psi',249=>'omega',250=>'iotadieresis',251=>'upsilondieresis',252=>'omicrontonos',253=>'upsilontonos',254=>'omegatonos',255=>'.notdef'),

// encoding map for: iso-8859-9
'iso-8859-9' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'exclamdown',162=>'cent',163=>'sterling',164=>'currency',165=>'yen',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'ordfeminine',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'macron',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'acute',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'cedilla',185=>'onesuperior',186=>'ordmasculine',187=>'guillemotright',188=>'onequarter',189=>'onehalf',190=>'threequarters',191=>'questiondown',
192=>'Agrave',193=>'Aacute',194=>'Acircumflex',195=>'Atilde',196=>'Adieresis',197=>'Aring',198=>'AE',199=>'Ccedilla',
200=>'Egrave',201=>'Eacute',202=>'Ecircumflex',203=>'Edieresis',204=>'Igrave',205=>'Iacute',206=>'Icircumflex',207=>'Idieresis',
208=>'Gbreve',209=>'Ntilde',210=>'Ograve',211=>'Oacute',212=>'Ocircumflex',213=>'Otilde',214=>'Odieresis',215=>'multiply',
216=>'Oslash',217=>'Ugrave',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Idotaccent',222=>'Scedilla',223=>'germandbls',
224=>'agrave',225=>'aacute',226=>'acircumflex',227=>'atilde',228=>'adieresis',229=>'aring',230=>'ae',231=>'ccedilla',
232=>'egrave',233=>'eacute',234=>'ecircumflex',235=>'edieresis',236=>'igrave',237=>'iacute',238=>'icircumflex',239=>'idieresis',
240=>'gbreve',241=>'ntilde',242=>'ograve',243=>'oacute',244=>'ocircumflex',245=>'otilde',246=>'odieresis',247=>'divide',
248=>'oslash',249=>'ugrave',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'dotlessi',254=>'scedilla',255=>'ydieresis'),

// encoding map for: cp1252
'cp1252' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'quotesinglbase',131=>'florin',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'circumflex',137=>'perthousand',138=>'Scaron',139=>'guilsinglleft',140=>'OE',141=>'.notdef',142=>'Zcaron',143=>'.notdef',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'tilde',153=>'trademark',154=>'scaron',155=>'guilsinglright',156=>'oe',157=>'.notdef',158=>'zcaron',159=>'Ydieresis',
160=>'space',161=>'exclamdown',162=>'cent',163=>'sterling',164=>'currency',165=>'yen',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'ordfeminine',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'macron',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'acute',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'cedilla',185=>'onesuperior',186=>'ordmasculine',187=>'guillemotright',188=>'onequarter',189=>'onehalf',190=>'threequarters',191=>'questiondown',
192=>'Agrave',193=>'Aacute',194=>'Acircumflex',195=>'Atilde',196=>'Adieresis',197=>'Aring',198=>'AE',199=>'Ccedilla',
200=>'Egrave',201=>'Eacute',202=>'Ecircumflex',203=>'Edieresis',204=>'Igrave',205=>'Iacute',206=>'Icircumflex',207=>'Idieresis',
208=>'Eth',209=>'Ntilde',210=>'Ograve',211=>'Oacute',212=>'Ocircumflex',213=>'Otilde',214=>'Odieresis',215=>'multiply',
216=>'Oslash',217=>'Ugrave',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Yacute',222=>'Thorn',223=>'germandbls',
224=>'agrave',225=>'aacute',226=>'acircumflex',227=>'atilde',228=>'adieresis',229=>'aring',230=>'ae',231=>'ccedilla',
232=>'egrave',233=>'eacute',234=>'ecircumflex',235=>'edieresis',236=>'igrave',237=>'iacute',238=>'icircumflex',239=>'idieresis',
240=>'eth',241=>'ntilde',242=>'ograve',243=>'oacute',244=>'ocircumflex',245=>'otilde',246=>'odieresis',247=>'divide',
248=>'oslash',249=>'ugrave',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'yacute',254=>'thorn',255=>'ydieresis'),

// encoding map for: cp1254
'cp1254' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'quotesinglbase',131=>'florin',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'circumflex',137=>'perthousand',138=>'Scaron',139=>'guilsinglleft',140=>'OE',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'tilde',153=>'trademark',154=>'scaron',155=>'guilsinglright',156=>'oe',157=>'.notdef',158=>'.notdef',159=>'Ydieresis',
160=>'space',161=>'exclamdown',162=>'cent',163=>'sterling',164=>'currency',165=>'yen',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'ordfeminine',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'macron',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'acute',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'cedilla',185=>'onesuperior',186=>'ordmasculine',187=>'guillemotright',188=>'onequarter',189=>'onehalf',190=>'threequarters',191=>'questiondown',
192=>'Agrave',193=>'Aacute',194=>'Acircumflex',195=>'Atilde',196=>'Adieresis',197=>'Aring',198=>'AE',199=>'Ccedilla',
200=>'Egrave',201=>'Eacute',202=>'Ecircumflex',203=>'Edieresis',204=>'Igrave',205=>'Iacute',206=>'Icircumflex',207=>'Idieresis',
208=>'Gbreve',209=>'Ntilde',210=>'Ograve',211=>'Oacute',212=>'Ocircumflex',213=>'Otilde',214=>'Odieresis',215=>'multiply',
216=>'Oslash',217=>'Ugrave',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Idotaccent',222=>'Scedilla',223=>'germandbls',
224=>'agrave',225=>'aacute',226=>'acircumflex',227=>'atilde',228=>'adieresis',229=>'aring',230=>'ae',231=>'ccedilla',
232=>'egrave',233=>'eacute',234=>'ecircumflex',235=>'edieresis',236=>'igrave',237=>'iacute',238=>'icircumflex',239=>'idieresis',
240=>'gbreve',241=>'ntilde',242=>'ograve',243=>'oacute',244=>'ocircumflex',245=>'otilde',246=>'odieresis',247=>'divide',
248=>'oslash',249=>'ugrave',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'dotlessi',254=>'scedilla',255=>'ydieresis'),

// encoding map for: cp1254
'cp1254' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'Euro',129=>'.notdef',130=>'quotesinglbase',131=>'florin',132=>'quotedblbase',133=>'ellipsis',134=>'dagger',135=>'daggerdbl',
136=>'circumflex',137=>'perthousand',138=>'Scaron',139=>'guilsinglleft',140=>'OE',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'quoteleft',146=>'quoteright',147=>'quotedblleft',148=>'quotedblright',149=>'bullet',150=>'endash',151=>'emdash',
152=>'tilde',153=>'trademark',154=>'scaron',155=>'guilsinglright',156=>'oe',157=>'.notdef',158=>'.notdef',159=>'Ydieresis',
160=>'space',161=>'exclamdown',162=>'cent',163=>'sterling',164=>'currency',165=>'yen',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'ordfeminine',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'macron',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'acute',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'cedilla',185=>'onesuperior',186=>'ordmasculine',187=>'guillemotright',188=>'onequarter',189=>'onehalf',190=>'threequarters',191=>'questiondown',
192=>'Agrave',193=>'Aacute',194=>'Acircumflex',195=>'Atilde',196=>'Adieresis',197=>'Aring',198=>'AE',199=>'Ccedilla',
200=>'Egrave',201=>'Eacute',202=>'Ecircumflex',203=>'Edieresis',204=>'Igrave',205=>'Iacute',206=>'Icircumflex',207=>'Idieresis',
208=>'Gbreve',209=>'Ntilde',210=>'Ograve',211=>'Oacute',212=>'Ocircumflex',213=>'Otilde',214=>'Odieresis',215=>'multiply',
216=>'Oslash',217=>'Ugrave',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Idotaccent',222=>'Scedilla',223=>'germandbls',
224=>'agrave',225=>'aacute',226=>'acircumflex',227=>'atilde',228=>'adieresis',229=>'aring',230=>'ae',231=>'ccedilla',
232=>'egrave',233=>'eacute',234=>'ecircumflex',235=>'edieresis',236=>'igrave',237=>'iacute',238=>'icircumflex',239=>'idieresis',
240=>'gbreve',241=>'ntilde',242=>'ograve',243=>'oacute',244=>'ocircumflex',245=>'otilde',246=>'odieresis',247=>'divide',
248=>'oslash',249=>'ugrave',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'dotlessi',254=>'scedilla',255=>'ydieresis'),

// encoding map for: iso-8859-1
'iso-8859-1' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'exclamdown',162=>'cent',163=>'sterling',164=>'currency',165=>'yen',166=>'brokenbar',167=>'section',
168=>'dieresis',169=>'copyright',170=>'ordfeminine',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'macron',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'acute',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'cedilla',185=>'onesuperior',186=>'ordmasculine',187=>'guillemotright',188=>'onequarter',189=>'onehalf',190=>'threequarters',191=>'questiondown',
192=>'Agrave',193=>'Aacute',194=>'Acircumflex',195=>'Atilde',196=>'Adieresis',197=>'Aring',198=>'AE',199=>'Ccedilla',
200=>'Egrave',201=>'Eacute',202=>'Ecircumflex',203=>'Edieresis',204=>'Igrave',205=>'Iacute',206=>'Icircumflex',207=>'Idieresis',
208=>'Eth',209=>'Ntilde',210=>'Ograve',211=>'Oacute',212=>'Ocircumflex',213=>'Otilde',214=>'Odieresis',215=>'multiply',
216=>'Oslash',217=>'Ugrave',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Yacute',222=>'Thorn',223=>'germandbls',
224=>'agrave',225=>'aacute',226=>'acircumflex',227=>'atilde',228=>'adieresis',229=>'aring',230=>'ae',231=>'ccedilla',
232=>'egrave',233=>'eacute',234=>'ecircumflex',235=>'edieresis',236=>'igrave',237=>'iacute',238=>'icircumflex',239=>'idieresis',
240=>'eth',241=>'ntilde',242=>'ograve',243=>'oacute',244=>'ocircumflex',245=>'otilde',246=>'odieresis',247=>'divide',
248=>'oslash',249=>'ugrave',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'yacute',254=>'thorn',255=>'ydieresis'),

// encoding map for: iso-8859-15
'iso-8859-15' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'exclamdown',162=>'cent',163=>'sterling',164=>'Euro',165=>'yen',166=>'Scaron',167=>'section',
168=>'scaron',169=>'copyright',170=>'ordfeminine',171=>'guillemotleft',172=>'logicalnot',173=>'hyphen',174=>'registered',175=>'macron',
176=>'degree',177=>'plusminus',178=>'twosuperior',179=>'threesuperior',180=>'Zcaron',181=>'mu',182=>'paragraph',183=>'periodcentered',
184=>'zcaron',185=>'onesuperior',186=>'ordmasculine',187=>'guillemotright',188=>'OE',189=>'oe',190=>'Ydieresis',191=>'questiondown',
192=>'Agrave',193=>'Aacute',194=>'Acircumflex',195=>'Atilde',196=>'Adieresis',197=>'Aring',198=>'AE',199=>'Ccedilla',
200=>'Egrave',201=>'Eacute',202=>'Ecircumflex',203=>'Edieresis',204=>'Igrave',205=>'Iacute',206=>'Icircumflex',207=>'Idieresis',
208=>'Eth',209=>'Ntilde',210=>'Ograve',211=>'Oacute',212=>'Ocircumflex',213=>'Otilde',214=>'Odieresis',215=>'multiply',
216=>'Oslash',217=>'Ugrave',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Yacute',222=>'Thorn',223=>'germandbls',
224=>'agrave',225=>'aacute',226=>'acircumflex',227=>'atilde',228=>'adieresis',229=>'aring',230=>'ae',231=>'ccedilla',
232=>'egrave',233=>'eacute',234=>'ecircumflex',235=>'edieresis',236=>'igrave',237=>'iacute',238=>'icircumflex',239=>'idieresis',
240=>'eth',241=>'ntilde',242=>'ograve',243=>'oacute',244=>'ocircumflex',245=>'otilde',246=>'odieresis',247=>'divide',
248=>'oslash',249=>'ugrave',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'yacute',254=>'thorn',255=>'ydieresis'),

// encoding map for: iso-8859-5
'iso-8859-5' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'afii10023',162=>'afii10051',163=>'afii10052',164=>'afii10053',165=>'afii10054',166=>'afii10055',167=>'afii10056',
168=>'afii10057',169=>'afii10058',170=>'afii10059',171=>'afii10060',172=>'afii10061',173=>'hyphen',174=>'afii10062',175=>'afii10145',
176=>'afii10017',177=>'afii10018',178=>'afii10019',179=>'afii10020',180=>'afii10021',181=>'afii10022',182=>'afii10024',183=>'afii10025',
184=>'afii10026',185=>'afii10027',186=>'afii10028',187=>'afii10029',188=>'afii10030',189=>'afii10031',190=>'afii10032',191=>'afii10033',
192=>'afii10034',193=>'afii10035',194=>'afii10036',195=>'afii10037',196=>'afii10038',197=>'afii10039',198=>'afii10040',199=>'afii10041',
200=>'afii10042',201=>'afii10043',202=>'afii10044',203=>'afii10045',204=>'afii10046',205=>'afii10047',206=>'afii10048',207=>'afii10049',
208=>'afii10065',209=>'afii10066',210=>'afii10067',211=>'afii10068',212=>'afii10069',213=>'afii10070',214=>'afii10072',215=>'afii10073',
216=>'afii10074',217=>'afii10075',218=>'afii10076',219=>'afii10077',220=>'afii10078',221=>'afii10079',222=>'afii10080',223=>'afii10081',
224=>'afii10082',225=>'afii10083',226=>'afii10084',227=>'afii10085',228=>'afii10086',229=>'afii10087',230=>'afii10088',231=>'afii10089',
232=>'afii10090',233=>'afii10091',234=>'afii10092',235=>'afii10093',236=>'afii10094',237=>'afii10095',238=>'afii10096',239=>'afii10097',
240=>'afii61352',241=>'afii10071',242=>'afii10099',243=>'afii10100',244=>'afii10101',245=>'afii10102',246=>'afii10103',247=>'afii10104',
248=>'afii10105',249=>'afii10106',250=>'afii10107',251=>'afii10108',252=>'afii10109',253=>'section',254=>'afii10110',255=>'afii10193'),

// encoding map for: iso-8859-5
'iso-8859-5' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'afii10023',162=>'afii10051',163=>'afii10052',164=>'afii10053',165=>'afii10054',166=>'afii10055',167=>'afii10056',
168=>'afii10057',169=>'afii10058',170=>'afii10059',171=>'afii10060',172=>'afii10061',173=>'hyphen',174=>'afii10062',175=>'afii10145',
176=>'afii10017',177=>'afii10018',178=>'afii10019',179=>'afii10020',180=>'afii10021',181=>'afii10022',182=>'afii10024',183=>'afii10025',
184=>'afii10026',185=>'afii10027',186=>'afii10028',187=>'afii10029',188=>'afii10030',189=>'afii10031',190=>'afii10032',191=>'afii10033',
192=>'afii10034',193=>'afii10035',194=>'afii10036',195=>'afii10037',196=>'afii10038',197=>'afii10039',198=>'afii10040',199=>'afii10041',
200=>'afii10042',201=>'afii10043',202=>'afii10044',203=>'afii10045',204=>'afii10046',205=>'afii10047',206=>'afii10048',207=>'afii10049',
208=>'afii10065',209=>'afii10066',210=>'afii10067',211=>'afii10068',212=>'afii10069',213=>'afii10070',214=>'afii10072',215=>'afii10073',
216=>'afii10074',217=>'afii10075',218=>'afii10076',219=>'afii10077',220=>'afii10078',221=>'afii10079',222=>'afii10080',223=>'afii10081',
224=>'afii10082',225=>'afii10083',226=>'afii10084',227=>'afii10085',228=>'afii10086',229=>'afii10087',230=>'afii10088',231=>'afii10089',
232=>'afii10090',233=>'afii10091',234=>'afii10092',235=>'afii10093',236=>'afii10094',237=>'afii10095',238=>'afii10096',239=>'afii10097',
240=>'afii61352',241=>'afii10071',242=>'afii10099',243=>'afii10100',244=>'afii10101',245=>'afii10102',246=>'afii10103',247=>'afii10104',
248=>'afii10105',249=>'afii10106',250=>'afii10107',251=>'afii10108',252=>'afii10109',253=>'section',254=>'afii10110',255=>'afii10193'),

// encoding map for: koi8-r
'koi8-r' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'SF100000',129=>'SF110000',130=>'SF010000',131=>'SF030000',132=>'SF020000',133=>'SF040000',134=>'SF080000',135=>'SF090000',
136=>'SF060000',137=>'SF070000',138=>'SF050000',139=>'upblock',140=>'dnblock',141=>'block',142=>'lfblock',143=>'rtblock',
144=>'ltshade',145=>'shade',146=>'dkshade',147=>'integraltp',148=>'filledbox',149=>'periodcentered',150=>'radical',151=>'approxequal',
152=>'lessequal',153=>'greaterequal',154=>'space',155=>'integralbt',156=>'degree',157=>'twosuperior',158=>'periodcentered',159=>'divide',
160=>'SF430000',161=>'SF240000',162=>'SF510000',163=>'afii10071',164=>'SF520000',165=>'SF390000',166=>'SF220000',167=>'SF210000',
168=>'SF250000',169=>'SF500000',170=>'SF490000',171=>'SF380000',172=>'SF280000',173=>'SF270000',174=>'SF260000',175=>'SF360000',
176=>'SF370000',177=>'SF420000',178=>'SF190000',179=>'afii10023',180=>'SF200000',181=>'SF230000',182=>'SF470000',183=>'SF480000',
184=>'SF410000',185=>'SF450000',186=>'SF460000',187=>'SF400000',188=>'SF540000',189=>'SF530000',190=>'SF440000',191=>'copyright',
192=>'afii10096',193=>'afii10065',194=>'afii10066',195=>'afii10088',196=>'afii10069',197=>'afii10070',198=>'afii10086',199=>'afii10068',
200=>'afii10087',201=>'afii10074',202=>'afii10075',203=>'afii10076',204=>'afii10077',205=>'afii10078',206=>'afii10079',207=>'afii10080',
208=>'afii10081',209=>'afii10097',210=>'afii10082',211=>'afii10083',212=>'afii10084',213=>'afii10085',214=>'afii10072',215=>'afii10067',
216=>'afii10094',217=>'afii10093',218=>'afii10073',219=>'afii10090',220=>'afii10095',221=>'afii10091',222=>'afii10089',223=>'afii10092',
224=>'afii10048',225=>'afii10017',226=>'afii10018',227=>'afii10040',228=>'afii10021',229=>'afii10022',230=>'afii10038',231=>'afii10020',
232=>'afii10039',233=>'afii10026',234=>'afii10027',235=>'afii10028',236=>'afii10029',237=>'afii10030',238=>'afii10031',239=>'afii10032',
240=>'afii10033',241=>'afii10049',242=>'afii10034',243=>'afii10035',244=>'afii10036',245=>'afii10037',246=>'afii10024',247=>'afii10019',
248=>'afii10046',249=>'afii10045',250=>'afii10025',251=>'afii10042',252=>'afii10047',253=>'afii10043',254=>'afii10041',255=>'afii10044'),

// encoding map for: koi8-r
'koi8-r' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'SF100000',129=>'SF110000',130=>'SF010000',131=>'SF030000',132=>'SF020000',133=>'SF040000',134=>'SF080000',135=>'SF090000',
136=>'SF060000',137=>'SF070000',138=>'SF050000',139=>'upblock',140=>'dnblock',141=>'block',142=>'lfblock',143=>'rtblock',
144=>'ltshade',145=>'shade',146=>'dkshade',147=>'integraltp',148=>'filledbox',149=>'periodcentered',150=>'radical',151=>'approxequal',
152=>'lessequal',153=>'greaterequal',154=>'space',155=>'integralbt',156=>'degree',157=>'twosuperior',158=>'periodcentered',159=>'divide',
160=>'SF430000',161=>'SF240000',162=>'SF510000',163=>'afii10071',164=>'SF520000',165=>'SF390000',166=>'SF220000',167=>'SF210000',
168=>'SF250000',169=>'SF500000',170=>'SF490000',171=>'SF380000',172=>'SF280000',173=>'SF270000',174=>'SF260000',175=>'SF360000',
176=>'SF370000',177=>'SF420000',178=>'SF190000',179=>'afii10023',180=>'SF200000',181=>'SF230000',182=>'SF470000',183=>'SF480000',
184=>'SF410000',185=>'SF450000',186=>'SF460000',187=>'SF400000',188=>'SF540000',189=>'SF530000',190=>'SF440000',191=>'copyright',
192=>'afii10096',193=>'afii10065',194=>'afii10066',195=>'afii10088',196=>'afii10069',197=>'afii10070',198=>'afii10086',199=>'afii10068',
200=>'afii10087',201=>'afii10074',202=>'afii10075',203=>'afii10076',204=>'afii10077',205=>'afii10078',206=>'afii10079',207=>'afii10080',
208=>'afii10081',209=>'afii10097',210=>'afii10082',211=>'afii10083',212=>'afii10084',213=>'afii10085',214=>'afii10072',215=>'afii10067',
216=>'afii10094',217=>'afii10093',218=>'afii10073',219=>'afii10090',220=>'afii10095',221=>'afii10091',222=>'afii10089',223=>'afii10092',
224=>'afii10048',225=>'afii10017',226=>'afii10018',227=>'afii10040',228=>'afii10021',229=>'afii10022',230=>'afii10038',231=>'afii10020',
232=>'afii10039',233=>'afii10026',234=>'afii10027',235=>'afii10028',236=>'afii10029',237=>'afii10030',238=>'afii10031',239=>'afii10032',
240=>'afii10033',241=>'afii10049',242=>'afii10034',243=>'afii10035',244=>'afii10036',245=>'afii10037',246=>'afii10024',247=>'afii10019',
248=>'afii10046',249=>'afii10045',250=>'afii10025',251=>'afii10042',252=>'afii10047',253=>'afii10043',254=>'afii10041',255=>'afii10044'),

// encoding map for: iso-8859-16
'iso-8859-16' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'space',161=>'Aogonek',162=>'aogonek',163=>'Lslash',164=>'Euro',165=>'quotedblbase',166=>'Scaron',167=>'section',
168=>'scaron',169=>'copyright',170=>'Scommaaccent',171=>'guillemotleft',172=>'Zacute',173=>'hyphen',174=>'zacute',175=>'Zdotaccent',
176=>'degree',177=>'plusminus',178=>'Ccaron',179=>'lslash',180=>'Zcaron',181=>'quotedblright',182=>'paragraph',183=>'periodcentered',
184=>'zcaron',185=>'ccaron',186=>'scommaaccent',187=>'guillemotright',188=>'OE',189=>'oe',190=>'Ydieresis',191=>'zdotaccent',
192=>'Agrave',193=>'Aacute',194=>'Acircumflex',195=>'Abreve',196=>'Adieresis',197=>'Cacute',198=>'AE',199=>'Ccedilla',
200=>'Egrave',201=>'Eacute',202=>'Ecircumflex',203=>'Edieresis',204=>'Igrave',205=>'Iacute',206=>'Icircumflex',207=>'Idieresis',
208=>'Dcroat',209=>'Nacute',210=>'Ograve',211=>'Oacute',212=>'Ocircumflex',213=>'Ohungarumlaut',214=>'Odieresis',215=>'Sacute',
216=>'Uhungarumlaut',217=>'Ugrave',218=>'Uacute',219=>'Ucircumflex',220=>'Udieresis',221=>'Eogonek',222=>'Tcommaaccent',223=>'germandbls',
224=>'agrave',225=>'aacute',226=>'acircumflex',227=>'abreve',228=>'adieresis',229=>'cacute',230=>'ae',231=>'ccedilla',
232=>'egrave',233=>'eacute',234=>'ecircumflex',235=>'edieresis',236=>'igrave',237=>'iacute',238=>'icircumflex',239=>'idieresis',
240=>'dcroat',241=>'nacute',242=>'ograve',243=>'oacute',244=>'ocircumflex',245=>'ohungarumlaut',246=>'odieresis',247=>'sacute',
248=>'uhungarumlaut',249=>'ugrave',250=>'uacute',251=>'ucircumflex',252=>'udieresis',253=>'eogonek',254=>'tcommaaccent',255=>'ydieresis'),

// encoding map for: koi8-u
'koi8-u' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'quotedbl',35=>'numbersign',36=>'dollar',37=>'percent',38=>'ampersand',39=>'quotesingle',
40=>'parenleft',41=>'parenright',42=>'asterisk',43=>'plus',44=>'comma',45=>'hyphen',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'at',65=>'A',66=>'B',67=>'C',68=>'D',69=>'E',70=>'F',71=>'G',
72=>'H',73=>'I',74=>'J',75=>'K',76=>'L',77=>'M',78=>'N',79=>'O',
80=>'P',81=>'Q',82=>'R',83=>'S',84=>'T',85=>'U',86=>'V',87=>'W',
88=>'X',89=>'Y',90=>'Z',91=>'bracketleft',92=>'backslash',93=>'bracketright',94=>'asciicircum',95=>'underscore',
96=>'grave',97=>'a',98=>'b',99=>'c',100=>'d',101=>'e',102=>'f',103=>'g',
104=>'h',105=>'i',106=>'j',107=>'k',108=>'l',109=>'m',110=>'n',111=>'o',
112=>'p',113=>'q',114=>'r',115=>'s',116=>'t',117=>'u',118=>'v',119=>'w',
120=>'x',121=>'y',122=>'z',123=>'braceleft',124=>'bar',125=>'braceright',126=>'asciitilde',127=>'.notdef',
128=>'SF100000',129=>'SF110000',130=>'SF010000',131=>'SF030000',132=>'SF020000',133=>'SF040000',134=>'SF080000',135=>'SF090000',
136=>'SF060000',137=>'SF070000',138=>'SF050000',139=>'upblock',140=>'dnblock',141=>'block',142=>'lfblock',143=>'rtblock',
144=>'ltshade',145=>'shade',146=>'dkshade',147=>'integraltp',148=>'filledbox',149=>'bullet',150=>'radical',151=>'approxequal',
152=>'lessequal',153=>'greaterequal',154=>'space',155=>'integralbt',156=>'degree',157=>'twosuperior',158=>'periodcentered',159=>'divide',
160=>'SF430000',161=>'SF240000',162=>'SF510000',163=>'afii10071',164=>'afii10101',165=>'SF390000',166=>'afii10103',167=>'afii10104',
168=>'SF250000',169=>'SF500000',170=>'SF490000',171=>'SF380000',172=>'SF280000',173=>'afii10098',174=>'SF260000',175=>'SF360000',
176=>'SF370000',177=>'SF420000',178=>'SF190000',179=>'afii10023',180=>'afii10053',181=>'SF230000',182=>'afii10055',183=>'afii10056',
184=>'SF410000',185=>'SF450000',186=>'SF460000',187=>'SF400000',188=>'SF540000',189=>'afii10050',190=>'SF440000',191=>'copyright',
192=>'afii10096',193=>'afii10065',194=>'afii10066',195=>'afii10088',196=>'afii10069',197=>'afii10070',198=>'afii10086',199=>'afii10068',
200=>'afii10087',201=>'afii10074',202=>'afii10075',203=>'afii10076',204=>'afii10077',205=>'afii10078',206=>'afii10079',207=>'afii10080',
208=>'afii10081',209=>'afii10097',210=>'afii10082',211=>'afii10083',212=>'afii10084',213=>'afii10085',214=>'afii10072',215=>'afii10067',
216=>'afii10094',217=>'afii10093',218=>'afii10073',219=>'afii10090',220=>'afii10095',221=>'afii10091',222=>'afii10089',223=>'afii10092',
224=>'afii10048',225=>'afii10017',226=>'afii10018',227=>'afii10040',228=>'afii10021',229=>'afii10022',230=>'afii10038',231=>'afii10020',
232=>'afii10039',233=>'afii10026',234=>'afii10027',235=>'afii10028',236=>'afii10029',237=>'afii10030',238=>'afii10031',239=>'afii10032',
240=>'afii10033',241=>'afii10049',242=>'afii10034',243=>'afii10035',244=>'afii10036',245=>'afii10037',246=>'afii10024',247=>'afii10019',
248=>'afii10046',249=>'afii10045',250=>'afii10025',251=>'afii10042',252=>'afii10047',253=>'afii10043',254=>'afii10041',255=>'afii10044'),

// encoding map for: symbol
'symbol' => array(0=>'.notdef',1=>'.notdef',2=>'.notdef',3=>'.notdef',4=>'.notdef',5=>'.notdef',6=>'.notdef',7=>'.notdef',
8=>'.notdef',9=>'.notdef',10=>'.notdef',11=>'.notdef',12=>'.notdef',13=>'.notdef',14=>'.notdef',15=>'.notdef',
16=>'.notdef',17=>'.notdef',18=>'.notdef',19=>'.notdef',20=>'.notdef',21=>'.notdef',22=>'.notdef',23=>'.notdef',
24=>'.notdef',25=>'.notdef',26=>'.notdef',27=>'.notdef',28=>'.notdef',29=>'.notdef',30=>'.notdef',31=>'.notdef',
32=>'space',33=>'exclam',34=>'universal',35=>'numbersign',36=>'existential',37=>'percent',38=>'ampersand',39=>'suchthat',
40=>'parenleft',41=>'parenright',42=>'asteriskmath',43=>'plus',44=>'comma',45=>'minus',46=>'period',47=>'slash',
48=>'zero',49=>'one',50=>'two',51=>'three',52=>'four',53=>'five',54=>'six',55=>'seven',
56=>'eight',57=>'nine',58=>'colon',59=>'semicolon',60=>'less',61=>'equal',62=>'greater',63=>'question',
64=>'congruent',65=>'Alpha',66=>'Beta',67=>'Chi',68=>'Delta',69=>'Epsilon',70=>'Phi',71=>'Gamma',
72=>'Eta',73=>'Iota',74=>'theta1',75=>'Kappa',76=>'Lambda',77=>'Mu',78=>'Nu',79=>'Omicron',
80=>'Pi',81=>'Theta',82=>'Rho',83=>'Sigma',84=>'Tau',85=>'Upsilon',86=>'sigma1',87=>'Omega',
88=>'Xi',89=>'Psi',90=>'Zeta',91=>'bracketleft',92=>'therefore',93=>'bracketright',94=>'perpendicular',95=>'underscore',
96=>'radicalex',97=>'alpha',98=>'beta',99=>'chi',100=>'delta',101=>'epsilon',102=>'phi',103=>'gamma',
104=>'eta',105=>'iota',106=>'phi1',107=>'kappa',108=>'lambda',109=>'mu',110=>'nu',111=>'omicron',
112=>'pi',113=>'theta',114=>'rho',115=>'sigma',116=>'tau',117=>'upsilon',118=>'omega1',119=>'omega',
120=>'xi',121=>'psi',122=>'zeta',123=>'braceleft',124=>'bar',125=>'braceright',126=>'similar',127=>'.notdef',
128=>'.notdef',129=>'.notdef',130=>'.notdef',131=>'.notdef',132=>'.notdef',133=>'.notdef',134=>'.notdef',135=>'.notdef',
136=>'.notdef',137=>'.notdef',138=>'.notdef',139=>'.notdef',140=>'.notdef',141=>'.notdef',142=>'.notdef',143=>'.notdef',
144=>'.notdef',145=>'.notdef',146=>'.notdef',147=>'.notdef',148=>'.notdef',149=>'.notdef',150=>'.notdef',151=>'.notdef',
152=>'.notdef',153=>'.notdef',154=>'.notdef',155=>'.notdef',156=>'.notdef',157=>'.notdef',158=>'.notdef',159=>'.notdef',
160=>'Euro',161=>'Upsilon1',162=>'minute',163=>'lessequal',164=>'fraction',165=>'infinity',166=>'florin',167=>'club',
168=>'diamond',169=>'heart',170=>'spade',171=>'arrowboth',172=>'arrowleft',173=>'arrowup',174=>'arrowright',175=>'arrowdown',
176=>'degree',177=>'plusminus',178=>'second',179=>'greaterequal',180=>'multiply',181=>'proportional',182=>'partialdiff',183=>'bullet',
184=>'divide',185=>'notequal',186=>'equivalence',187=>'approxequal',188=>'ellipsis',189=>'arrowvertex',190=>'arrowhorizex',191=>'carriagereturn',
192=>'aleph',193=>'Ifraktur',194=>'Rfraktur',195=>'weierstrass',196=>'circlemultiply',197=>'circleplus',198=>'emptyset',199=>'intersection',
200=>'union',201=>'propersuperset',202=>'reflexsuperset',203=>'notsubset',204=>'propersubset',205=>'reflexsubset',206=>'element',207=>'notelement',
208=>'angle',209=>'gradient',210=>'registerserif',211=>'copyrightserif',212=>'trademarkserif',213=>'product',214=>'radical',215=>'dotmath',
216=>'logicalnot',217=>'logicaland',218=>'logicalor',219=>'arrowdblboth',220=>'arrowdblleft',221=>'arrowdblup',222=>'arrowdblright',223=>'arrowdbldown',
224=>'lozenge',225=>'angleleft',226=>'registersans',227=>'copyrightsans',228=>'trademarksans',229=>'summation',230=>'parenlefttp',231=>'parenleftex',
232=>'parenleftbt',233=>'bracketlefttp',234=>'bracketleftex',235=>'bracketleftbt',236=>'bracelefttp',237=>'braceleftmid',238=>'braceleftbt',239=>'braceex',
240=>'.notdef',241=>'angleright',242=>'integral',243=>'integraltp',244=>'integralex',245=>'integralbt',246=>'parenrighttp',247=>'parenrightex',
248=>'parenrightbt',249=>'bracketrighttp',250=>'bracketrightex',251=>'bracketrightbt',252=>'bracerighttp',253=>'bracerightmid',254=>'bracerightbt',255=>'.notdef',
1226=>'registered',1227=>'copyright',1228=>'trademark')

); // end of encoding maps

} // --- END OF CLASS ---

//============================================================+
// END OF FILE
//============================================================+
