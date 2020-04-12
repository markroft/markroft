<?php
define('API_KEY','1084264039:AAHZidLGB22ESYpSdNxEets6MsN7jg0wAf8'); 
$admin = "518832527"; //admin id

   function del($nomi){
   array_map('unlink', glob("$nomi"));
   }

   function ty($ch){ 
   return bot('sendChatAction', [
   'chat_id' => $ch,
   'action' => 'typing',
   ]);
} 

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
$update = json_decode(file_get_contents('php://input'));
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$cid = $message->chat->id;
$text = $message->text;
$status = $statjson['result']['status'];
$silent = file_get_contents("data/$chat_id/silent.txt");
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$rtid = $update->message->reply_to_message->from->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$rt = $update->message->reply_to_message;
$super_silent = explode("\n", $silent);
$re_name = $update->message->reply_to_message->from->first_name;
$mtext = $message->text;
$type = $message->chat->type;
$uid= $message->from->id;
$namegroup = $update->message->chat->title;
$ufname = $update->message->from->first_name;
$uname = $update->message->from->last_name;
$ulogin = $update->message->from->username;
$user_id = $update->message->from->id;
$capt = $message->caption;
$forward = $update->message->forward_from;
$editm = $update->edited_message;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$from_id = $message->from->id;
$step=file_get_contents("data/$fadmin/name.txt");


$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="Xojaka_robot"; //bot useri
$soat = date('H:i', strtotime('5 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;


$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("warn");
mkdir("stat");
mkdir("sozlama");


$gif = $message->animation;
$photo = $message->photo;
$sticker = $message->sticker;
$video = $message->video;
$music = $message->audio;
$document = $message->document;
$forward_from = $message->forward_from;
$voice = $message->voice;
$doc = $message->document;
$rasm = $message->photo;
$animation = $message->animation;
$music = $update->message->audio;
$contact = $message->contact;
 $location = $message->location;
$video_note = $message->video_note;
$is_animated = $message->is_animated;
$reply_to_message = $message->reply_to_message;
$game = $message->game;
$kirish = $message->kirish;


$kanali="@Live_Xakkerlar";
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;

if(isset($chpmesid) and (strtolower($chuser) == strtolower(str_replace("@","",$kanali)))){
unlink("news.dat");
file_put_contents("news.txt",$chpmesid);
$chm = file_get_contents("news.txt");
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
}


/*SOZLAMA*/
if(isset($text1)){
$get = file_get_contents("sozlama/$chat_id");
if($get){}else{
$baza = [
"salom"=>"true",
"chats"=>"true",
"sticker"=>"true",
"link"=>"true",
"audio"=>"true",
"video"=>"true",
"doc"=>"true",
"rasm"=>"true",
"forward"=>"true",
"gif"=>"true",
"golos"=>"true",
"contact"=>" true",
"user"=>" true",
"hashtag"=>" true",
"location"=>"true",
"video_note"=>"true",
"is_animated"=>"true",
"reply_to_message"=>"true",
"game"=>"true",
"kirish"=>"true",
];
file_put_contents("sozlama/$chat_id",json_encode($baza));
}
}

$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$Ssalom = $baza["salom"];
$Schats = $baza["chats"];
$Ssticker = $baza["sticker"];
$Slink = $baza["link"];
$Saudio = $baza["audio"];
$Svideo = $baza["video"];
$Sdoc = $baza["doc"];
$Sforward_from = $baza["forward_from"];
$Sgif = $baza["gif"];
$Srasm = $baza["rasm"];
$Sgolos = $baza["golos"];
$Scontact = $baza["contact"];
$Suser = $baza["user"];
$Shashtag = $baza["hashtag"];
$Slocation = $baza["location"];
$Svideo_note = $baza["video_note"];
$Sis_animated = $baza["is_animated"];
$Sreply_to_message = $baza["reply_to_message"];
$Sgame = $baza["game"];
$Skirish = $baza["kirish"];

/*salomlashish*/
if(isset($update) and $Ssalom == "true"){

if (($new_chat_members != NUll)&&($is_bot!=true)) {
  if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
  $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
  'chat_id' => $chat_id,
  'user_id' => $new_chat_members,
  'until_date'=> $vaqti,
]);
}else{
  $test = "<b>👋 Salom</b> <a href='tg://user?id=$new_chat_members'>$ism</a>, <b>$title</b> guruhimizga xush kelibsiz!";
   bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$test,
   'parse_mode'=>'html'
 ]);
   }
}

}

