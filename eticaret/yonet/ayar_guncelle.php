  <?php
  include "../baglan.php";


  if(isset($_POST['ayar_baslik']))
  {
  	$guncelle=$db->prepare("UPDATE ayar SET 
  		ayar_baslik:=ayar_baslik,
  		ayar_description:=ayar_description,
  		ayar_keywords:=ayar_keywords,
  		ayar_facebook:=ayar_facebook,
  		ayar_twitter:=ayar_twitter,
  		ayar_instagram:=ayar_instagram,
  		ayar_youtube:=ayar_youtube,
  		ayar_msunucu:=ayar_msunucu,
  		ayar_mport:=ayar_mport,
  		ayar_mkadi:=ayar_mkadi,
  		ayar_msifre:=ayar_msifre
  		WHERE ayar_id=1")
  }
  ?>