<!DOCTYPE html>
<html>
<head>
    <title></title>

    <meta charset="utf-8" value="test file">

</head>
<body>

    <div id="root">

        <input type="text" id="input" v-model="message">

        <p>
            The Value of the input is : @{{message}}
        </p>
        
    </div>



    <script src="/files/vue.js"></script>
    <script type="text/javascript">
        
        var app = new Vue({
            el:'#root',
            data:{
                message:'Hello World'
            }
        });

    </script>
</body>
</html>