/*Guruhda gaplashish*/
if(isset($update) and $Schats == "true"){

if((stripos($mtext,"Zo‘r") !== false) or (stripos($mtext,"yaxshi")!==false) or (stripos($mtext,"Zor")!==false) or (stripos($mtext,"Zo'r")!==false)){
  $name = $message->from->first_name;
  $input = array("Qayerdansiz?","Juda  yaxshi 😁","👍","Ok.","Qaysi viloyatdansiz?", "Nima uchun","Har doim shunday bo'lsin.","Qayerliksiz?");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Toshkent")!==false) or (stripos($mtext,"Andijon")!==false) or (stripos($mtext,"Fargona")!==false) or (stripos($mtext,"Farg'ona")!==false)  or  (stripos($mtext,"Namangan")!==false) or  (stripos($mtext,"Sirdaryo")!==false) or (stripos($mtext,"Jizzax")!==false) or (stripos($mtext,"Qashqadaryo")!==false) or (stripos($mtext,"Surxondaryo")!==false) or (stripos($mtext,"Buxoro")!==false) or (stripos($mtext,"Xorazim")!==false) or (stripos($mtext,"Nukus")!==false) or (stripos($mtext,"Qoraqalpoq")!==false)  or  (stripos($mtext,"Qarshidan")!==false) or  (stripos($mtext,"Guliston")!==false) or (stripos($mtext,"Qoqon")!==false) or (stripos($mtext,"nanay")!==false) or (stripos($mtext,"Nanay")!==false) or (stripos($mtext,"Kattakorgon")!==false) or (stripos($mtext,"Chilonzor")!==false)){
$input = array("Qayeridan?","Zo'rku👍","Hmm,Chiroyli shahar","Yaxshi,lekin biz tomondan ancha uzoq ekan.","O‘zidanmi?", "Yoge,zorku.","Qayeridan.","Hm,u yerda chiroyli joylar ko‘p deb eshitganman.");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Hm") !== false) or (stripos($mtext,"Xm")!==false)){
  $name = $message->from->first_name;
  $input = array("Nega  hm deysiz gapiring","Hm","Nima Hm?","😂","Zerikdingizmi?","Negadur zerikdim", "Tinchlikmi?","Mbingiz kam qoldimi deyman 😁","Qayerliksiz?");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Tinchlikmi") !== false)){
  $name = $message->from->first_name;
  $input = array("Ha tinchlik","Nima edi?","O'zizdan so'rasak");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

 if($text1 == "Hayrli tun" || $text1 == "Spakoyni noc" || $text1 == "Xayrli tun" || $text1 == "Xayrli tun hamaga"){
       bot('sendvoice',[
      'chat_id'=>$chat_id,
      'reply_to_message_id'=>$mesid,
      'voice'=>"http://telegram.me/Live_Xakkerlar"
    ]);
  }

if((stripos($mtext,"Rostdanmi") !== false) or (stripos($mtext,"rostanmi")!==false) or (stripos($mtext,"rostmi")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha rost","Bilmadim","Ha","Men qayerdan bilay ","Yolg'ondan :)");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"O‘idan") !== false) or (stripos($mtext,"O'zidan")!==false) or (stripos($mtext,"o‘zidan")!==false) or (stripos($mtext,"Sentridan")!==false)){
  $name = $message->from->first_name;
  $input = array("Ha yaxshi","Shahardanmisiz?","Zo'rku");
  $rand=rand(0,2);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Samarqand")!==false)){
$input = array("Wow,men ham Samarqandlik","Hamshahar ekanmiz!","Men ham Samarqandlikman 😊","Qayeridan?","Bitta joydan ekanmiz");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Yoge")!==false) or (stripos($mtext,"rostanmi")!==false)  or (stripos($mtext,"rostdanmi")!==false)  or (stripos($mtext,"Yog'e")!==false)){
$input = array("Ha","Ha shunaqa","Hm shunday","Haye.","Ha rost");
  $rand=rand(0,4);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

  if((stripos($mtext,"Salom") !== false) or (stripos($mtext,"салом")!==false)){
 if($fadmin==$admin){
    bot('sendmessage',[
      'chat_id'=>$chat_id,
      'text'=>"Assalom-u alaykum, xo'jayin!",
      ]);
  }else{
  $name = $message->from->first_name;
  $input = array("Assalom-u alaykum!","Salom $name, guruhimiz sizga yoqdimi?","Salom, ismingiz nima?","Assaalom-u alaykum","Привет, как дело?","Qaleysiz?","Sizga ham salom","Salom.", "Salom qaleysiz?","Va alaykum assalom, baxtli bo‘ling! 😊.","Yaxshimisiz $name, namuncha ko‘rinmay ketdingiz?", "Juda sersalom ekansiz!", "Assalom-u alaykum!", "Salom $name", "Iye keling,endi sizni eslab turgandik","Ana, yana bittasi keldi 😂","Salom meni tanidizmi?","Salom bergan kishini...Xudo o‘nglar ishini.","Namuncha salom berurasiz","Salomim so‘lim-so‘lim  kitobdadur o‘ng  qo‘lim. Tringlab hech qoymagan Telegramda chap qo‘lim!","Sizni ko‘radigan kun ham bor ekanu!","Salom, yaxshimisiz?","Qaleysiz?","Asssalom-u alaykum boy ota. Ishlar qaley?","Sava","Привет ","Hello $name, qaleysiz?","Salom, Nick daxshat-ku a?","Ehe keb qoling, anu gap nima bo'ldi?","Yuragizni sevgi muhabbat qoplagan vaqtda to‘g‘ri shu yerga kelevering, ok?","Garov  o‘ynaymizmi  kimnidur sevib qolgansiz?Agar adashayotgan bo‘lsam, garov haqida unuting 😆","Bolla, qizla bitta fikr bor!","Keling, sizni ham ko‘radigan  kun  bor ekan-ku a?");
  $rand=rand(0,32);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}
  }

  if($text1 == "Ok" or  $text1 == "ok" or $text1 == "OK" or $text1 == "oK"){
  $input = array("Ok!!!","Nok🍐","Sok","👌","Tok?","😏","?","👍","Ok");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimni") !== false){
  $input  = array("Bilmasam?","Natashani jiyani","Bugun havo zo‘r-ku a?","Men bilmayman");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if(stripos($mtext,"Qanaqa") !== false){
  $input  = array("Man qayerdan bilay?","Hech qanaqa 😆","Shunaqa","Bilmasam");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

if((stripos($mtext,"Qaleys") !== false) or (stripos($mtext,"Qalaysan")!==false)  or (stripos($mtext,"Qaliysan")!==false) or (stripos($mtext,"Qaneysan")!==false)  or  (stripos($mtext,"Qanneysan")!==false)){
  $input = array("Cho‘tki 😁","Zo‘r.", "Zo‘r, o‘zingizchi?","Kechagidan  yaxshi 😁","Yaxshi, so‘raganingiz uchun rahmat!", "Zo‘r", "Zo‘r, o‘zingizchi?", "Chidasa bo‘ladi 👌");
  $rand=rand(0,7);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
   'parse_mode'=> 'markdown'
  ]));
}

if((stripos($mtext,"Xojaka") !== false) or (stripos($mtext,"xojaka") !== false) or (stripos($mtext,"хожака") !== false) or (stripos($mtext,"Хожака")!==false)){
  $input = array("Qaleysiz?","Har zamonda bir yozib turingda siz ham","Uydagilar uylan deb qoymayapti","Profilingizdagi rasm zo‘r 👍","Bugun hamma jim negadir?","Shu ismimni deb hamma meni rus deb o'ylaydi😜","Admin ko'rinmaydimi?","Mbingiz kam qolibdi 😂", "Men shu yerdaman.", "Ho‘v?", "Shunaqa chaqirishingiz juda ham yoqadi-da ☺️", "Nima?", "Menda ishingiz bormi?", "Hozir kimdir meni esladimi?","Tinchgina ovqatlanishga ham qoyishmaydi-de bular","Qulog‘im  sizda!","Labbay?!","Eshitaman?","Hozir kelaman mb kam qolibdi","Salom, biror nima kerakmi?","Shu ismni qayerdadir eshitganman-da 🤔","Ana kapitan");
  $rand=rand(0,14);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if((stripos($mtext,"Rahmat")!==false) or (stripos($mtext,"Raxmat")!== false)){
  $input = array("Arzimaydi 😊","Arziysiz","😊","Rahmatga hojat yo‘q!");
  $rand=rand(0,3);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimman") !== false){
  $name = $message->from->first_name;
  $input = array("$name bo‘lsangiz kerak yana bilmadim.","O‘zingiz  bilmasangiz, men qayerdan bilaman?!","Betakrorsiz","Ajinagul...degan sinfdoshim esimga tushib ketdi 😢","N1","Kapitan","Ponchik","Kunfu panda","Kim san, Shu serialni kim  ko‘rgan?","Kim bo‘lsangiz  ham avvalo inson bo’ling!","Brucleeni quritilgani 😂","Boyvacha","Eng zo‘risiz","Men qayerdan bilay");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if(stripos($mtext,"Kimsan")!== false){
  $name = $message->from->first_name;
  $input = array("N1","Shu savolni eshitsam negadir nickimga hech nima yozilmagan ekan degan hayolga boraman!?","Hazillash robotcha!","Kim deb o‘ylaysiz?","Traktorchi Abdusattorni qo‘shinisi Sobirni amakivachchasiga boja bo‘lgan G‘anisher degan aka bor-ku, o‘sha mashinasiga tonirofka qildiribdi 😜","Kapitan Telegram","Mashaman","Sirliman 🎩","O‘ziz kimsiz?","Har doim shu savolni beraverib charchamadingizmi?","Tinchlikmi kimligim bilan qiziqib qolibsiz?!","Menmi?","Nima edi 😡...Vux qo‘rqib ketdingiz-a?","Leonardo Dekapryo,","Mishani xizmatdosh jo'rasi!");
  $rand=rand(0,13);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

}

/*sozlama menyusi*/
if($text1 == "/sozlama"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$baza = json_decode(file_get_contents("sozlama/$chat_id"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑Taqiqlangan";
}else{
$salom = "✅Ruhsat etilgan";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑Taqiqlangan";
}else{
$chats = "✅Ruhsat etilgan";
}
$stiker = $baza["sticker"];
if($stiker == "false"){
$stiker = "☑Taqiqlangan";
}else{
$stiker = "✅Ruhsat etilgan";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑Taqiqlangan";
}else{
$link = "✅Ruhsat etilgan";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑Taqiqlangan";
}else{
$audio = "✅Ruhsat etilgan";
}
$video = $baza["video"];
if($video == "false"){
$video  = "☑Taqiqlangan";
}else{
$video = "✅Ruhsat etilgan";
}
$doc = $baza["doc"];
if($doc == "false"){
$doc = "☑Taqiqlangan";
}else{
$doc = "✅Ruhsat etilgan";
}
$forward_from = $baza["forward_from"];
if($forward_from == "false"){
$forward_from  = "☑Taqiqlangan";
}else{
$forward_from = "✅Ruhsat etilgan";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "☑Taqiqlangan";
}else{
$gif = "✅Ruhsat etilgan";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "☑Taqiqlangan";
}else{
$rasm = "✅Ruhsat etilgan";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "☑Taqiqlangan";
}else{
$golos = "✅Ruhsat etilgan";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "☑Taqiqlangan";
}else{
$contact = "✅Ruhsat etilgan";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑Taqiqlangan";
}else{
$user = "✅Ruhsat etilgan";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "☑Taqiqlangan";
}else{
$hashtag = "✅Ruhsat etilgan";
}
 $location = $baza["location"];
if($location == "false"){
$location = "☑Taqiqlangan";
}else{
$location = "✅Ruhsat etilgan";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "☑Taqiqlangan";
}else{
$video_note = "✅Ruhsat etilgan";
}
$is_animated = $baza["is_animated"];
if($is_animated == "false"){
$is_animated = "☑Taqiqlangan";
}else{
$is_animated = "✅Ruhsat etilgan";
}
$reply_to_message = $baza["reply_to_message"];
if($reply_to_message == "false"){
$reply_to_message = "☑Taqiqlangan";
}else{
$reply_to_message = "✅Ruhsat etilgan";
}
$game = $baza["game"];
if($game == "false"){
$game = "☑Taqiqlangan";
}else{
$game = "✅Ruhsat etilgan";
}
$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑Taqiqlangan";
}else{
$kirish = "✅Ruhsat etilgan";
}
file_put_contents("sozlama/$fadmin.lch","$chat_id");
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"<b>Lichkangizga yubordim!</b>",
'parse_mode'=>'html',
]);
bot('sendMessage', [
'chat_id'=>$fadmin,
'text'=>"$title<b>Guruh sozlamalari!</b>\n\n<b>✅Ruhsat etilgan fayllar</b>\n<b>☑Taqiqlangan fayllar</b>",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"salom","text"=>"👋 Salomlashish"],["callback_data"=>"M()salom","text"=>"$salom"],],
[["callback_data"=>"chats","text"=>"✏ Guruhda Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"sticker","text"=>"🎭Sticker"],["callback_data"=>"M()sticker","text"=>"$sticker"],],
[["callback_data"=>"doc","text"=>"📁Fayl"],["callback_data"=>"M()doc","text"=>"$doc"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward_from","text"=>"➡ Forward"],["callback_data"=>"M()forward_from","text"=>"$forward_from"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
[["callback_data"=>"is_animated","text"=>"🎭Animation sticker"],["callback_data"=>"M()is_animated","text"=>"$is_animated"],],
[["callback_data"=>"reply_to_message","text"=>"↩Reply"],["callback_data"=>"M()reply_to_message","text"=>"$reply_to_message"],],
[["callback_data"=>"game","text"=>"🖲Game"],["callback_data"=>"M()game","text"=>"$game"],],
[["callback_data"=>"kirish","text"=>"🗑Kirdi chiqdilarni tozalash"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
]
]),
]);
}
}

$callback = $update->callback_query;
$dataa = $callback->data;
$dataa = explode("()",$dataa);
if($dataa[0] == "M"){
$cid = $callback->from->id;
$mid = $callback->message->message_id;
$imid = $callback->inline_message_id;
$idd = file_get_contents("sozlama/$cid.lch");
$gets = bot("getChat",[
"chat_id"=>"$idd",
]);
$title = $gets->result->title;
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
if($baza["$dataa[1]"] == "true"){
$input = "false";
}else{
$input = "true";
}
$baza["$dataa[1]"] = $input;
file_put_contents("sozlama/$idd",json_encode($baza));
$baza = json_decode(file_get_contents("sozlama/$idd"),true);
$salom = $baza["salom"];
if($salom == "false"){
$salom = "☑Taqiqlangan️";
}else{
$salom = "✅Ruhsat etilgan";
}
$chats = $baza["chats"];
if($chats == "false"){
$chats = "☑Taqiqlangan️";
}else{
$chats = "✅Ruhsat etilgan";
}
$sticker = $baza["sticker"];
if($sticker == "false"){
$sticker = "☑Taqiqlangan";
}else{
$sticker = "✅Ruhsat etilgan";
}
$link = $baza["link"];
if($link == "false"){
$link = "☑Taqiqlangan";
}else{
$link = "✅Ruhsat etilgan";
}
$audio = $baza["audio"];
if($audio == "false"){
$audio = "☑Taqiqlangan";
}else{
$audio = "✅Ruhsat etilgan";
}
$video = $baza["video"];
if($video == "false"){
$video  = "☑Taqiqlangan";
}else{
$video = "✅Ruhsat etilgan";
}
$doc = $baza["doc"];
if($doc == "false"){
$doc  = "☑Taqiqlangan";
}else{
$doc = "✅Ruhsat etilgan";
}
$forward_from = $baza["forward_from"];
if($forward_from == "false"){
$forward_from  = "☑Taqiqlangan";
}else{
$forward_from = "✅Ruhsat etilgan";
}
$gif = $baza["gif"];
if($gif == "false"){
$gif  = "☑Taqiqlangan";
}else{
$gif = "✅Ruhsat etilgan";
}
$rasm = $baza["rasm"];
if($rasm == "false"){
$rasm  = "☑Taqiqlangan";
}else{
$rasm = "✅Ruhsat etilgan";
}
$golos = $baza["golos"];
if($golos == "false"){
$golos  = "☑Taqiqlangan";
}else{
$golos = "✅Ruhsat etilgan";
}
$contact = $baza["contact"];
if($contact == "false"){
$contact = "☑Taqiqlangan";
}else{
$contact = "✅Ruhsat etilgan";
}
$user = $baza["user"];
if($user == "false"){
$user = "☑Taqiqlangan";
}else{
$user = "✅Ruhsat etilgan";
}
$hashtag = $baza["hashtag"];
if($hashtag == "false"){
$hashtag = "☑Taqiqlangan";
}else{
$hashtag = "✅Ruhsat etilgan";
}
 $location = $baza["location"];
if($location == "false"){
$location = "☑Taqiqlangan";
}else{
$location = "✅Ruhsat etilgan";
}
$video_note = $baza["video_note"];
if($video_note == "false"){
$video_note  = "☑Taqiqlangan";
}else{
$video_note = "✅Ruhsat etilgan";
}
$is_animated = $baza["is_animated"];
if($is_animated == "false"){
$is_animated = "☑Taqiqlangan";
}else{
$is_animated = "✅Ruhsat etilgan";
}
$reply_to_message = $baza["reply_to_message"];
if($reply_to_message == "false"){
$reply_to_message = "☑Taqiqlangan";
}else{
$reply_to_message = "✅Ruhsat etilgan";
}
$game = $baza["game"];
if($game == "false"){
$game = "☑Taqiqlangan";
}else{
$game = "✅Ruhsat etilgan";
}
$kirish = $baza["kirish"];
if($kirish == "false"){
$kirish = "☑Taqiqlangan";
}else{
$kirish = "✅Ruhsat etilgan";
}
bot('editMessageText', [
'chat_id'=>$cid,
'message_id'=>$mid,
'text'=>"$title<b>Guruh sozlamalari!</b>\n\n<b>✅Ruhsat etilgan fayllar</b>\n<b>☑Taqiqlangan fayllar</b>",
'parse_mode'=>'html',
'inline_message_id'=>$imid,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[["callback_data"=>"salom","text"=>"👋 Salomlashish"],["callback_data"=>"M()salom","text"=>"$salom"],],
[["callback_data"=>"chats","text"=>"✏ Guruhda Suhbatlashish"],["callback_data"=>"M()chats","text"=>"$chats"],],
[["callback_data"=>"rasm","text"=>"📷Rasm"],["callback_data"=>"M()rasm","text"=>"$rasm"],],
[["callback_data"=>"link","text"=>"📡Link"],["callback_data"=>"M()link","text"=>"$link"],],
[["callback_data"=>"sticker","text"=>"🎭Sticker"],["callback_data"=>"M()sticker","text"=>"$sticker"],],
[["callback_data"=>"doc","text"=>"📁Fayl"],["callback_data"=>"M()doc","text"=>"$doc"],],
[["callback_data"=>"video","text"=>"🎬 Video"],["callback_data"=>"M()video","text"=>"$video"],],
[["callback_data"=>"audio","text"=>"🎶 Musiqa"],["callback_data"=>"M()audio","text"=>"$audio"],],
[["callback_data"=>"forward_from","text"=>"➡ Forward"],["callback_data"=>"M()forward_from","text"=>"$forward_from"],],
[["callback_data"=>"gif","text"=>"💾Gif"],["callback_data"=>"M()gif","text"=>"$gif"],],
[["callback_data"=>"golos","text"=>"🎤Golos"],["callback_data"=>"M()golos","text"=>"$golos"],],
[["callback_data"=>"contact","text"=>"👤Kontakt"],["callback_data"=>"M()contact","text"=>"$contact"],],
[["callback_data"=>"user","text"=>"📧Userlar"],["callback_data"=>"M()user","text"=>"$user"],],
[["callback_data"=>"hashtag","text"=>"#⃣HashTag"],["callback_data"=>"M()hashtag","text"=>"$hashtag"],],
[["callback_data"=>"location","text"=>"🏠Manzil"],["callback_data"=>"M()location","text"=>"$location"],],
[["callback_data"=>"video_note","text"=>"📹Yumoloq video"],["callback_data"=>"M()video_note","text"=>"$video_note"],],
[["callback_data"=>"is_animated","text"=>"🎭Animation sticker"],["callback_data"=>"M()is_animated","text"=>"$is_animated"],],
[["callback_data"=>"reply_to_message","text"=>"↩Reply"],["callback_data"=>"M()reply_to_message","text"=>"$reply_to_message"],],
[["callback_data"=>"game","text"=>"🖲Game"],["callback_data"=>"M()game","text"=>"$game"],],
[["callback_data"=>"kirish","text"=>"🗑Kirdi chiqdilarni tozalash"],["callback_data"=>"M()kirish","text"=>"$kirish"],],
]
]),
]);
}

