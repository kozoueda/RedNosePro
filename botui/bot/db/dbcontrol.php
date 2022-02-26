<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>チャットボット</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link rel="stylesheet" href="../css/botui-theme-default.css" / -->
    <!-- link rel="stylesheet" href="../css/botui.min.css" / -->
    <link rel="stylesheet" href="https://unpkg.com/botui/build/botui.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/botui/build/botui-theme-default.css" />
  </head>
  <body>
  <p>
CSV出力をおこないます。<br />
  <form id="form1" class="form_wrap" action="./download.php" method="POST">
            <div class="csv_export_textarea">
                <input type="hidden" name="key" value="runrunrun">
                <input type="submit" value="csv export">
            <div>
</form>

<p>
CSVファイルを選択して下さい<br />
<form action="./upload.php" method="post" enctype="multipart/form-data">
  CSVファイル：<br />
  <input type="file" name="csvfile" size="30" /><br />
  <input type="submit" value="アップロード" />
</form>
</p>
		</form>
		
		<p>
TABLE削除<br />
 <form id="form2" class="form_wrap" action="./deletetable.php" method="POST">
            <div class="delete_textarea">
                <input type="hidden" name="key" value="delete">
                <input type="submit" value="delete table">
            <div>

      </body>
</html>