	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
	<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/css/animate.css">
	<link rel="stylesheet" href="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/css/main-9cf1107822.css">
	<script src="http://<?php echo $_SERVER["HTTP_HOST"];?>/app/libs/jquery/jquery-1.11.1.min.js"></script>
    <script>
        $(document).ready(function(){
            //news
            $('#down_search_field').keyup(function(){
                var search = $('#down_search_field').val();
                $.ajax({
                    type: 'POST',
                    url: "ajax/searching.php",
                    data: {search: search},
                    success: function (item) {
                        $('#search_list').show();
                        $('#search_list').html(item);
                        if (search == ""){
                            $('#search_list').hide();
                        }
                    }
                });
            });
        });
    </script>