if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }


  if(isset($update) and $Sgif == "false"){
if(isset($message->animation)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Scontact == "false"){
if(isset($message->contact)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Srasm == "false"){
if(isset($message->photo)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Ssticker == "false"){
if(isset($message->sticker)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Svideo == "false"){
if(isset($message->video)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Saudio == "false"){
if(isset($message->audio)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sdoc == "false"){
if(isset($message->document)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sforward_from == "false"){
if(isset($message->forward_from) or isset($message->forward_from_chat)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sgolos == "false"){
if(isset($message->voice)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Slink == "false"){
if((mb_stripos($mtext,"http") !==false) or (stripos($capt,"http://")!==false) or (stripos($capt,"bot?start=")!==false) or (stripos($mtext,"bot?start=")!==false) or (stripos($mtext,"https://")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Suser == "false"){
if((mb_stripos($mtext,"@") !==false) or (stripos($capt,"@")!==false) or (stripos($capt,"@")!==false) or (stripos($mtext,"@")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Shashtag == "false"){
if((mb_stripos($mtext,"#") !==false) or (stripos($capt,"#")!==false) or (stripos($capt,"#")!==false) or (stripos($mtext,"#")!==false)){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Slocation == "false"){
if(isset($message->location)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Svideo_note == "false"){
if(isset($message->video_note)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sis_animated == "false"){
if(isset($message->is_animated)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot ('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sreply_to_message == "false"){
if(isset($message->reply_to_message)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

if(isset($update) and $Sgame == "false"){
if(isset($message->game)!==false){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
bot('deleteMessage', [
'chat_id'=>$chat_id,
'message_id'=> $mesid,
]);
}
}
}

    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+120 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Guruhga faqat adminlar bot qoshishi mumkin!</b>",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 == "/silent" &&$fadmin==$admin){
	 if($cty == "group" or $cty == "supergroup"){
   bot('restrictChatMember',[
   'user_id'=>$rtid,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>false,
   'can_send_media_messages'=>false,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$re_name *umrbod* • guruh sukunati • ro'yxatiga qo'shildi❗",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"Yarativchi",'url'=>"https://telegram.me/Live_Xakkerlar"]
	]
    ]
    ])
]);
file_put_contents("data/$chat_id/silent.txt",$rtid);
}
}

if($text1 == "/unsilent" &&$fadmin==$admin){
 if($cty == "group" or $cty == "supergroup"){
 bot('restrictChatMember',[
   'user_id'=>$rtid,   
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>true,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$re_name dan *jazo* olib tashlandi endi guruhda yozishi mumkin.☝️",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'markdown',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
     [
    ['text'=>"$re_name", 'url'=>"https://telegram.me/$re_user"]
    ],
	[
	['text'=>"Yaratuvchi",'url'=>"https://telegram.me/Live_Xakkerlar"]
	]
    ]
    ])
]);
unlink("data/$chat_id/silent.txt");
}
}

 if($text1=="/link"){
 if($cty == "group" or $cty == "supergroup"){
$getlink = file_get_contents("https://api.telegram.org/bot924030287:AAHVWpV32Vz8gU1e7ljyl_LM_BccCUKm6uk/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"Guruh havolasi:\n$getlinkde",
    'parse_mode'=>'html',
     ]);
 }
}

if($text1 == "/start" or $text1 == "/start@QirolichaUzBot"){
$chm = file_get_contents("news.txt");
bot('forwardMessage', [
'chat_id'=>$chat_id,
'from_chat_id'=>$kanali,
'message_id'=>$chm,
]);
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>Bot lichkasiga yozing!</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "🙃 Assalomu Aleykum $ufname $uname. 
🔴Men guruhlarda gaplasha olaman va guruh adminlari uchun qulay bo‘lgan buyruqlar orqali guruhni boshqarishga ko‘maklashaman! 
Xojakeni grupalarga qoshib taweng😀 !",
'parse_mode' => 'markdown',
]
]),
]);
}
if($text == "/xabar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Assalomu alaykum admin panelga xush kelibsiz",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'👤Send user'],['text'=>'👥Send group']],
			   [['text'=>'👤Userlar'],['text'=>'👥Guruhlar']],
				[['text'=>'📊Statistika']]
			]
		]),
	]);
       
}

