<!DOCTYPE html>
<html lang="ja">
<head>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-239F74QEVS"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-239F74QEVS');
	</script>
  <title>抽選会応募フォーム@yield('title')</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, shrink-to-fit=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="抽選会応募フォーム">
  <link rel="shortcut icon" type="image/x-icon" href="http://www.tg-nextone.com/images/common/favicon.ico">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container-xl">
    <div class="mt-4"></div>
      @yield('contents')
    <div class="mt-5"></div>
    <p class="fs-6">ご入力いただいた個人情報は弊社にて厳重に管理の上、弊社の供給する商品・サービスのお知らせに限り、利用致します。尚、上記の利用目的において東京ガスと共同利用する場合があります。その他、個人情報の取り扱いについては、弊社ホームページの<a
        href="http://www.tg-nextone.com/customer/" target="_blank">「個人情報保護方針」</a>及び東京ガスホームページの<a
        href="https://www.tokyo-gas.co.jp/utility/privacy/index.html" target="_blank">「個人情報保護方針」</a>をご確認ください。</p>
    <div class="mt-5"></div>
    <p class="text-small weight text-center">&copy;2016&nbsp;TOKYO&nbsp;GAS&nbsp;Next&nbsp;one&nbsp;Co.,Ltd</p>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>