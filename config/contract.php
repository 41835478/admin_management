<?php
return [
    'interestOptions'     => [//因为需要精确到千分位，所以此处为千分之XX，80实际上为0.08
        '80'       => '8%',
        '82'       => '8.2%',
        '83'       => '8.3%',
        '85'       => '8.5%',
        '90'       => '9%',
        '95'       => '9.5%',
        '70'       => '7%',
        '77'       => '7.7%',
    ],
    'sourceOptions' => [
        1=>'就来帮越泽',
        2=>'绍兴就来帮',
        3=>'就来帮总部',
        4=>'梵银',
    ],
    'bankTypes' => [
        0=>'对私',
        1=>'对公'
    ],
    'bankCodes'=> [
        '102' => '中国工商银行',
        '103' => '中国农业银行',
        '104' => '中国银行',
        '105' => '中国建设银行',
        '201' => '国家开发银行',
        '202' => '中国进出口银行',
        '203' => '中国农业发展银行',
        '301' => '交通银行',
        '302' => '中信银行',
        '303' => '中国光大银行',
        '304' => '华夏银行',
        '305' => '中国民生银行',
        '306' => '广东发展银行',
        '307' => '深圳发展银行',
        '308' => '招商银行',
        '309' => '兴业银行',
        '310' => '上海浦东发展银行',
        '04012900' => '上海银行',
        '04023930' => '厦门市商业银行',
        '04031000' => '北京市商业银行',
        '04044560' => '烟台市商业银行',
        '04053910' => '福州市商业银行',
        '04062410' => '长春市商业银行',
        '04073140' => '镇江市商业银行',
        '04083320' => '宁波市商业银行',
        '04094510' => '济南市商业银行',
        '04105840' => '深圳市商业银行',
        '04115010' => '焦作市商业银行',
        '04123330' => '温州市商业银行',
        '04135810' => '广州市商业银行',
        '04145210' => '武汉市商业银行',
        '04162640' => '齐齐哈尔市商业银行',
        '04172210' => '沈阳市商业银行',
        '04184930' => '洛阳市商业银行',
        '04192310' => '辽阳市商业银行',
        '04202220' => '大连市商业银行',
        '04213050' => '苏州市商业银行',
        '04221210' => '石家庄市商业银行',
        '04233310' => '杭州市商业银行',
        '04243010' => '南京市商业银行',
        '04256020' => '东莞市商业银行',
        '04263380' => '金华市商业银行',
        '04278810' => '乌鲁木齐市商业银行',
        '04283370' => '绍兴市商业银行',
        '04296510' => '成都市商业银行',
        '04302240' => '抚顺市商业银行',
        '04314730' => '临沂市商业银行',
        '04325250' => '宜昌市商业银行',
        '04332350' => '葫芦岛市商业银行',
        '04341100' => '天津市商业银行',
        '04354910' => '郑州市商业银行',
        '04368710' => '银川市商业银行',
        '04375850' => '珠海市商业银行',
        '04384530' => '淄博市商业银行',
        '04392270' => '锦州市商业银行',
        '04403610' => '合肥市商业银行',
        '04416530' => '重庆市商业银行',
        '04422610' => '哈尔滨市商业银行',
        '04437010' => '贵阳市商业银行',
        '04447910' => '西安市商业银行',
        '04453020' => '无锡市商业银行',
        '04462260' => '丹东市商业银行',
        '04478210' => '兰州市商业银行',
        '04484220' => '南昌市商业银行',
        '04491610' => '太原市商业银行',
        '04504520' => '青岛市商业银行',
        '04512420' => '吉林市商业银行',
        '04523060' => '南通市商业银行',
        '04533120' => '扬州市商业银行',
        '04544240' => '九江市商业银行',
        '04554732' => '日照市商业银行',
        '04562230' => '鞍山市商业银行',
        '04571260' => '秦皇岛市商业银行',
        '04588510' => '西宁市商业银行',
        '04593450' => '台州市商业银行',
        '04603110' => '盐城市商业银行',
        '04615510' => '长沙市商业银行',
        '04624580' => '潍坊市商业银行',
        '04634280' => '赣州市商业银行',
        '04643970' => '泉州市商业银行',
        '04652280' => '营口市商业银行',
        '04667310' => '昆明市商业银行',
        '04672290' => '阜新市商业银行',
        '04683040' => '常州市商业银行',
        '04693080' => '淮安市商业银行',
        '04703350' => '嘉兴市商业银行',
        '04713620' => '芜湖市商业银行',
        '04721460' => '廊坊市商业银行',
        '04741900' => '呼和浩特市城市商业银行',
        '04753360' => '湖州市商业银行',
        '04773650' => '马鞍山商业银行',
        '04786110' => '南宁商业银行',
        '04791920' => '包头商业银行',
        '04803070' => '连云港商业银行',
        '04814650' => '威海商业银行',
        '04823660' => '淮北商业银行',
        '04836560' => '攀枝花商业银行',
        '04843680' => '安庆商业银行',
        '04856590' => '绵阳商业银行',
        '04866570' => '泸州商业银行',
        '04871620' => '大同商业银行',
        '04901380' => '张家口商业银行',
        '14123022' => '江阴市农村商业银行',
        '313' => '城市商业银行',
        '05785800' => '华兴银行',
        '04895910' => '南粤银行',
        '314' => '农村商业银行（江苏）',
        '315' => '恒丰银行',
        '04154560' => '恒丰银行',
        '316' => '浙商银行',
        '317' => '农村合作银行',
        '318' => '渤海银行股份有限公司',
        '03170000' => '渤海银行',
        '319' => '徽商银行股份有限公司',
        '320' => '镇银行有限责任公司',
        '15183651' => '安徽当涂新华村镇银行',
        '15211000' => '北京怀柔融兴村镇银行',
        '15025371' => '湖北仙桃北农商村镇银行',
        '15055411' => '恩施常农商村镇银行',
        '15201000' => '北京顺义银座村镇银行',
        '15006518' => '大邑交银兴民村镇银行',
        '15142080' => '方大村镇银行',
        '15044015' => '福建建瓯石狮村镇银行',
        '15015363' => '湖北嘉鱼吴江村镇银行',
        '15115270' => '湖北随州曾都汇丰村镇银行',
        '15123181' => '江苏沭阳东吴村镇银行',
        '15195321' => '京山中银富登村镇银行',
        '15265130' => '南阳村镇银行',
        '15024521' => '青岛即墨北农商村镇银行',
        '15205840' => '深圳福田银座村镇银行',
        '15145840' => '深圳龙岗鼎业村镇银行',
        '15036512' => '双流诚民村镇银行',
        '15055416' => '咸丰常农商村镇银行',
        '15036753' => '宣汉诚民村镇银行',
        '15083362' => '浙江长兴联合村镇银行',
        '15156030' => '中山小榄村镇银行',
        '15106919' => '重庆璧山工银村镇银行',
        '15195338' => '蕲春中银富登村镇银行',
        '04733450' => '台州市泰隆城市信用社',
        '04885050' => '三门峡城市信用社',
        '401' => '城市信用社',
        '14012900' => '上海市农村信用合作社联合社',
        '14023052' => '昆山市农村信用合作社联合社',
        '14033055' => '常熟市农村信用合作社联合社',
        '14045840' => '深圳市农村信用合作社联合社',
        '14055810' => '广州市农村信用合作社联合社',
        '14063317' => '杭州市萧山区农村信用合作社联合社',
        '14075882' => '南海市农村信用合作社联合社',
        '14085883' => '顺德市农村信用合作社联合社',
        '14097310' => '昆明市农村信用合作社联合社',
        '14105210' => '武汉市农村信用合作社联合社',
        '14113030' => '徐州市市郊农村信用合作社联合社',
        '14136530' => '重庆市农村信用合作社联合社',
        '14144500' => '山东省市农村信用社',
        '14144520' => '青岛农村信用社',
        '14156020' => '东莞农村信用合作社联合社',
        '14163056' => '张家港市农村商业银行',
        '14173930' => '厦门市农村信用合作社联合社',
        '14181000' => '北京农村信用联社',
        '14191100' => '天津市农村信用合作社联合社',
        '14203320' => '宁波鄞州农村合作银行',
        '14215881' => '佛山市三水区农村信用合作社联合社',
        '14226510' => '成都市农村信用合作社联合社',
        '14231440' => '沧州市农村信用合作社联合社',
        '14243000' => '江苏省农村信用合作社联合社',
        '402' => '农村信用社（含北京农村商业银行）',
        '403' => '中国邮政储蓄银行',
        '501' => '汇丰银行',
        '502' => '东亚银行',
        '503' => '南洋商业银行',
        '504' => '恒生银行(中国)有限公司',
        '505' => '中国银行（香港）有限公司',
        '506' => '集友银行有限公司',
        '507' => '创兴银行有限公司',
        '509' => '星展银行（中国）有限公司',
        '623' => '星展银行（中国）有限公司',
        '510' => '永亨银行（中国）有限公司',
        '512' => '永隆银行',
        '03350000' => '大新银行（中国）',
        '531' => '花旗银行（中国）有限公司',
        '532' => '美国银行有限公司',
        '533' => '摩根大通银行(中国)有限公司',
        '561' => '三菱东京日联银行(中国）有限公司',
        '563' => '日本三井住友银行股份有限公司',
        '564' => '瑞穗实业银行（中国）有限公司',
        '565' => '日本山口银行股份有限公司',
        '591' => '韩国外换银行股份有限公司',
        '593' => '友利银行(中国)有限公司',
        '594' => '韩国产业银行',
        '595' => '新韩银行(中国)有限公司',
        '596' => '韩国中小企业银行有限公司',
        '597' => '韩亚银行（中国）有限公司',
        '621' => '华侨银行（中国）有限公司',
        '622' => '大华银行（中国）有限公司',
        '631' => '泰国盘谷银行(大众有限公司)',
        '641' => '奥地利中央合作银行股份有限公司',
        '651' => '比利时联合银行股份有限公司',
        '652' => '比利时富通银行有限公司',
        '661' => '荷兰银行',
        '662' => '荷兰安智银行股份有限公司',
        '671' => '渣打银行',
        '672' => '英国苏格兰皇家银行公众有限公司',
        '691' => '法国兴业银行（中国)有限公司',
        '694' => '法国东方汇理银行股份有限公司',
        '695' => '法国外贸银行股份有限公司',
        '711' => '德国德累斯登银行股份公司',
        '712' => '德意志银行（中国）有限公司',
        '713' => '德国商业银行股份有限公司',
        '714' => '德国西德银行股份有限公司',
        '715' => '德国巴伐利亚州银行',
        '716' => '德国北德意志州银行',
        '732' => '意大利联合圣保罗银行股份有限公司',
        '741' => '瑞士信贷银行股份有限公司',
        '742' => '瑞士银行',
        '751' => '加拿大丰业银行有限公司',
        '752' => '加拿大蒙特利尔银行有限公司',
        '761' => '澳大利亚和新西兰银行集团有限公司',
        '771' => '摩根士丹利国际银行（中国）有限公司',
        '775' => '联合银行(中国)有限公司',
        '776' => '荷兰合作银行有限公司',
        '781' => '厦门国际银行',
        '782' => '法国巴黎银行（中国）有限公司',
        '785' => '华商银行',
        '787' => '华一银行',
        '969' => '(澳门地区)银行',
        '25250446' => '大丰银行有限公司',
        '26080446' => '澳门永亨银行股份有限公司',
        '26220446' => '澳门国际银行',
        '28020446' => '澳门通股份有限公司',
        '26470446' => '中国工商银行（澳门）',
        '01020446' => '中国工商银行澳门分行',
        '25270446' => '中国建设银行澳门股份有限公司',
        '01040446' => '中国银行澳门分行',
        '989' => '(香港地区)银行',
        '25120344' => '香港上海汇丰银行有限公司',
        '25080344' => '星展银行香港有限公司',
        '25280344' => '渣打银行香港有限公司',
        '25240344' => '中国工商银行（亚洲）',
        '01020360' => '中国工商银行（印度尼西亚）',
        '01020276' => '中国工商银行法兰克福分行',
        '25070344' => '中国建设银行亚洲股份有限公司',
        '01040036' => '中国银行（澳大利亚）',
        '01040458' => '中国银行（马来西亚）',
        '01040608' => '中国银行马尼拉分行',
        '01040764' => '中国银行曼谷分行',
        '01040410' => '中国银行首尔分行',
        '01040360' => '中国银行雅加达分行',
        '01040702' => '中行新加坡分行',
        '01040392' => '中银东京分行',
        '26230446' => '大西洋银行股份有限公司',
        '01020458' => '工银马来西亚',
        '25160344' => '中信嘉华银行有限公司',
        '05197110' => '安顺市商业银行',
        '05684960' => '安阳市商业银行',
        '26320446' => '澳门商业银行',
        '05417930' => '宝鸡商行',
        '05121660' => '长治市商业银行',
        '05131410' => '承德市商业银行',
        '05576750' => '达州市商业银行',
        '04986580' => '德阳市商业银行',
        '05274550' => '东营市商业银行',
        '26780643' => '俄罗斯远东商业银行',
        '04916170' => '桂林市商业银行',
        '05171270' => '邯郸市商业银行',
        '05611480' => '衡水市商业银行',
        '04933120' => '江苏长江商业银行',
        '05591750' => '晋中市商业银行',
        '05734220' => '景德镇商业银行',
        '05658880' => '库尔勒市商业银行',
        '05406650' => '乐山市商业银行',
        '05556840' => '凉山州商业银行',
        '05007020' => '六盘水商行',
        '04966730' => '南充市商业银行',
        '05442320' => '盘锦市商业银行',
        '05238333' => '平凉市商业银行',
        '05027360' => '曲靖市商业银行',
        '05675060' => '商丘商行',
        '05264330' => '上饶市商业银行',
        '05516620' => '遂宁市商业银行',
        '05284630' => '泰安市商业银行',
        '04991240' => '唐山市商业银行',
        '05392330' => '铁岭市商业银行股份有限公司',
        '05584980' => '新乡市商业银行',
        '04943030' => '徐州市商业银行',
        '05365030' => '许昌市商业银行',
        '05666770' => '雅安市商业银行',
        '05631650' => '阳泉市商业银行',
        '05646710' => '宜宾市商业银行',
        '05247410' => '玉溪市商业银行',
        '27200704' => '越南西贡商业银行',
        '64895910' => '湛江商行',
        '05303380' => '浙江稠州商业银行',
        '05253450' => '浙江民泰商业银行',
        '05625080' => '周口市商业银行',
        '05605110' => '驻马店市商业银行',
        '05326560' => '自贡市商业银行',
        '05167030' => '遵义市商业银行',
        '05565040' => '漯河商行',
        '64384530' => '齐商银行',
        '04761430' => '沧州银行',
        '05417900' => '长安银行',
        '05492340' => '朝阳银行',
        '05154680' => '德州银行股份有限公司',
        '05342050' => '鄂尔多斯银行',
        '03330001' => '法国兴业银行（中国）',
        '64667310' => '富滇银行',
        '64786110' => '广西北部湾银行',
        '64221210' => '河北银行股份有限公司',
        '05354970' => '鹤壁银行',
        '64753360' => '湖州银行',
        '05705500' => '华融湘江银行',
        '05075210' => '汉口银行',
        '05374610' => '济宁银行股份有限公司',
        '05083000' => '江苏银行',
        '15173120' => '江苏邗江民泰村镇银行',
        '05031680' => '晋城银行股份有限公司',
        '05478820' => '昆仑银行股份有限公司',
        '04956140' => '柳州银行股份有限公司',
        '04922600' => '龙江银行',
        '04741910' => '内蒙古银行',
        '04360010' => '宁夏银行',
        '05105840' => '平安银行股份有限公司',
        '05484950' => '平顶山银行股份有限公司',
        '03134500' => '齐鲁银行股份有限公司',
        '64588510' => '青海银行',
        '15215840' => '深圳宝安融兴村镇银行',
        '04170000' => '盛京银行',
        '05438720' => '石嘴山银行',
        '05311930' => '乌海银行股份有限公司',
        '05778981' => '新疆汇和银行',
        '05695150' => '信阳银行',
        '05541310' => '邢台银行股份有限公司',
        '05426900' => '重庆三峡银行',
        '64416910' => '重庆银行股份有限公司',
    ]

];