if($text == "🔙orqaga"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Assalomu alaykum admin panelga xush kelibsiz",
    'parse_mode' => 'html',
    'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'👤Send user'],['text'=>'👥Send group']],
				[['text'=>'👤Userlar'],['text'=>'👥Guruhlar']],
				[['text'=>'📊Statistika']]
			]
		]),
	]);
       
}

if($text == "👥Guruhlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
  'parse_mode'=>'html',
 'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'🔙orqaga']],
			]
		]),
	]);
       
}

if($text == "👤Userlar"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
  'parse_mode'=>'html',
 'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'🔙orqaga']],
			]
		]),
	]);
       
}

if($text == "📊Statistika"&&$fadmin==$admin){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
   bot('sendmessage',[
   'chat_id'=>$admin,
    'reply_to_message_id'=>$mesid,
    'text'=> "<b> Bot statistikasi:</b>\n\nA'zolar: <b>$us</b>\n Guruhlar: <b>$gr</b>\nUmumiy: <b>$obsh</b>",
'parse_mode' => 'html',
 'reply_markup'=>json_encode([
        'resize_keyboard'=>true,
			'keyboard'=>[
				[['text'=>'🔙orqaga']],
			]
		]),
	]);
       
}

if($data=="stat"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>Guruh adminlari ishlatishi mumkin bolgan buyruqlar:</b>
    
<b>/sozlama</b> - Guruhni sozlash;
<b>/ro</b> - Guruh azosini Read - Only rejimiga tushuradi;
<b>/unro</b> - Guruh azosidan cheklovni oladi;
<b>/kick</b> - Guruh azosini guruhdan chiqaradi;
<b>/warn</b> - Guruh azosiga ogohlantirish beradi va ogohlantirishlar soni 3 taga yetganda jazo sifatida guruhdan chiqaradi;
<b>/unwarn</b> - Guruh azosidagi  ogohlantirishlarni olib tashlaydi;
<b>/ban</b>  - Guruh azosini guruhdan chiqaradi, boshqa qaytib kira olmaydi;
<b>/unban</b> - Bandan oladi;
<b>/pin</b> - Xabarni yuqoriga qistiradi;
<b>/fulladmin</b> - Guruh azosini guruhga fulladmin qiladi;
<b>/admin</b> - Guruh azosini guruhga admin qiladi;
<b>/deladmin</b> - Adminlikdan oladi;
<b>/silent</b> - Bir umrga yozishdan cheklaydi;
<b>/unsilent</b> - Jazoni olib tashlaydi",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'Foydali','callback_data'=>"foydali"]],
[['text'=>'💫Orqaga qaytish', 'callback_data'=>"test"]]
]
]),
]);
}

