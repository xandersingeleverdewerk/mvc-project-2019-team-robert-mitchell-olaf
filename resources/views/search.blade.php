<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0 ">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Search Autocomplete</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Search Name by Auto complete</h1>
        <input type="text" class="typeahead form-control" name="name">
    </div>
    <script type="text/javascript">
        var path="{{route('autocomplete')}}";
        $('input.typeahead').typeahead({
            source:function (query,process) {
                return $.get(path,{query:name},function (data) {
                    return process(data);
                })
            }
        });
    </script>
</body>
</html>

