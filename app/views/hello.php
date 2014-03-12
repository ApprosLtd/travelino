<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Laravel PHP Framework</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="/packages/bootstrap/css/bootstrap.min.css">
    
</head>
<body>
  <div class="container">
    <div class="row" style="margin: 20px 0;">
      <div class="col-lg-3">
        <ul>
        <?
        if (count($regions) > 0) {
            foreach ($regions AS $region) {
        ?>
          <li><a class="item" href="#"><?= $region->CountryName ?></a></li>
        <?
            }
        }
        ?>
        </ul>
      </div>
      <div class="col-lg-9 content"></div>
    </div>
  </div>
  
  <script>
    $('.item').on('click', function(){
        
        $.ajax({
            url: '/content',
            dataType: 'html',
            type: 'POST',
            data: {
                titles: $(this).html()
            },
            success: function(html){
                
                //html = "<h3>"+$(this).html()+"</h3>\n" + html;
                
                $('.content').html( html );
            }
        });
        
        return false;
    });
  </script>
  
</body>
</html>