if($data=="foydali"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "<b>Guruhda va bot lichkasida ishlatilishi mumkin bolgan buyruqlar</b>
    
<b>/id</b> - Sizning id manzilingiz;
<b>/gid</b> - Guruhingizni id manzili;
<b>/soat</b> - O'bekiston soatini korsatadi;
<b>/sana</b> - Kun, Oy, Yilni korsatadi;
<b>/xojaka</b> - Siz izlaga rasmni jonatadi;
<b>/screen</b> - Saytni rasmga olib jonatadi;
<b>/admins</b> - Adminlar royxatini korsatadi;
<b>/link</b> - guruh linkini olib beradi",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['text'=>'💫Orqaga qaytish', 'callback_data'=>"test"]],
]
]),
]);
}

if($data=="test"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🙃 Assalomu Aleykum $ufname $uname. 
🔴Men guruhlarda gaplasha olaman va guruh adminlari uchun qulay bo‘lgan buyruqlar orqali guruhni boshqarishga ko‘maklashaman! 
Xojakeni grupalarga qoshib taweng😀 !",
'parse_mode' => 'html',

]
]),
]);
}

$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;
$sana = date('d-M Y',strtotime('5 hour'));
$soat = date('H:i:s', strtotime('5 hour'));
$login0 = $message->chat->username;
$kun3 = date('N',strtotime('5 hour')); 
$hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
$ex=explode("$kun3",$hafta); 
$hafta1="$ex[1]"; 
$kun1 = date('z ',strtotime('5 hour')); 
$a = 153;
$c2 = $a-$kun1;
$d = date('L ',strtotime('5 hour'));
$b = $c2+$d;
$f = $b+81;
$e = $b+240;
$kun2 = date('H ',strtotime('5 hour')); 
$a2 = 23;
$b2 = $a2-$kun2;
$kun3 = date('i ',strtotime('5 hour')); 
$a3 = 59;
$b3 = $a3-$kun3;
$kun4 = date('s ',strtotime('5 hour')); 
$a4 = 60;
$b4 = $a4-$kun4;

