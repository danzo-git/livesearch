<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
            <div class="container" style="margin-top:50px;">
                <div class="row">
                       <div class="col-lg-3"></div>
                       <div class="col-lg-6">
                            <div class="text-center text-danger">
                                AutoComplete library
                            </div>
                            <div class="form-group">search_list
                                <h4 class="text-uppercase text-center">recherchez quelque chose</h4>
                                <input type="text" name="search" id="search" class="form-control" onfocus="" value="">
                            </div>
                            <div id="search_list"></div>
                        </div>  
                        <div class="col-lg-3"></div>   
                </div>    
            </div>  
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function(){
        $('#search').on('keyup',function(){
            var query=$(this).val();
            $.ajax({
                url:'search',
                type:'GET',
                data:{
                    'search':query
                },
                success:function(data){
                    $('#search_list').html(data);
                }
           
            });
        });
    });
</script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> --}}
</html>