if(true){
bot('setChatDescription',[
'chat_id'=>$chat_id,
'description'=>"👋 Guruhimizga xush kelibsiz!
😊Kuningiz xayrli va Barokatli o'tsin!
📆Bugun: $sana-yil
⏰Soat: $soat
📅Hafta kuni: $hafta1
🛡Guruhimiz: @$login0
👥Guruh a'zolari: $count
",
]);
}

if(mb_stripos($text1,"/xojaka") !== false){ 
$ex = explode(" ",$text1);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://yandex.ru/images/search?text=$ex[1]",
]);
}  

   if(stristr($text1,"ض") or stristr($text1, 'ص') or stristr($text1, 'ث') or stristr($text1, 'ق') or stristr($text1, 'ف') or stristr($text1, 'غ') or stristr($text1, 'ع') or stristr($text1, 'ه') or stristr($text1, 'خ') or stristr($text1, 'ح') or stristr($text1, 'ج') or stristr($text1, 'ش') or stristr($text1, 'س') or stristr($text1, 'ي') or stristr($text1, 'ب') or stristr($text1, 'ل') or stristr($text1, 'ا') or stristr($text1, 'ت') or stristr($text1, 'ن') or stristr($text1, 'م') or stristr($text1, 'ك') or stristr($text1, 'ط') or stristr($text1, 'ذ') or stristr($text1, 'ء') or stristr($text1, 'ؤ') or stristr($text1, 'ر') or stristr($text1, 'ى') or stristr($text1, 'ئ') or stristr($text1, 'ة') or stristr($text1, 'و') or stristr($text1, 'ز') or stristr($text1, 'ظ') or stristr($text1, 'د') or stristr($text1, 'أ') or stristr($text1, 'إ') or stristr($text1, 'آ')){
bot('deletemessage',[
        'chat_id'=>$chat_id,
        'message_id'=>$message_id,
      ]);
bot('restrictChatMember',[
        'chat_id'=>$chat_id,
        'user_id'=>$user_id,
        'until_date'=>strtotime("+ 180 minutes "),
      ]);
   bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"$ufname $uname Habarida Arab Harflari Qatnashgani Uchun 3 soatga MUTE Qilindi*",
      'parse_mode'=>"markdown", 
      ]);
  }
  
 if($text1=="/admins" or $text1 == "/admins@Xojaka_robot"){
  $up = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatAdministrators?chat_id=".$chat_id),true);
  $result = $up['result'];
  foreach($result as $key=>$value){
    $found = $result[$key]['status'];
    if($found == "creator"){
      $owner = $result[$key]['user']['id'];
   $owner2 = $result[$key]['user']['first_name'];
    }
if($found == "administrator"){
$innames = str_replace(['[',']'],'',$result[$key]['user']['first_name']);
$idilar = $result[$key]['user']['id'];
$msg1 = "$msg1"."\n👨🏻‍💻[$innames](tg://user?id=$idilar)";
  }
   }
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"👨‍💻*Guruh yaratuvchisi:* [$owner2](tg://user?id=$owner)
👥*Guruh adminlari:* $msg1",
'reply_to_message_id'=>$mid,
'parse_mode'=>"MarkDown",
 ]);
}

if($mtext=="/screen" or ($mtext=="/screen@$botim")){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"*😊 Bu sizga hech qiyinchiliksiz istalgan saytni screen qilib olishingiz mumkin buning uchun*  /screen https://sayt nomi \n*Eslatma* https:// *bo'lish shart va albatta /screen dan so'ng bitta joy qoldiring*",
'parse_mode'=>'markdown',
'reply_to_message_id'=>$mid,
]);
}

if(mb_stripos($mtext,"/screen") !== false){ 
$ex = explode(" ",$text);
bot('SendPhoto',[
'chat_id'=>$chat_id, 
'reply_to_message_id'=>$mid,
'photo'=>"https://api.site-shot.com/?url=$ex[1]",
]);
}

		if(stripos($mtext,"/soat") !== false){
		$soat = date('H:i', strtotime('3 hour'));
  $text = "⏰ Hozir soat: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		if(stripos($mtext,"/sana") !== false){
        $bugun = date('d-M Y',strtotime('5 hour'));
  $text = "📆 Bugungi sana: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/id") !== false){
  $text = "*🆔️ Sizning idngiz:* `$fadmin`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"/gid") !== false){
  $text = "*🆔️ Guruh idsi:* `$chat_id`";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if($text1 == "/ro" or $text1 == "Ro" or $text1 == "RO" or $text1 == "rO"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+120 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> Siz <b>Read - Only</b> rejimiga tushirildingiz!",
      'parse_mode' => 'html'
  ]);
}
}

    if($text1 == "/Kick"  or  $text1 == "kick"  or $text1 == "/kick"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>kick</b> boldi!",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 =="/ban" or $text1 == "Xayr"&&$fadmin==$admin){
       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> boldingiz!",
        'parse_mode'=>'html'
    ]);
  }

    if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"oneni")!==false)  or (stripos($mtext,"skaman")!==false) or (stripos($mtext,"sikaman")!==false) or (stripos($mtext,"Axmoq")!==false) or (stripos($mtext,"chumo")!==false)  or  (stripos($mtext,"dalbayob")!==false) or  (stripos($mtext,"skay")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"dalban")!==false) or (stripos($mtext,"yiban")!==false) or (stripos($mtext,"jalab")!==false) or (stripos($mtext,"koten")!==false) or (stripos($mtext,"qanjiq")!==false) or (stripos($mtext,"ktk")!==false)  or  (stripos($mtext,"am")!==false) or  (stripos($mtext,"шшс")!==false) or (stripos($mtext,"пшн")!==false) or (stripos($mtext,"ктк")!==false) or (stripos($mtext,"котагим")!==false) or (stripos($mtext,"haqorat")!==false) or (stripos($mtext,"sex")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"kotinga")!==false) or  (stripos($mtext,"latta")!==false)  or  (stripos($mtext,"qotoq")!==false) or  (stripos($mtext,"naxuy")!==false) or (stripos($mtext,"mol")!==false) or (stripos($mtext,"eshek")!==false) or (stripos($mtext,"suchka")!==false) or (stripos($mtext,"suka")!==false) or (stripos($mtext,"koten")!==false) or  (stripos($mtext,"kotin")!==false)  or  (stripos($mtext,"qotaq")!==false) or  (stripos($mtext,"qoto")!==false) or (stripos($mtext,"qotoq")!==false) or (stripos($mtext,"omingni")!==false) or (stripos($mtext,"ominga")!==false) or (stripos($mtext,"gandon")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+10800 minutes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "<a href='tg://user?id=$fadmin'>$first_name</a> <b>3 kun</b>ga <b>Read - Only</b> rejimiga tushdirildi.\n<b>Sabab: Haqorat qildi!</b> ",
        'parse_mode' => 'html'
    ]);
}
}

if((stripos($mtext,"/panel")!==false) or (stripos($mtext,"/sozlama")!==false) or (stripos($mtext,"/warn")!==false) or (stripos($mtext,"/kick")!==false) or (stripos($mtext,"/unwarn")!==false) or (stripos($mtext,"/info")!==false) or (stripos($mtext,"/sozlamalar")!==false) or (stripos($mtext,"/ban")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+1 minut");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "<a href='tg://user?id=$fadmin'>$first_name</a> <b>1 minut</b>ga <b>Read - Only</b> rejimiga tushdirildi.\n<b>Sabab: admin buyruqlarini ishlatdi!</b> ",
        'parse_mode' => 'html'
    ]);
}
}

 if($text1 == "/admin"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Sizni tabriklayman, Siz endi guruh <b>administratorisiz</b>",
    'parse_mode'=>'html'
  ]);
}
}

if($text1 == "/fulladmin"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>true,
    'can_edit_messages'=>true,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Sizni tabriklayman, Siz endi guruhda <b>fulladministratorisiz</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text1 == "/deladmin"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Siz endi guruh administratori <b>emassiz</b>",
    'parse_mode'=>'html'
  ]);
}
}

  if($text1 == "/unro" or $text1 == "UNRO" or $text1 == "unro"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> Sizdan cheklov olindi, guruhda <b>yozishingiz mumkin!</b>\nEndi qoidani <b>buzmaysiz</b> degan umiddaman",
    'parse_mode'=>'html'
  ]);
}
}

if($text1 == "/pin" or $text1 == "Pin" or $text1 == "PIn" or $text1 == "PIN" or $text1 == "piN" or $text1 == "pIN" or $text1 == "pIn" or $text1 == "pIN"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
}
}

if($text1=="/leave"&&$fadmin==$admin) {
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>Hop xojayin, guruhni tark etaman!</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}

if((stripos($mtext,"ping")!==false) and $fadmin == $admin){
      $sx=explode("\n",$text1);
      $matn = $sx[2];
      $idsi  = $sx[1];
  bot('sendMessage',[
       'chat_id'=>$idsi,
       'text'=>$matn,
       'parse_mode'=>'markdown',
       'disable_web_page_preview' => true,
       ]);
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"pong",
       ]);
  }

 if($text1 == "ban" or $text1 == "Ban" or $text1== "/Ban" or  $text1 == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> guruhdan <b>ban</b> boldi!",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text1 == "Unban"  or  $text1 == "/unban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ban</b>dan olindi!",
        'parse_mode'=>'html'
    ]);
}
}

if($text1 == "warn" or $text1 == "Warn" or $text1 == "/warn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$warn = file_get_contents("warn/$chat_id&$id.dat");
if($warn){
$warn +=1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
if($warn !=3){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$oldi = bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni: <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> shu vaqtgacha unga berilgan ogohlantirishlarga <b>befarq boldi</b>, jazo sifatida esa guruhdan <b>chetlatiladi!</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+120 minutes");
  bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
 $warn = 0;
file_put_contents("warn/$chat_id&$id.dat","$warn");
}
}else{
$warn = 1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> <b>ogohlantirish oldi.</b>\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

  if($text1 == "unwarn" or $text1 == "Unwarn" or $text1 == "/unwarn"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 $warn = 0;
 file_put_contents("warn/$chat_id&$id.dat","$warn");
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"<a href='tg://user?id=$id'>$from_user_first_name</a> dan barcha <b>ogohlantirishlar</b> olib tashlandi.\nEndi undagi ogohlantirishlar soni <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
}

$replyik = $message->reply_to_message->text;
    $yubbi = "📩 Yuboriladigan xabar matnini kiriting. Xabar turi markdown";

    if($text == "👤Send user" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"*Admindan xabar*\n$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }   
      
       if($text == "👥Send group" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text == "/cancel"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"*Admindan xabar*\n$text",
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
}

if(isset($update) and $Skirish == "true"){
if(isset($message->new_chat_member) or isset($message->left_chat_member)!==false){
    bot('deleteMessage',[
        'chat_id'=>$message->chat->id,
        'message_id'=>$message->message_id,
    ]);
}
}

if($text1 == '/file' and $chat_id == $admin){
bot('sendDocument',['chat_id'=>$chat_id,'document'=>new CURLFile(__FILE__)]);
}

?>
